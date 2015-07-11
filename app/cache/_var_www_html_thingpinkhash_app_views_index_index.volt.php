<h1>This is app landing page</h1>
<?php //echo 'session = '; print_r($_SESSION); echo '<br>';?>
<a href=<?php echo $loginUrl; ?>>login FB</a>

<?php if (isset($name)) { ?>

Welcome <?php echo $name; ?>

<?php } ?>

<br>
<a href=<?php echo $instagramLoginUrl; ?>>Login Instagram</a>
<br>
<?php echo $instagramLoginUrl; ?>