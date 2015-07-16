
<?php echo $this->tag->form(array('HashTag\Forms\LoginForm')); ?>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Public</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action 
<div class="jumbotron">
	<div class="container">
		<h1>#HashTag Challenge</h1>
		<p>This is HashTag Landing Page! </p>
		<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
	</div>
</div>-->

<div class="container">
	<?php echo $this->getContent(); ?>

	<hr>

	<footer>
		<p>&copy; Company 2015</p>
	</footer>
</div> <!-- /container -->