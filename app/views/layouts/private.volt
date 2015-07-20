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
				-->
				{%- set menus = [
					'Home': '/',
					'Instagram': '/instagram',
					'Logout': '/index/destroy'
				] -%}	

				{%- for key, value in menus %}
					{% if value == dispatcher.getControllerName() %}
						<li class="active">{{ link_to(value, key) }}</li>
					{% else %}
						<li>{{ link_to(value, key) }}</li>
					{% endif %}
				{%- endfor -%}

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container">
	{{content()}}
</div>