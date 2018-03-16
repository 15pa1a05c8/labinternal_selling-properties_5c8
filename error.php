<?php if(count($errors) >0): ?>
<div class="error">
<p><?php foreach($errors as $error):?></p>
<p><?php echo $error; ?></p>
<?php endforeach ?>
</div>
<?php endif ?>
