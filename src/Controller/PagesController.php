<?php

 
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

use Cake\Mailer\Email;
use Cake\Validation\Validator;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{    
    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
 

    public function display(...$path)
    {              
        $this->loadComponent('Flash');
        $count = count($path);
        if (!$count) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }       

        
    }

    public function sendmail(){        
        
        $validator = new Validator();
        $email = new Email('default');
        $validator  
                ->requirePresence('name')
                ->notEmpty('name', 'Пожалуйста введите имя')
                ->requirePresence('tel')
                ->notEmpty('tel', 'Пожалуйста введите телефон')
                ->requirePresence('send')
                ->notEmpty('send', 'Введите причину обращения');
        $errors = $validator->errors($this->request->getData());
 
        //debug ($errors);

        if (empty($errors)){
            $email            
            ->setFrom('admin@rul-reika.ru')
            ->setTo('pr@rul-reika.ru')
            ->setEmailFormat('html')     
            ->setSubject('Заявка с сайта rul-reika.ru')       
            ->viewBuilder()->setTemplate('default')
            ->setLayout('send_email');

                if ($email->send($this->request->getData())){
                    $this->Flash->success('Заявка отправлена! Спасибо за доверие!');
                    return $this->redirect($this->referer());
                }
                else{
                    $this->Flash->error('Ошибка!');                   
                    return $this->redirect($this->referer());
                }
        }
        else{
            
            foreach ($errors as $error){                              
                $this->Flash->error($error['_empty']);
            }            
            return $this->redirect($this->referer());
        }   
    }
    
    public function loadmarka(){
        echo $_POST['id']; 
        if($_POST['id'])
        {
            //$id=$_POST['id'];
            $query = TableRegistry::getTableLocator()->get('Articles');

            $models = $this->query->find()->where(['category_id' => $id]);     

            foreach ($models as $model) {?>
                <option value="<?php echo $model['id']; ?>"><?php echo $model['title']; ?></option>    
                <? }           
            
        }
    }
} 