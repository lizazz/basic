<?php
	use yii\helpers\Html;
	use yii\widgets\LinkPager;
?>
<h1>Пользователи</h1>
	<table class = "table table-hover">
		<thead>
			<tr>
				<td data-sort = "3" class = "lead sort">№<small><span class = "glyphicon glyphicon-sort-by-attributes order_3"></span></small></td>
				<td data-sort = "1" class = "lead sort">Имя<small><span class = "glyphicon glyphicon-sort-by-attributes order_1 hidden"></span></small></td>
				<td data-sort = "2" class = "lead sort">Электронный адрес<small><span class = "glyphicon glyphicon-sort-by-attributes order_2 hidden"></span></small></td>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($model as $user):?>
				<tr>
					<td>
						<?= Html::encode("{$user['id']}") ?>
					</td>
					<td>
						<?= Html::encode("{$user['name']}") ?>
					</td>
					<td>
						<?= Html::encode("{$user['email']}") ?>
					</td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
<div class = "pagination">
	<?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>