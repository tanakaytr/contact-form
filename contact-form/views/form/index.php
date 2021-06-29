<?php $this->setLayoutVar('title', '入力') ?>
<h2>入力画面</h2>
<form action="<?php echo $base_url; ?>/form/confirm" method="post">
    <?php if(isset($errors) && count($errors) > 0): ?>
        <?php echo $this->render('errors', ['errors' => $errors]); ?>
    <?php endif; ?>
    
<table>
<tbody>
<tr>
<th>名前</th>
<td><input type="text" name="name" value="<?php echo $this->escape($form["name"]); ?>" /></td>
</tr>
<tr>
<th>年齢</th>
<td><input type="text" name="age" value="<?php echo $this->escape($form["age"]); ?>" /></td>
</tr>
<tr>
<th>都道府県</th>
<td><input type="text" name="prefecture" value="<?php echo $this->escape($form["prefecture"]); ?>" /></td>
</tr>
<tr>
<th>市区町村</th>
<td><input type="text" name="address1" value="<?php echo $this->escape($form["address1"]); ?>" /></td>
</tr>
<tr>
<th>番地</th>
<td><input type="text" name="address2" value="<?php echo $this->escape($form["address2"]); ?>" /></td>
</tr>
<tr>
<th>コメント</th>
<td><textarea name="comment" rows="4" cols="40"><?php echo $this->escape($form["comment"]); ?></textarea>
</tr>
<tr>
<th>Eメール</th>
<td><input type="text" name="mail_address" value="<?php echo $this->escape($form["mail_address"]); ?>" /></td>
</tr>
</tbody>
</table>
<p><input type="submit" value="確認画面へ" /></p>
</form>