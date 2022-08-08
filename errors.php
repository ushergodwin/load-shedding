<?php if(isset($errors)): ?>
	<?php if(count($errors) > 0) : ?>
     <div class="errors">
     	<?php foreach($errors as $error): ?>
     		<h5 style="color: red;"> <?php echo $error ?> </h5>
     		<?php endforeach ?>
     	</div>
<?php endif ?>
<?php endif ?>