<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use app\models\Users;
use yii\filters\AccessControl;
use app\models\UsersFromDb;
use yii\helpers\Html;
use yii\widgets\LinkPager;

class UserController extends Controller
{
    public function actionIndex()
    {   
        // проверяем пользователя, если он незарегистрированный или не "Юзер" - редирект на главную
        $access = Yii::$app->authManager->getRolesByUser(Yii::$app->user->id);
        if (\Yii::$app->user->isGuest OR !isset($access['user']))
        {
            return $this->goHome();
        }
        //проверяем по какой колонке вести сортировку
            switch (Yii::$app->request->get("order"))
            {
                case "1":
                    $order = "name";
                break;
                case "2":
                    $order = "email";
                break;
                default:
                   $order = "id";
                break;
            }
        $users_class = new UsersFromDb;
        $pagination = $users_class->pagination();
        $query = $users_class->AllUserFromDB($order,$pagination);
        return $this->render('index', [
            'model' => $query,
            'pagination' => $pagination,
            'order' => $order
        ]);

    }

    //меняет сортировку товара для замены JSом
    public function actionSort()
    {   
        switch (Yii::$app->request->get("order"))
        {
            case "1":
                $order = "name";
            break;
            case "2":
                $order = "email";
            break;
            default:
               $order = "id";
            break;
        }
        $users_class = new UsersFromDb;
        $pagination = $users_class->pagination();
        $query = $users_class->AllUserFromDB($order,$pagination);
        $a =  include(Yii::getAlias('@app')."/views/user/table.php");
        return $a;
    }
}