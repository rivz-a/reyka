<?
// src/Controller/UsersController.php

namespace App\Controller\Backdoor;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{   
    
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add','logout']);
        $this->viewBuilder()->setLayout('reyka_backdoor');  
    }

    public function index()
    {
        $this->set('users', $this->Users->find('all'));
    }

    public function view($id)
    {
        $user = $this->Users->get($id); 
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            // Prior to 3.4.0 $this->request->data() was used.
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }

    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Неверное имя пользователя или пароль, повторите попытку'));
        }
    }

    public function logout()
    {
        $this->Flash->success('Теперь вы вышли из системы.');
        return $this->redirect($this->Auth->logout());
    }

}