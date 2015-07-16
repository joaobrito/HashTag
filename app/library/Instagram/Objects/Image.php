<?php

namespace HashTag\Instagram\Objects;


/**
* 
*/
class Image
{

	protected $low_resolution;
	protected $thumbnail;
	protected $standard_resolution;

	function __construct($image)
	{
		$this->low_resolution = $image['low_resolution']['url'];
		$this->thumbnail = $image['thumbnail']['url'];
		$this->standard_resolution = $image['standard_resolution']['url'];
	}

	/**
     * Gets the value of low_resolution.
     *
     * @return mixed
     */
    public function getLowResolution()
    {
        return $this->low_resolution;
    }

    /**
     * Gets the value of thumbnail.
     *
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Gets the value of standard_resolution.
     *
     * @return mixed
     */
    public function getStandardResolution()
    {
        return $this->standard_resolution;
    }
}