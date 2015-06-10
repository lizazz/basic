<?php

namespace app\models;
use app\models\Users;
use Yii;
use yii\data\Pagination;

Class UsersFromDb {

	// формируем пагинацию для вывода пользователей
	public function pagination ()
	{
		$pag = Yii::$app->db->createCommand(
            'SELECT COUNT(*) 
             FROM basic_users'
             )->queryScalar();
		$pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $pag,
        ]);
		return $pagination;
	}

	//выводим всех пользователей, 
	//входные данные - сформированная пагинация и параметр сортировки
	public function AllUserFromDB($order,$pagination)
	{
		$query = Yii::$app->db->createCommand(
            'SELECT *
             FROM basic_users 
             ORDER BY '.$order.'
             LIMIT :offset, :limit')
            ->bindValue(':offset', $pagination->offset)
            ->bindValue(':limit', $pagination->limit)
            ->queryAll();
        return $query;
	}
}