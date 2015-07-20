
<div class="post">
	<div class="row">
		{% for post in posts['posts'] %}
		<div class="col-md-3">
			<h4>{{post.getUser().getUsername()}}</h4>
			<p>{{link_to('/instagram/get/' ~ post.getId(), '<img src=' ~ post.getImage().getThumbnail() ~  '>')}}</p>
		</div>
		{% endfor %}
		
		{% if posts['max_tag_id'] != null %}
			<a href={{'/instagram/index/max_tag_id=' ~ posts['max_tag_id']}}>Next >></a>
		{% endif %}


	</div>
</div>

