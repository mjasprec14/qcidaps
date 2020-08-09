<?php 

class Users extends Controller{

       public function __construct(){
              $this->userModel = $this->model('User');
       }

       public function register(){
              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                     
                     $data = [
                            'name' => trim($_POST['name']),
                            'email' => trim($_POST['email']),
                            'password' => trim($_POST['password']),
                            'confirm_password' => trim($_POST['confirm_password']),
                            'employee_id' => trim($_POST['employee_id']),
                            'status' => trim($_POST['status']),
                            'name_err' => '',
                            'email_err' => '',
                            'password_err' => '',
                            'confirm_password_err' => '',
                            'employee_id_err' => ''
                     ];

                     if(empty($data['name'])){
                            $data['name_err'] = 'Please enter name';
                     }

                     if(empty($data['email'])){
                            $data['email_err'] = 'Please enter email';
                     }else{
                            if($this->userModel->findUserByEmail($data['email'])){
                                   $data['email_err'] = 'Email is already taken';
                            }
                     }

                     if(empty($data['password'])){
                            $data['password_err'] = 'Please enter password';
                     }elseif(strlen($data['password']) < 8){
                            $data['password_err'] = 'Password must be atleast 8 characters';
                     }

                     if(empty($data['confirm_password'])){
                            $data['confirm_password_err'] = 'Please confirm password';
                     }else{
                            if($data['password'] != $data['confirm_password']){
                                   $data['confirm_password_err'] = 'Passwords do not match';
                            }
                     }

                     if(empty($data['employee_id'])){
                            $data['employee_id_err'] = 'Please enter employee_id';
                     }elseif(strlen($data['employee_id']) < 8){
                            $data['employee_id_err'] = 'Employee ID must be atleast 8 characters';
                     }

                     

                     if(empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) && empty($data['employee_id_err'])){
                            
                            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                            if($this->userModel->register($data)){
                                   flash('register_success', 'You are now registered and log in');
                                   redirect('users/login');
                            }else{
                                   die('Something went wrong');
                            }
                     }else{
                            $this->view('users/register', $data);
                     }

              }else{
                     
                     $data = [
                            'name' => '',
                            'email' => '',
                            'password' => '',
                            'confirm_password' => '',
                            'employee_id' => '',
                            'status' => '',
                            'name_err' => '',
                            'email_err' => '',
                            'password_err' => '',
                            'confirm_password_err' => '',
                            'employee_id_err' => ''
                     ];

                     $this->view('users/register', $data);
              }
       }

       public function login() {
              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                     $data = [
                            'email' => trim($_POST['email']),
                            'password' => trim($_POST['password']),
                            'email_err' => '',
                            'password_err' => ''
                     ];

                     if(empty($data['email'])){
                            $data['email_err'] = 'Please enter email';
                     }

                     if(empty($data['password'])){
                            $data['password_err'] = 'Please enter password';
                     }

                     if($this->userModel->findUserByEmail($data['email'])){

                     } else {
                            $data['email_err'] = 'No user found';
                     }

                     if(empty($data['email_err']) && empty($data['password_err'])){
                            
                            $loggedInUser = $this->userModel->login($data['email'], $data['password']);

                            if($loggedInUser){
                                   die('USER FOUND');
                            }else{
                                   $data['password_err'] = 'Password incorrect';

                                   $this->view('users/login', $data);
                            }
                     }else {
                            $this->view('users/login', $data);
                     }

              }else{
                     
                     $data = [
                            'email' => '',
                            'password' => '',
                            'email_err' => '',
                            'password_err' => ''
                     ];      

                     $this->view('users/login', $data);
              }
       }
}

?>