<?php

  
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;
use ArrayObject;

class StatiController extends AppController

    {
        public function initialize(){
            parent::initialize();
            //Подключаем лейоут для страницы категории
            $this->viewBuilder()->setLayout('reyka_categories');  
            
        }

        public function index($page_url = null)
        {
            
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
            //Загружаем модель Articles
            $this->loadModel('Categories');
                  
            //Если загружена категория ремонт электрорейки, то присваиваем к $page эту страницу            
            if ( is_null($page_url)) {

                $page = $this->Categories->findById(7);

                $children = $this->Articles->find()
                    ->where([
                    'category_id' => '7'                    
                    ])
                    ->order(['name' => 'ASC']);

                
                $parent = null;
            }

            //Иначе присваиваем к $page потомка 
            else{

                $page = $this->Articles->findByUrl($page_url);

                if (!$page->toArray()) {
                throw new NotFoundException('Такой страницы нет...');
                }
                
                //Присваиваем родителя к новому объекту
                $parent = $this->Categories->get(2);                
                
                $children = null;
            }

            //достаем страницу настроек
            $settings = $this->Settings->get('1');

            //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);
           
            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = $this->Categories->find()->where(['parent_id' => 1]); 
           
            $this->set(compact('categories','settings','marka','page_url','page','parent','children'));
            $this->set('_serialize', ['categories']);
         
        }

        public function view($page_url = null)
        {
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
            //Загружаем модель Articles
            $this->loadModel('Categories');

            //достаем страницу настроек
            $settings = $this->Settings->get('1');

            //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);
                  
            $page = $this->Articles->findByUrl($page_url);

            if (!$page->toArray()) {
                throw new NotFoundException('Такой страницы нет...');
            }

             //Присваиваем родителя к новому объекту
             $parent = $this->Categories->get(7);      

             $brothers = $this->Articles->findByCategory_id(7);

            $this->set(compact('settings','page_url','page','categories','parent','brothers'));
 

        }


    }
