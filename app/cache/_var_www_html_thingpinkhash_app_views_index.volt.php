<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HashTag Challenge</title>
	<!--link rel="stylesheet" href="css/jumbotron.css"-->
	<?php echo $this->tag->stylesheetLink('css/jumbotron.css'); ?>
	
</head>
<body>
	<?php echo $this->getContent(); ?>
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<?php echo $this->tag->javascriptInclude('js/bootstrap.min.js'); ?>
</body>

</html>
