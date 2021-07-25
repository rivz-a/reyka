<?php

 
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

use Cake\ORM\TableRegistry;


class HomeController extends AppController{    

    public function index(){       
         
        $query = TableRegistry::getTableLocator()->get('Pages');
        $pages = $query->find();

        $query = TableRegistry::getTableLocator()->get('Categories');
        $menu = $query->find('all',array('order'=>array('sort')));

        //debug($menu);
        
        $this->set(compact('pages','menu'));
    }

}