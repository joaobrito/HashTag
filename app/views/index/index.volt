<h1>This is app landing page</h1>
<?php //echo 'session = '; print_r($_SESSION); echo '<br>';?>
<a href={{loginUrl}}>login FB</a>

{% if name is defined %}

Welcome {{name}}

{% endif %}

<br>
<a href={{instagramLoginUrl}}>Login Instagram</a>
<br>
{{instagramLoginUrl}}