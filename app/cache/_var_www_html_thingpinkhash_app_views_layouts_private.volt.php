<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Private</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">

				<!-- 
					* TODO set menus on DB 
					* Fix active class. ControllerName is not well defined.
				--><?php $menus = array('Home' => '/', 'Instagram' => '/instagram', 'Logout' => '/index/destroy'); ?><?php foreach ($menus as $key => $value) { ?>
					<?php if ($value == $this->dispatcher->getControllerName()) { ?>
						<li class="active"><?php echo $this->tag->linkTo(array($value, $key)); ?></li>
					<?php } else { ?>
						<li><?php echo $this->tag->linkTo(array($value, $key)); ?></li>
					<?php } ?><?php } ?></ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container">
	<?php echo $this->getContent(); ?>
</div>