<?php

class Posts extends Controller {

       public function __construct() {
              // to protect access from posts u could also use this for admin status
              // if(!isset($_SESSION['user_id'])){
              //        redirect('users/login');
              // }
              if(!isLoggedIn()){
                     redirect('users/login');
              }
              $this->postModel =  $this->model('Post');
       }

       public function index(){

              $posts = $this->postModel->getPosts();

              $data = [
                     'post' => $posts
              ];

              $this->view('posts/index', $data);
       }
}

?>