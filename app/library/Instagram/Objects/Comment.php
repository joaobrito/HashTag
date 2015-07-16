<?php

namespace HashTag\Instagram\Objects;

use HashTag\Instagram\Objects\User as User;

/**
* 
*/
class Comment
{

	protected $id;
	protected $created_time;
	protected $text;
	protected $user;

	function __construct($comment = null)
	{
        $this->id = $comment['id'];
		$this->text = $comment['text'];
		$this->user = new User($comment['from']);
        $this->created_time = date($comment['created_time']);
        
	}

    /**
     * Gets the value of id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of created_time.
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Gets the value of text.
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
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