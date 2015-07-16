
<div class="jumbotron">
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $post->getUser()->getUsername(); ?></h2>
			<h4><?php echo $post->getCaption()->getText(); ?></h4>
			<img src=<?php echo $post->getImage()->getLowResolution(); ?>>
		</div>
		<div class="col-md-6">
			<h2>Comments - [<?php echo $post->getCommentCount(); ?>]</h2>
			<?php foreach ($post->getComments() as $comment) { ?>
				<p><?php echo $comment->getUser()->getUsername() . ' said: ' . $comment->getText(); ?></p>
			<?php } ?>
		</div>
	</div>
</div>

