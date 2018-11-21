<?php  if (count($errors) > 0) : ?>
<script type='text/javascript' src='signup.js'>signup()</script>	
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
  
<?php  endif ?>