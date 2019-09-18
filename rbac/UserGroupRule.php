<?php
namespace app\rbac;
 
use Yii;
use yii\rbac\Rule;
 
class UserGroupRule extends Rule
{
    public $name = 'isAuthor';
 
    public function execute($user, $item, $params)
    {
        return  $params['post']->author_id == $user ? true : false;
    }
}