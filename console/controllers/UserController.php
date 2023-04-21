<?php

namespace console\controllers;

use yii\console\Controller;
use common\models\User;

class UserController extends Controller
{
    /**
     * Creates admin user
     */
    public function actionCreateAdmin()
    {
        $model = new User();
        $model->username = 'admin';
        $model->email = 'jesslich.nime@gmail.com';
        $model->setPassword('admin');
        $model->generateAuthKey();
        $model->status = User::STATUS_ACTIVE;
        $model->role = User::ROLE_ADMIN;

        if ($model->save()) {
            echo "Admin user has been created successfully.\n";
        } else {
            echo "Failed to create admin user: " . implode(',', $model->getErrors()) . "\n";
        }
    }
}
