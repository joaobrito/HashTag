
<?php foreach ($posts as $post) { ?>
		<?php echo $this->tag->linkTo(array('/instagram/details/' . $post->getId(), '<img src=' . $post->getImage()->getThumbnail() . '>')); ?>
	
<?php } ?>