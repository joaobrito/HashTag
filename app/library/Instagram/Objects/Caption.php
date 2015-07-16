<?php

namespace HashTag\Instagram\Objects;

use HashTag\Instagram\Objects\User as User;

/**
* 
*/
class Caption
{
	
	protected $created_time;

	protected $text;

	protected $id;

	function __construct($caption = array())
	{
		if(count($caption) > 0){
			$this->text = $caption['text'];
			$this->created_time = $caption['created_time'];
			$this->id = $caption['id'];	
            $this->user = new User($caption['from']);
		}
		
	}

    /**
     * Gets the value of createdTime.
     *
     * @return mixed
     */
    public function getCreatedTime()
    {
        return $this->created_time;
    }

    /**
     * Gets the value of text.
     *
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
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
}