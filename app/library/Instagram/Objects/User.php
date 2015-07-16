<?php

namespace HashTag\Instagram\Objects;

/**
* 
*/
class User 
{
	
	protected $id;
	protected $username;
	protected $profile_picture;
	protected $full_name;


	function __construct($user = array())
	{
			$this->id = $user['id'];
			$this->username = $user['username'];
			$this->profile_picture = $user['profile_picture'];
			$this->full_name = $user['full_name'];
	}

    /**
     * Gets the value of id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Gets the value of username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Gets the value of profile_picture.
     *
     * @return string
     */
    public function getProfilePicture()
    {
        return $this->profile_picture;
    }

    /**
     * Gets the value of full_name.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->full_name;
    }
}