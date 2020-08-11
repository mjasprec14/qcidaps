<?php

class Profiles extends Controller {
       public function __construct(){
              $this->profileModel = $this->model('Profile');
              $this->userModel = $this->model('User');
       }

       public function index(){
              $profile = $this->profileModel->getProfile();

              $data = [
                     'profile' => $profile
              ];

              $this->view('profiles/index', $data);
       }

       public function createProfile(){
              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                     
                     $data = [
                            'user_id' => $_SESSION['user_id'],
                            'control_no' => trim($_POST['control_no']),
                            'type_of_admission' => trim($_POST['type_of_admission']),
                            'last_name' => trim($_POST['last_name']),
                            'first_name' => trim($_POST['first_name']),
                            'middle_name' => trim($_POST['middle_name']),
                            'extension_name' => trim($_POST['extension_name']),
                            'control_no_err' => '',
                            'last_name_err' => '',
                            'first_name_err' => '',
                            'middle_name_err' => ''
                     ];

                     if(empty($data['control_no'])){
                            $data['control_no_err'] = 'Please provide control number';
                     }

                     if(empty($data['last_name'])){
                            $data['last_name_err'] = 'Please provide last name';
                     }

                     if(empty($data['first_name'])){
                            $data['first_name_err'] = 'Please provide middle name';
                     }

                     if(empty('middle_name')){
                            $data['middle_name_err'] = 'Please provide middle name';
                     }elseif(strlen($data['middle_name']) < 2){
                            $data['middle_name_err'] = 'Please provide full middle name';
                     }

                     $existingProfile = $this->profileModel->existingProfile($data);
                     

                     if($existingProfile){
                            $errMsg = 'Existing profile<br> Control No: ' . $existingProfile->control_no . '<br>Name: ' . $existingProfile->last_name . ', ' . $existingProfile->first_name;

                            flash('existing_profile', $errMsg, 'alert alert-danger');
                     }


                     if(empty($data['control_no_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['middle_name_err']) && !$existingProfile){
                            
                            // THIS IS WHERE U FETCH USERID and BRGY INFO TO ADD IN CONTROL NUMBER
                            if($this->profileModel->createProfile($data)){
                                   flash('profile_message', 'Profile created');
                                   redirect('profiles');
                            }else{
                                   die('Something went wrong');
                            }
                     }else{
                            $this->view('profiles/createProfile', $data);
                     }

              }else{
                     $ctrl_no = $this->profileModel->generateCtrlNo();
                     $data = [
                            'control_no' => $ctrl_no,
                            'type_of_admission' => '',
                            'last_name' => '',
                            'first_name' => '',
                            'middle_name' => '',
                            'extension_name' => '',
                            'control_no_err' => '',
                            'last_name_err' => '',
                            'first_name_err' => '',
                            'middle_name_err' => ''
                     ];

                     $this->view('profiles/createProfile', $data);
              }
       }

       public function editProfile($id){
              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                     $data = [
                            'id' => $id,
                            'user_id' => $_SESSION['user_id'],
                            'control_no' => trim($_POST['control_no']),
                            'type_of_admission' => trim($_POST['type_of_admission']),
                            'last_name' => trim($_POST['last_name']),
                            'first_name' => trim($_POST['first_name']),
                            'middle_name' => trim($_POST['middle_name']),
                            'extension_name' => trim($_POST['extension_name']),
                            'control_no_err' => '',
                            'last_name_err' => '',
                            'first_name_err' => '',
                            'middle_name_err' => ''
                     ];

                     if(empty($data['control_no'])){
                            $data['control_no_err'] = 'Please provide control number';
                     }

                     if(empty($data['last_name'])){
                            $data['last_name_err'] = 'Please provide last name';
                     }

                     if(empty($data['first_name'])){
                            $data['first_name_err'] = 'Please provide middle name';
                     }

                     if(empty('middle_name')){
                            $data['middle_name_err'] = 'Please provide middle name';
                     }elseif(strlen($data['middle_name']) < 2){
                            $data['middle_name_err'] = 'Please provide full middle name';
                     }

                     if(empty($data['control_no_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['middle_name_err']) ){
    
                            // THIS IS WHERE U FETCH USERID and BRGY INFO TO ADD IN CONTROL NUMBER
                            if($this->profileModel->updateProfile($data)){
                                   flash('profile_message', 'Profile updated');
                                   redirect('profiles');
                            }else{
                                   die('Something went wrong');
                            }
                     }else{
                            $this->view('profiles/editProfile', $data);
                     }

              }else{
                     $profile = $this->profileModel->getProfileById($id);

                     if($_SESSION['status'] != 'Administrator'){
                            redirect('profiles');
                     }

                     $data = [
                            'id' => $id,
                            'control_no' => $profile->control_no,
                            'type_of_admission' => $profile->type_of_admission,
                            'last_name' => $profile->last_name,
                            'first_name' => $profile->first_name,
                            'middle_name' => $profile->middle_name,
                            'extension_name' => $profile->extension_name
                     ];

                     $this->view('profiles/editProfile', $data);
              }
       }

       public function searchProfile(){

              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                     $data = [
                            'filter_by' => $_POST['filter_by'],
                            'search_item' => trim($_POST['search_item']),
                            'search_item_err' => '',
                            'search_result' => ''
                     ];

                     if(empty($data['search_item'])){
                            $data['search_item_err'] = 'Please provide a search term';
                     }             

                     if(empty($data['search_item_err'])){
                            if($data['filter_by'] == 'control_no'){
                                   $result = $this->profileModel->searchByCtrlNo($data['search_item']);
                            }elseif($data['filter_by'] == 'last_name'){
                                   $result = $this->profileModel->searchByLastName($data['search_item']);
                            }

                            if($result){
                                   if($data['filter_by'] == 'control_no'){
                                          $this->getByCtrlNumber($result);
                                   }elseif($data['filter_by'] == 'last_name'){
                                          $this->getByLastName($result);
                                   }
                            }else {
                                   flash('search_message', 'No match found', 'alert alert-danger');
                                   redirect('profiles/searchProfile');
                            }
                     }else{
                            $this->view('profiles/searchProfile', $data);
                     }

              }else{
                     $data = [
                            'display' => 'none',
                            'name' => '',
                            'created_at' => '',
                            'profileId' => '',
                            

                            'filter_by' => '',
                            'search_item' => '',
                            'control_no' => '',
                            'last_name' => '',
                            'first_name' => '',
                            'middle_name' => ''
                     ];

                     $this->view('profiles/searchProfile', $data);
              }  
       }

       public function getByCtrlNumber($profile){
                            $data = [
                                   'display' => 'block',
                                   'name' => $profile->name,
                                   'created_at' => $profile->created_at,
                                   'profileId' => $profile->profileId,
                                   'search_item' => '',
                                   'control_no' => $profile->control_no,
                                   'last_name' => $profile->last_name,
                                   'first_name' => $profile->first_name,
                                   'middle_name' => $profile->middle_name
                            ];
                     
                     $this->view('profiles/searchProfile', $data);
       }

       public function getByLastName($profiles){

              if($profiles){               
                     $data = [ 
                            'profiles' => $profiles,
                            'search_item' => '',
                            'search_item_err' => ''
                     ];
              }else{
                     redirect('profiles/searchProfile');
              }
              
              $this->view('profiles/searchResult', $data);
       }

       public function showProfile($id){

              $profile = $this->profileModel->getProfileById($id);
              $user = $this->userModel->getUserById($profile->user_id);

              $data = [
                     'profile' => $profile,
                     'user' => $user
              ];

              $this->view('profiles/showProfile', $data);
       }

       public function deleteProfile($id){
              if($_SERVER['REQUEST_METHOD'] == 'POST'){
                     if($this->profileModel->delete($id)){
                            flash('profile_message', 'Profile removed');
                            redirect('profiles');
                     }else{
                            die('Something went wrong');
                     }
              }else{
                     redirect('profiles');
              }
       }
}

?>