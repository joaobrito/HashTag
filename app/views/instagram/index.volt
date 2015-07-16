
<div class="post">
	<div class="row">
{% for post in posts%}
		<div class="col-md-3">
			<h4>{{post.getUser().getUsername()}}</h4>
			<p>{{link_to('/instagram/get/' ~ post.getId(), '<img src=' ~ post.getImage().getThumbnail() ~  '>')}}</p>
		</div>
{% endfor %}
	</div>
</div>

