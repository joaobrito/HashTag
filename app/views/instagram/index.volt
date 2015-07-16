
{% for post in posts%}
		{{link_to('/instagram/details/' ~ post.getId(), '<img src=' ~ post.getImage().getThumbnail() ~  '>')}}
	
{% endfor %}