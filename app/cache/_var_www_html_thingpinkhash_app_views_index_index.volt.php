<div class="jumbotron">
	<div class="container">
		<h1>#HashTag Challenge</h1>
		<p>Hero goes a short description of the webapp</p>
	</div>
</div>
<?php if (isset($name)) { ?>

Welcome <?php echo $name; ?>

<?php } else { ?>
<a href=<?php echo $loginUrl; ?>>login FB</a><br>

<?php } ?>

<?php if (isset($instagramLoginUrl)) { ?>
<a href=<?php echo $instagramLoginUrl; ?>>Login Instagram</a>
<?php } ?>

<?php if (isset($instagramAuthUrl)) { ?>
<a href=<?php echo $instagramAuthUrl; ?>>Auth Instagram</a>
<?php } else { ?>
<?php echo $instagramDetails; ?>
<?php } ?>

<br>
<br>
