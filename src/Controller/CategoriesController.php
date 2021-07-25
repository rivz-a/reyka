<?php

 
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

use ArrayObject;

class CategoriesController extends AppController

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


            //Устанавливаем индивидуальный лайот для рулевых реек
            if ($page_url=="remont-elektromehanicheskih-rulevyh-reek") {
                $this->viewBuilder()->setLayout('remont-elektromehanicheskih-rulevyh-reek');
            }

            //Устанавливаем индивидуальный лайот 
            if ($page_url=="remont-rulevoy-reyki-mazda-6-gh-klyuchevye-problemy-i-ih-reshenie") {
                $this->viewBuilder()->setLayout('remont-rulevoy-reyki-mazda-6-gh-klyuchevye-problemy-i-ih-reshenie');
            }

            //Если урл пустой
            if ( is_null($page_url)) {

                if ($engine = $this->request->is('post')){    

                    $engine = $this->request->getData();                               
                    $article = $this->Articles->get($engine['Engine']);                    
                    $page_url = $article->url;                                         
                }
                
            }
            
            //Достаем строку из категорий по указанному урлу
            $page = $this->Categories->findByUrl($page_url);
               
            //Если такой строки нет в БД, т.е. если эта строка не категория проверяем в базе articles (страниц)
            if (!$page->toArray()) { 
                
                $page = $this->Articles->findByUrl($page_url);
                if (!$page->toArray()) {

                    //Условие для блока стоимости ремонта, когда в контроллер приходит запрос post
            

                throw new NotFoundException('Такой страницы нет...');
                }
                
                $category_id = $page->first()->category_id;         

                //Присваиваем родителя к новому объекту
                $parent = $this->Categories->get($category_id);
                
                //Проверяем деда у родителя
                if (!is_null($parent->parent_id)) {
                    $old_parent = $this->Categories->get($parent->parent_id);                    
                }
                $children = null;

            }   
            else {  
                
                $article = $this->Articles->findByUrl($page_url);
                $old_parent = null;

                //Если у страницы есть родители, то присваиваем родителя к новому объекту
                if (!is_null($page->first()->parent_id)) { 
                    $parent = $this->Categories->get($page->first()->parent_id);               
                }

                //Если есть дети, то также присваиваем детей к новому объекту   
                if (!empty($this->Articles->find()->where(['category_id' => $page->first()->id])->toArray())){
                    $children = $this->Articles->find()
                    ->where(['category_id' => $page->first()->id])
                    ->order(['name' => 'ASC']);
                }
                else {
                    $children = null;
                }
            }   
            
           
            //достаем страницу настроек
            $settings = $this->Settings->get('1');

            //достаем отсортированные категории
            $categories = $this->Categories->find()
                ->order(['lft' => 'ASC']);

            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = $this->Categories->find()->where(['parent_id' => 1]); 

            $this->set(compact('categories','settings','marka','page_url','page','parent','children','old_parent'));
            $this->set('_serialize', ['categories']);
        }


        public function view($id = null)
        {
            //Загружаем модель Articles
            $this->loadModel('Articles');

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


        public function home(){

            //Подключаем лейоут для главной страницы
            $this->viewBuilder()->setLayout('reyka_home');    
           
            //Загружаем модель Settings
            $this->loadModel('Settings');
    
            $cat_menu = $this->getCatMenu();
           
            $categories = $this->Categories->find('all');        
           //достаем страницу настроек
           $settings = $this->Settings->get('1');      
       
            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = $this->Categories->find()->where(['parent_id' => 1]);        
            
            //$this->set('groups', $query);  
            $this->set(compact('categories','settings','cat_menu','marka'));
       }

       public function onas()
       {
            //Загружаем модель Settings
            $this->loadModel('Settings');

            $page = $this->Categories->findById(3);                

             //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);

            //достаем страницу настроек
            $settings = $this->Settings->get('1');      

            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = null; 
            $old_parent = null;
            $children = null;


            $this->set(compact('categories','settings','marka','page_url','page','parent','children','old_parent'));
            $this->set('_serialize', ['categories']);
       }

       public function kontakt()
       {
            //Загружаем модель Settings
            $this->loadModel('Settings');

            $page = $this->Categories->findById(8);                

             //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);

            //достаем страницу настроек
            $settings = $this->Settings->get('1');      

            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = null; 
            $old_parent = null;
            $children = null;

            $this->set(compact('categories','settings','marka','page_url','page','parent','children','old_parent'));
            $this->set('_serialize', ['categories']);
       }

       public function electro($page_url = null)
        {
            
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
                  
            //Если загружена категория ремонт электрорейки, то присваиваем к $page эту страницу            
            if ( is_null($page_url)) {

                $page = $this->Categories->findById(2);

                $children = $this->Articles->find()
                    ->where([
                    'category_id' => '2'                    
                    ])
                    ->order(['name' => 'ASC']);

                $parent = null;
            }

            //Иначе присваиваем к $page потомка электрорейки
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

        public function reduktor($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
                  
            //Если загружена категория ремонт электрорейки, то присваиваем к $page эту страницу            
            if ( is_null($page_url)) {

                $page = $this->Categories->findById(4);

                $children = $this->Articles->find()
                    ->where([
                    'category_id' => '4'                    
                    ])
                    ->order(['name' => 'ASC']);

                $parent = null;
            }

            //Иначе присваиваем к $page потомка электрорейки
            else{

                $page = $this->Articles->findByUrl($page_url);

                if (!$page->toArray()) {
                throw new NotFoundException('Такой страницы нет...');
                }
                
                //Присваиваем родителя к новому объекту
                $parent = $this->Categories->get(4);                
                
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

        public function nasosgur($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
                  
            //Если загружена категория ремонт электрорейки, то присваиваем к $page эту страницу            
            if ( is_null($page_url)) {

                $page = $this->Categories->findById(82);

                $children = $this->Articles->find()
                    ->where([
                    'category_id' => '82'                    
                    ])
                    ->order(['name' => 'ASC']);

                $parent = null;
            }

            //Иначе присваиваем к $page потомка электрорейки
            else{

                $page = $this->Articles->findByUrl($page_url);

                if (!$page->toArray()) {
                throw new NotFoundException('Такой страницы нет...');
                }
                
               
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

        public function nasoseur($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');
            //Загружаем модель Articles
            $this->loadModel('Articles');
                  
            //Если загружена категория ремонт электрорейки, то присваиваем к $page эту страницу            
            if ( is_null($page_url)) {

                $page = $this->Categories->findById(5);

                $children = $this->Articles->find()
                    ->where([
                    'category_id' => '5'                    
                    ])
                    ->order(['name' => 'ASC']);

                $parent = null;
            }

            //Иначе присваиваем к $page потомка электрорейки
            else{

                $page = $this->Articles->findByUrl($page_url);

                if (!$page->toArray()) {
                throw new NotFoundException('Такой страницы нет...');
                }
                
               
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

        public function starter() {            
            
             $page = $this->Categories->findById(85);                

             //Загружаем модель Settings
            $this->loadModel('Settings'); 

             //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);

            //достаем страницу настроек
            $settings = $this->Settings->get('1');      

            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = null; 
            $old_parent = null;
            $children = null;


            $this->set(compact('categories','settings','marka','page_url','page','parent','children','old_parent'));
            $this->set('_serialize', ['categories']);

        }
        
        public function generator() {            
            
             $page = $this->Categories->findById(86);                

             //Загружаем модель Settings
            $this->loadModel('Settings'); 

             //достаем отсортированные категории
            $categories = $this->Categories->find()
            ->order(['lft' => 'ASC']);

            //достаем страницу настроек
            $settings = $this->Settings->get('1');      

            //Выполняем кастомный запрос на "горячую" Берем категорию по ремонту рулевых реек
            $marka = null; 
            $old_parent = null;
            $children = null;


            $this->set(compact('categories','settings','marka','page_url','page','parent','children','old_parent'));
            $this->set('_serialize', ['categories']);

        }

        public function sitemap(){

            //Подключаем лейоут для страницы категории
            $this->viewBuilder()->setLayout('reyka_sitemap'); 

            //Загружаем модель Articles
            $this->loadModel('Articles');  
            
            //Загружаем модель Settings
            $this->loadModel('Settings');

            $categories = $this->Categories->find('all')
            ->order(['lft' => 'ASC']); 
           
            $articles = $this->Articles->find('all');   
            
             //достаем страницу настроек
             $settings = $this->Settings->get('1');

            $this->set(compact('categories','settings','articles')); 
         }
       

    }
