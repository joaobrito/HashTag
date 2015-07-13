<?php

namespace HashTag\Controllers;

class InstagramController extends ControllerBase
{

    public function indexAction($sort = null, $filter = null, $hashTag = null)
    {
    	$this->instagramHandler->getAllPosts();
    }

    public function getAction($id){

    }
}

