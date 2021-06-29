<?php $this->setLayoutVar('title', '入力') ?>

<h2>確認画面</h2>
<?php if(isset($errors) && count($errors) > 0): ?>
<?php echo $this->render('errors', ['errors' => $errors]); ?>
<?php endif; ?>

<table>
<tbody>
<tr>
<th>名前</th>
<td><?php echo $this->escape($form["name"]); ?></td>
</tr>
<tr>
<th>年齢</th>
<td><?php echo $this->escape($form["age"]); ?></td>
</tr>
<tr>
<th>都道府県</th>
<td><?php echo $this->escape($form["prefecture"]); ?></td>
</tr>
<tr>
<th>市区町村</th>
<td><?php echo $this->escape($form["address1"]); ?></td>
</tr>
<tr>
<th>番地</th>
<td><?php echo $this->escape($form["address2"]); ?></td>
</tr>
<tr>
<th>コメント</th>
<td><?php echo $this->escape($form["comment"]); ?></td>
</tr>
<tr>
<th>Eメール</th>
<td><?php echo $this->escape($form["mail_address"]); ?></td>
</tr>
</tbody>
</table>
<form action="<?php echo $base_url; ?>/form/complete" method="post">
<input type="hidden" name="_token" value="<?php echo $this->escape($_token); ?>" />
<p><a href="<?php echo $base_url; ?>/form/index">戻る</a>
<input type="submit" value="完了画面へ" /></p>
</form>