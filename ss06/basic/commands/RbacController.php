<?php

namespace app\commands;

use Yii;
use yii\console\Controller;

class RbacController extends Controller
{

    public function actionInit()
    {
        $auth = Yii::$app->getAuthManager();
        $auth->removeAll();
 
        $adminPanel = $auth->createPermission('adminPanel');
        $adminPanel->description = 'Admin panel';
        $auth->add($adminPanel);
 
        $user = $auth->createRole('user');
        $user->description = 'User';
        $auth->add($user);
 
        $admin = $auth->createRole('admin');
        $admin->description = 'Admin';
        $auth->add($admin);
 
        $auth->addChild($admin, $user);
        $auth->addChild($admin, $adminPanel);
 
        $this->stdout('Done!' . PHP_EOL);
    }
}
