<?
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\ORM\Query;
use Cake\Event\Event;
use ArrayObject;

use Cake\Validation\Validator;


class CategoriesTable extends Table
{
    public function initialize(array $config)
    {
         $this->addBehavior('Tree');

        
    }

    public function beforeMarshal(Event $event, ArrayObject $data)
    {  
        $data['name'] = trim($data['name']);
        //$action = new \App\Controller\BackdoorController();
        if(empty($data['url'])) {
            $data['url']=\App\Controller\AppController::translit($data['name']);
        }   
    } 

    public function findParentId(Query $query, array $options)
    {
        return $query->where(['parent_id' => 1]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('body')
            ->requirePresence('body');
            //->uploadError('img');
            //->mimeType('img',['image/gif','image/png','image/jpg','image/jpeg'])

        return $validator;
    }   
    public function customUploadImg($file = array()){
        if(!is_uploaded_file($file['img']['tmp_name'])){
            return false;
        }
        $ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['img']['name']));
        $fileName = $this->genNameFile($ext);

    }
    public function getNameFile($ext){
        $name = md5(microtime()) . ".{$ext}";
        if(is_file(WWW_ROOT . 'img/product_img/' . $name)) {
            $name = $this->genNameFile($ext);
        }
        return $name;
    }

    
}