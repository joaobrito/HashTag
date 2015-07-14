<h1>#<?php echo $hashTag; ?> media list</h1>

<?php foreach ($posts as $post) { ?>

	<?php echo $post['caption']['from']['username']; ?>:
	<?php echo $post['caption']['text']; ?><br>
	}
<?php } ?>