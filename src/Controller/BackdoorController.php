<?
 
 namespace App\Controller;

 use Cake\Core\Configure;
 use Cake\Http\Exception\ForbiddenException;
 use Cake\Http\Exception\NotFoundException;
 use Cake\View\Exception\MissingTemplateException;
 
 use Cake\ORM\TableRegistry;
  
 
class BackdoorController extends AppController
{   
    public function initialize()
    {
        parent::initialize();
        $user = $this->Auth->user();
        if(!$user['username']=="admin") {
            return $this->redirect(['prefix'=>false,'controller'=>'Users','action'=>'login']);
            exit();
        } else {
            $_SESSION['KCFINDER'] = array(
                'disabled' => false
            );
        }
    }

    public function index()
    {
        $articles = TableRegistry::getTableLocator()->get('Articles');
        $articles = $articles->find();

        $query = TableRegistry::getTableLocator()->get('Categories');
        $menu = $query->find('all',array('order'=>array('sort')));
       
        $this->set(compact('articles','menu'));
    }


}