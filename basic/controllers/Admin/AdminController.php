<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25.10.2017
 * Time: 9:04
 */
namespace app\controllers\admin;

use yii\web\Controller;

class AdminController extends Controller
{

    public function actionIndex(){
        return $this->render("index");
    }

}