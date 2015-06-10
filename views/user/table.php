<?php foreach ($query as $user):?>
	<tr>
		<td>
			<?= $user['id']?>
		</td>
		<td>
			<?= $user['name']?>
		</td>
		<td>
			<?= $user['email']?>
		</td>
	</tr>
<?php endforeach;?>

