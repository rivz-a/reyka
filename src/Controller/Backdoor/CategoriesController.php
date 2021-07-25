<?php
    namespace App\Controller\Backdoor;

    use App\Controller\AppController;
    use Cake\Core\Configure;
    use Cake\Http\Exception\ForbiddenException;
    use Cake\Http\Exception\NotFoundException;
    use Cake\View\Exception\MissingTemplateException;
    use Cake\Event\Event;
    use Cake\Filesystem\File;
    use ArrayObject;


    class CategoriesController extends AppController
    {
        public function initialize(){
            parent::initialize();
            $this->viewBuilder()->setLayout('reyka_backdoor');  

        }
        
        public function door($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');  

            //достаем страницу настроек
            $settings = $this->Settings->get('1');
                       
            //достаем отсортированные категории
            $categories = $this->Categories->find()
                ->order(['lft' => 'ASC']);
           

            $this->set(compact('categories','settings'));
            $this->set('_serialize', ['categories']);

        }



        public function index($page_url = null)
        {            
            //Загружаем модель Settings
            $this->loadModel('Settings');  

            //достаем страницу настроек
            $settings = $this->Settings->get('1');
                       
            //достаем отсортированные категории
            $categories = $this->Categories->find()
                ->order(['lft' => 'ASC']);
           

            $this->set(compact('categories','settings'));
            $this->set('_serialize', ['categories']);

        }

        public function view($id = null)
        {  
            $categories = $this->Categories->get($id);
            $this->set(compact('categories'));
        }

        public function moveUp($id = null)
        {
            $this->request->allowMethod(['post', 'put']);
            $category = $this->Categories->get($id);
            if ($this->Categories->moveUp($category)) {
                $this->Flash->success('Категория была перемещена вверх.');
            } else {
                $this->Flash->error('Категория не может быть перемещена вверх.
                                                        Пожалуйста, попробуйте еще раз.');
            }
            return $this->redirect($this->referer(['action' => 'index']));
        }
    
        public function moveDown($id = null)
        {
            $this->request->allowMethod(['post', 'put']);
            $category = $this->Categories->get($id);
            if ($this->Categories->moveDown($category)) {
                $this->Flash->success('Категория была перемещена вниз.');
            } else {
                $this->Flash->error('Категория не может быть перемещена вниз.
                                                        Пожалуйста, попробуйте еще раз.');
            }
            return $this->redirect($this->referer(['action' => 'index']));
        }

        public function add()
        {
            $category = $this->Categories->newEntity();
            if ($this->request->is('post')) {
                $category = $this->Categories->patchEntity($category, $this->request->getData());
                if ($this->Categories->save($category)) {
                    $this->Flash->success(__('Новая страница успешно сохранена!'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Невозможно создать новую страницу!'));
            }
            $this->set('category', $category);
           
            // Просто добавляем список категорий для возможности выбора
            // одной категории для статьи
            $parentCategories = $this->Categories->find('treeList');               
            $this->set(compact('parentCategories'));
        }

        public function edit($id = null)
        {
            //достаем отсортированные категории
            $categories = $this->Categories->find()
                ->order(['parent_id' => 'ASC']);

            $category = $this->Categories->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Categories->patchEntity($category, $this->request->getData());
                if ($this->Categories->save($category)) {
                    $this->Flash->success(__('Ваша статья была обновлена.'));
                    return $this->redirect(['action' => 'index']);
                }
                $this->Flash->error(__('Ошибка обновления вашей статьи.'));
            }
             // Просто добавляем список категорий для возможности выбора
            // одной категории для статьи
            $parentCategories = $this->Categories->find('treeList');  
            
            $this->set(compact('parentCategories','categories'));
            $this->set('category', $category);
        }


        public function delete($id)
        {
        $this->request->allowMethod(['post', 'delete']);

            $category = $this->Categories->get($id);
            if ($this->Categories->delete($category)) {
            $this->Flash->success(__('Статья с id: {0} была удалена.', h($id)));
            return $this->redirect(['action' => 'index']);
            }
        }

    }





