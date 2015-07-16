<?php

namespace HashTag\Instagram\Objects;

use HashTag\Instagram\Objects\Comments as Comments;

use HashTag\Instagram\Objects\Caption as Caption;

use HashTag\Instagram\Objects\Image as Image;


/**
* 
*/
class Post
{

	protected $id;

	protected $comments = array();

	protected $commentCount = 0;

	protected $likes;

	protected $likesCount = 0;

	protected $caption;

	protected $tags;

	protected $created_time;

	protected $image;

	protected $user;

	function __construct($post)
	{
		$this->id = $post['id'];

		$this->tags = $post['tags'];

		$this->commentCount = $post['comments']['count'];
		if($this->commentCount > 0){
			$comments = array();
			foreach ($post['comments']['data'] as $comment) {
				array_push($comments, new Comment($comment));
			}
		}

		$this->caption = new Caption($post['caption']);

		$this->image = new Image($post['images']);

	}

	/**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of comments.
     *
     * @return mixed
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Gets the value of likes.
     *
     * @return mixed
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Gets the value of caption.
     *
     * @return mixed
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Gets the value of tags.
     *
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Gets the value of created_time.
     *
     * @return mixed
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Gets the value of image.
     *
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Gets the value of commentCount.
     *
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->commentCount;
    }

    /**
     * Gets the value of likesCount.
     *
     * @return mixed
     */
    public function getLikesCount()
    {
        return $this->likesCount;
    }

    /**
     * Gets the value of user.
     *
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }
}