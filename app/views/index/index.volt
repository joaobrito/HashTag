<div class="jumbotron">
	<div class="container">
		<h1>#HashTag Challenge</h1>
		<p>Hero goes a short description of the webapp</p>
	</div>
</div>
{% if name is defined %}

Welcome {{name}}

{% else %}
<a href={{loginUrl}}>login FB</a><br>

{% endif %}

{% if instagramLoginUrl is defined %}
<a href={{instagramLoginUrl}}>Login Instagram</a>
{% endif %}

{% if instagramAuthUrl is defined %}
<a href={{instagramAuthUrl}}>Auth Instagram</a>
{% else %}
{{instagramDetails}}
{% endif %}

<br>
<br>
