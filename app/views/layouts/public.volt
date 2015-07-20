
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

				<!-- 
					* TODO set menus on DB 
					* Fix active class. ControllerName is not well defined.
				-->
				{%- set menus = [
				'Home': '/',
				'Instagram': '/instagram',
				'Login': '/session/login'
				] -%}	

				{%- for key, value in menus %}
				{% if value == dispatcher.getControllerName() %}
				<li class="active">{{ link_to(value, key) }}</li>
				{% else %}

				<li>{{link_to(value, key) }}</li>
				{% endif %}
				{%- endfor -%}


			
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->

<div class="container">
	{{content()}}
	<hr>
	<footer>
		<p>&copy; HashTag 4 ThingPink 2015</p>
	</footer>
</div> <!-- /container -->