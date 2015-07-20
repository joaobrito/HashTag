<?php

namespace HashTag\Controllers;

class InstagramController extends ControllerBase
{

    public function indexAction()
    {

       	$next_id = $this->dispatcher->getParam('0');
       	echo 'next_id' . $next_id . '<br>';
    	$result = $this->instagramHandler->getAllPosts($next_id,null);
    	$this->view->posts = $result;
    }

    public function getAction($id){
    	$this->view->post = $this->instagramHandler->getPost($id);
    }
}