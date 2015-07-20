
<div class="post">
	<div class="row">
		<?php foreach ($posts['posts'] as $post) { ?>
		<div class="col-md-3">
			<h4><?php echo $post->getUser()->getUsername(); ?></h4>
			<p><?php echo $this->tag->linkTo(array('/instagram/get/' . $post->getId(), '<img src=' . $post->getImage()->getThumbnail() . '>')); ?></p>
		</div>
		<?php } ?>
		
		<?php if ($posts['max_tag_id'] != null) { ?>
			<a href=<?php echo '/instagram/index/max_tag_id=' . $posts['max_tag_id']; ?>>Next >></a>
		<?php } ?>


	</div>
</div>

