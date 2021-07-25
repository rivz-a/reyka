<?

namespace App\Controller\Backdoor;

use App\Controller\AppController;
use Cake\Http\Exception\NotFoundException;
use Cake\Cache\Cache;
use Cake\ORM\Query;
use Cake\ORM\Table;


class ArticlesController extends AppController
{   
    public function initialize(){
        
        parent::initialize();
        $this->viewBuilder()->setLayout('reyka_backdoor');  

    }

    public function isAuthorized($user)
    {
        // Все зарегистрированные пользователи могут добавлять статьи
        // До 3.4.0 $this->request->param('action') делали так.
        if ($this->request->getParam('action') === 'add') {
            return true;
        }
    
        // Владелец статьи может редактировать и удалять ее
        // До 3.4.0 $this->request->param('action') делали так.
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            // До 3.4.0 $this->request->params('pass.0') делали так.
            $articleId = (int)$this->request->getParam('pass.0');
            if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
                return true;
            }
        }
    
        return parent::isAuthorized($user);
    }    
    
    public function index($page_url = null)
    {   
        
        //Загружаем модель Categories
         $this->loadModel('Categories');

        if ( is_null($page_url)) {
            throw new NotFoundException('Такой страницы нет.1..');
        }

        $page = $this->Categories->findByUrl($page_url);

       
        if (!$page) {
            throw new NotFoundException('Такой страницы нет...');
        }

        $this->set(compact('page_url','page'));

        
    }   

    public function door($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');  

            //Загружаем модель Categories
            $this->loadModel('Categories');

            //достаем страницу настроек
            $settings = $this->Settings->get('1'); 

            $articles = $this->Articles->find();                       

            $this->set(compact('articles','settings'));         
        }
   

    public function view($id = null)
    {
        //Условие для блока стоимости ремонта, когда в контроллер приходит запрос post
        if ($engine = $this->request->is('post')){
            
            $engine = $this->request->getData();           
            $article = $this->Articles->get($engine['Engine']);
            $this->set(compact('article'));
        }
        //Иначе выводим страницу
        else{  
        $article = $this->Articles->get($id);
        $this->set(compact('article'));
        }
    }

    public function add()
    {
        $article = $this->Articles->newEntity();
        if ($this->request->is('post')) {
            $article = $this->Articles->patchEntity($article, $this->request->getData());
            $article->user_id = $this->Auth->user('id');

            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Новая страница успешно сохранена!'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Невозможно создать новую страницу!'));
        }
        $this->set('article', $article);
        
        // Просто добавляем список категорий для возможности выбора
            // одной категории для статьи
            $parentCategories = $this->Categories->find('treeList');               
            $this->set(compact('parentCategories'));
       
        $this->set(compact('categories'));
    }

    
    public function edit($id = null)
    {
        $article = $this->Articles->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Articles->patchEntity($article, $this->request->getData());
            if ($this->Articles->save($article)) {
                $this->Flash->success(__('Ваша статья была обновлена.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ошибка обновления вашей статьи.'));
        }

        $this->set('article', $article);
        // Просто добавляем список категорий для возможности выбора
        // одной категории для статьи
        $categories = $this->Articles->Categories->find('treeList');
        $parentCategories = $this->Categories->find('treeList');               
            $this->set(compact('parentCategories'));
       
        $this->set(compact('categories'));
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);

        $article = $this->Articles->get($id);
        if ($this->Articles->delete($article)) {
        $this->Flash->success(__('Статья с id: {0} была удалена.', h($id)));
        return $this->redirect(['action' => 'index']);
        }
    }
    
    
}