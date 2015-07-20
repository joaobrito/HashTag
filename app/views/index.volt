<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HashTag Challenge</title>
	<!--link rel="stylesheet" href="css/jumbotron.css"-->
	{{stylesheet_link('css/jumbotron.css')}}
	
</head>
<body>
	{{ content() }}
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	{{javascript_include('js/bootstrap.min.js')}}
</body>

</html>
