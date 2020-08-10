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

       public function add(){

              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                     $data = [
                            'title' => trim($_POST['title']),
                            'body' => trim($_POST['body']),
                            'user_id' => $_SESSION['user_id'],
                            'title_err' => '',
                            'body_err' => ''
                     ];

                     if(empty($data['title'])){
                            $data['title_err'] = 'Please enter a title';
                     }

                     if(empty($data['body'])){
                            $data['body_err'] = 'Please enter a body';
                     }


                     if(empty($data['body_err']) && empty($data['title_err'])){
                            
                            if($this->postModel->addPost($data)){
                                   flash('post_message', 'Post Added');
                                   redirect('posts');
                            }else{
                                   die('Something went wrong');
                            }
                     }else {
                            $this->view('posts/add', $data);
                     }

              }else{
                      $data = [
                            'title' => '',
                            'body' => ''
                     ];

                     $this->view('posts/add', $data);
              }
       }
}

?>