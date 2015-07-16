<h1>This is app landing page</h1>
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
