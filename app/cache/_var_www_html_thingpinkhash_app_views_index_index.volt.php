<h1>This is app landing page</h1>
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
