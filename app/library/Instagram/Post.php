<?php

namespace HashTag\Instagram;

use HashTag\Instagram\Comments as Comments;

/**
* 
*/
class Post
{

	protected $id;

	protected $comments;

	protected $likes;

	protected $caption

	protected $tags

	protected $created_time

	protected $image

	function __construct($post)
	{
		$this->id = $post['tags'];

		$this->tags = $post['tags'];
		
		$this->comments = $post['comments'];

		$this->caption = $post['caption'];
		
	}
}