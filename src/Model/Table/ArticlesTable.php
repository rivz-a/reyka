<?
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

use Cake\Event\Event;

use ArrayObject;

class ArticlesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');

        // Просто добавьте связь belongsTo с таблицей CategoriesTable
        $this->belongsTo('Categories', [
            'id' => 'category_id',
        ]);
    }

    public function beforeMarshal(Event $event, ArrayObject $data)
    {  
        $data['name'] = trim($data['name']);
        //$action = new \App\Controller\BackdoorController();
        if(empty($data['url'])) {
            $data['url']=\App\Controller\AppController::translit($data['name']);
        }   
    } 

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name')
            ->requirePresence('name')
            ->notEmpty('menu')
            ->requirePresence('menu');
           // ->notEmpty('body')
            //->requirePresence('body');

        return $validator;
    }   

    public function isOwnedBy($articleId, $userId)
    {
        return $this->exists(['id' => $articleId, 'user_id' => $userId]);
    }
    public function parentid(\Cake\ORM\Query $query)
    {
        $query = $this->find()
        ->select(['id','name'])
        ->where(['parent_id' => '1']);
        $return = $query->execute();

        return $return;
    }
}

