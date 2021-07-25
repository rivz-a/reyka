<?php

namespace App\Controller;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Cache\Cache;

class AppController extends Controller
{  

    public function initialize()
    {
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
            'loginRedirect' => [
                'prefix' => 'backdoor',
                'controller' => 'Categories',
                'action' => 'door'
            ],
            'logoutRedirect' => [
                'prefix' => false,
                'controller' => 'Categories',
                'action' => 'home'                
            ]
        ]);
        
 
        if ($this->Auth->user('id')=='2'){
            $_SESSION['KCFINDER'] = array('disabled' => false);
        }
        //Проверяем, если есть префикс в маршрутизации и если он не равен нулю, тогда к $admin присваиваем истину и тащим $admin в меню
        $admin = (null!==($this->request->getParam(['prefix'])) && $this->request->getParam(['prefix']) == 'backdoor') ? 'backdoor/' : false;
  
        //Загружаем модель Categories
        $this->loadModel('Categories');
         //Загружаем модель Categories
         $this->loadModel('Articles');
        
        //достаеем меню  
        $pod_menu_reyka = $this->podMenuHtml('1');
        $pod_menu_electro = $this->podMenuHtml('2');
        $pod_menu_nasos = $this->podMenuHtml('83');
        $pod_menu_stati = $this->podMenuHtml('7');
        

        $cat_menu_tree = $this->Categories->find('threaded')
        ->order(['lft' => 'ASC']);   
        
        $this->set(compact('cat_menu_tree','pod_menu_reyka','pod_menu_electro','pod_menu_nasos','pod_menu_stati'));

    }


    public function beforeFilter(Event $event)
    {
        $this->Auth->allow(['index', 'view', 'display','sendmail','home','onas','kontakt','electro','reduktor','nasosgur','nasoseur','starter','generator','sitemap']);

        // Администратор может получить доступ к каждому действию
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Иначе, запрещаем по умолчанию
        return false;
        
        
    }   

    public function getCatMenu($admin = false){
        if($admin){
            $cat_menu_tree = $this->Categories->find('threaded');            
            $cat_menu = $this->_catMenuHtml($cat_menu_tree, $admin);
            return $cat_menu;
        }
        
        //Если кеш меню есть, то ничего не делаем. Иначе мы записываем запрос из БД в кеш
        /*$cat_menu = Cache::read('cat_menu','my_cache');
        
        if(!$cat_menu){
            $cat_menu_tree = $this->Categories->find('threaded',array('lft'=>'ASC'));
            $cat_menu = $this->_catMenuHtml($cat_menu_tree);
            $cat_menu = Cache::write('cat_menu', $cat_menu, 'my_cache');
        }*/
        
        $cat_menu_tree = $this->Categories->find('threaded')
        ->order(['lft' => 'ASC']);

        
        

        $cat_menu = $this->_catMenuHtml($cat_menu_tree, $admin);      
        return $cat_menu;      
    } 

    protected function _catMenuHtml($cat_menu_tree = false, $admin){
        if (!$cat_menu_tree) return false;
        $html = '';
        foreach($cat_menu_tree as $item){
            $html .= $this->_catMenuTemplate($item,$admin);
        } 
        return $html;
    } 

    protected function _catMenuTemplate($categories, $admin){
        //Буферизируем полученные данные, затем очищаем буфер
        ob_start();
        //Подгружаем шаблон
        include (APP."Template/Element/menu_tpl.ctp");
        return ob_get_clean();
    }  


    public function podMenuHtml($id)
    {

        if (($id==2)OR($id==82)OR($id==7)){
            $podMenu = $this->Articles->find()
            ->where(['category_id' => $id])
            ->order(['menu' => 'ASC']); 
        }        
        else{
            $podMenu = $this->Categories->find()
            ->where(['parent_id' => $id])
            ->order(['menu' => 'ASC']);            
        }

        
        $html = '';

        foreach($podMenu as $item){
            $html .= $this->_catPodMenuTemplate($item);
        } 
        return $html;
    }

    protected function _catPodMenuTemplate($item){
        //Буферизируем полученные данные, затем очищаем буфер
        ob_start();
        //Подгружаем шаблон
        include (APP."Template/Element/menu_i_tpl.ctp");
        return ob_get_clean(); 
    }

   

    public static function translit($string) {
        $converter = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '', 'ы' => 'y', 'ъ' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        'А' => 'A', 'Б' => 'B', 'В' => 'V',
        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        );
        $str = strtr($string, $converter);
        $str = strtolower($str);
        $str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
        $str = trim($str, "-");
        $str = str_replace(" ","-",$str);
        $str = str_replace("--","-",$str);
        $str = str_replace("--","-",$str);
        $str = str_replace("--","-",$str);
        return $str;
    }
}

