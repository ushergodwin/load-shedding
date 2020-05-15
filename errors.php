<?php if(count($errors) > 0) : ?>
     <div class="errors">
     	<?php foreach($errors as $error): ?>
     		<h3 style="color: red"> <?php echo $error ?> </h3>
     		<?php endforeach ?>
     	</div>
     	<?php endif ?>