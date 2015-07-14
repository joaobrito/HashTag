<?php

namespace HashTag\Controllers;

class InstagramController extends ControllerBase
{

    public function indexAction($sort = null, $filter = null, $hashTag = null)
    {
    	$this->view->posts = json_decode($this->instagramHandler->getAllPosts()->body, true)['data'];
    }

    public function getAction($id){

    }
}