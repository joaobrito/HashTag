<?php

namespace HashTag\Controllers;

class InstagramController extends ControllerBase
{

    public function indexAction($sort = null, $filter = null, $hashTag = null)
    {
    	$this->view->posts = $this->instagramHandler->getAllPosts();
    }

    public function getAction($id){
    	$this->view->post = $this->instagramHandler->getPost($id);
    }
}