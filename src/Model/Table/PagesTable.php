<?
namespace App\Model\Table;

use Cake\ORM\Table;

use Cake\Validation\Validator;

class PagesTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
    
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('title')
            ->requirePresence('title')
            ->notEmpty('body')
            ->requirePresence('body')
            

        return $validator;
    }
    
    

    
}