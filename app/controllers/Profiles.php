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
              $ctrl_no = $this->profileModel->generateCtrlNo();
              if($_SERVER['REQUEST_METHOD'] == 'POST'){

                     $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                     $target = 'img/'.basename($_FILES['image']['name']);

                     $data = [
                            'image' => $_FILES['image']['name'],
                            'user_id' => $_SESSION['user_id'],
                            'control_no' => trim($_POST['control_no']),
                            'type_of_admission' => trim($_POST['type_of_admission']),
                            'last_name' => trim($_POST['last_name']),
                            'first_name' => trim($_POST['first_name']),
                            'middle_name' => trim($_POST['middle_name']),
                            'extension_name' => trim($_POST['extension_name']),
                            'sex' => trim($_POST['sex']),
                            'aka' => trim($_POST['aka']),
                            'date_of_birth' => trim($_POST['date_of_birth']),
                            'age' =>  trim($_POST['age']),
                            'place_of_birth' => trim($_POST['place_of_birth']),
                            'house_no' => trim($_POST['house_no']),
                            'street' => trim($_POST['street']),
                            'district' => trim($_POST['district']),
                            'barangay' => trim($_POST['barangay']),
                            'civil_status' => trim($_POST['civil_status']),
                            'nationality' => trim($_POST['nationality']),
                            'religion' => trim($_POST['religion']),
                            'advocacy_partner' => trim($_POST['advocacy_partner']),

                            'highest_educational_attainment' => trim($_POST['highest_educational_attainment']),
                            'no_of_years_in_school' => trim($_POST['no_of_years_in_school']),
                            'date_of_last_attendance_at_school' => trim($_POST['date_of_last_attendance_at_school']),
                            'occupation_prior_to_surrender' => trim($_POST['occupation_prior_to_surrender']),

                            'control_no_err' => '',
                            'type_of_admission_err' => '',
                            'last_name_err' => '',
                            'first_name_err' => '',
                            'middle_name_err' => '',
                            'extension_name_err' => '',
                            'sex_err' => '',
                            'aka_err' => '',
                            'date_of_birth_err' => '',
                            'age_err' =>  '',
                            'place_of_birth_err' => '',
                            'house_no_err' => '',
                            'street_err' => '',
                            'district_err' => '',
                            'barangay_err' => '',
                            'civil_status_err' => '',
                            'nationality_err' => '',
                            'religion_err' => '',
                            'advocacy_partner_err' => '',

                            'highest_educational_attainment_err' => '',
                            'no_of_years_in_school_err' => '',
                            'date_of_last_attendance_at_school_err' => '',
                            'occupation_prior_to_surrender_err' => '',
                     ];

                     if(empty($data['control_no'])){
                            $data['control_no_err'] = 'Please provide control number';
                     }

                     if(empty($data['type_of_admission'])){
                            $data['type_of_admission_err'] = 'Please provide type of admission';
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

                     if(empty($data['extension_name'])){
                            $data['extension_name_err'] = 'Please provide name extension or N/A';
                     }

                     if(empty($data['sex'])){
                            $data['sex_err'] = 'Please provide gender';
                     }

                     if(empty($data['aka'])){
                            $data['aka_err'] = 'Please provide AKA';
                     }

                     if(empty($data['date_of_birth'])){
                            $data['date_of_birth_err'] = 'Please provide date of birth';
                     }

                     if(empty($data['age'])){
                            $data['age_err'] = 'Please provide age';
                     }

                     if(empty($data['place_of_birth'])){
                            $data['place_of_birth_err'] = 'Please provide place of birth';
                     }
                     
                     if(empty($data['house_no'])){
                            $data['house_no_err'] = 'Please provide control number';
                     }

                     if(empty($data['street'])){
                            $data['street_err'] = 'Please provide control number';
                     }

                     if(empty($data['district'])){
                            $data['district_err'] = 'Please provide control number';
                     }

                     if(empty($data['barangay'])){
                            $data['barangay_err'] = 'Please provide control number';
                     }

                     if(empty($data['civil_status'])){
                            $data['civil_status_err'] = 'Please provide control number';
                     }

                     if(empty($data['nationality'])){
                            $data['nationality_err'] = 'Please provide control number';
                     }

                     if(empty($data['religion'])){
                            $data['religion_err'] = 'Please provide control number';
                     }

                     if(empty($data['advocacy_partner'])){
                            $data['advocacy_partner_err'] = 'Please provide control number';
                     }

                     if(empty($data['highest_educational_attainment'])){
                            $data['highest_educational_attainment_err'] = 'Please provide control number';
                     }

                     if(empty($data['no_of_years_in_school'])){
                            $data['no_of_years_in_school_err'] = 'Please provide control number';
                     }

                     if(empty($data['date_of_last_attendance_at_school'])){
                            $data['date_of_last_attendance_at_school_err'] = 'Please provide control number';
                     }

                     if(empty($data['occupation_prior_to_surrender'])){
                            $data['occupation_prior_to_surrender_err'] = 'Please provide control number';
                     }
                     
                     $existingProfile = $this->profileModel->existingProfile($data);
                     

                     if($existingProfile){
                            $errMsg = 'Existing profile<br> Control No: ' . $existingProfile->control_no . '<br>Name: ' . $existingProfile->last_name . ', ' . $existingProfile->first_name;

                            flash('existing_profile', $errMsg, 'alert alert-danger');
                     }
// && empty($data['occupation_prior_to_surrender_err']) && empty($data['date_of_last_attendance_at_school_err']) && empty($data['no_of_years_in_school_err']) && empty($data['highest_educational_attainment_err']) && empty($data['advocacy_partner_err']) && empty($data['religion_err']) && empty($data['nationality_err']) && empty($data['civil_status_err']) && empty($data['barangay_err']) && empty($data['district_err']) && empty($data['street_err']) && empty($data['house_no_err']) && empty($data['place_of_birth_err']) && empty($data['age_err']) && empty($data['date_of_birth_err']) && empty($data['aka_err']) && empty($data['sex_err']) && empty($data['extension_name_err'])

                     if(empty($data['control_no_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['middle_name_err']) && empty($data['occupation_prior_to_surrender_err']) && empty($data['date_of_last_attendance_at_school_err']) && empty($data['no_of_years_in_school_err']) && empty($data['highest_educational_attainment_err']) && empty($data['advocacy_partner_err']) && empty($data['religion_err']) && empty($data['nationality_err']) && empty($data['civil_status_err']) && empty($data['barangay_err']) && empty($data['district_err']) && empty($data['street_err']) && empty($data['house_no_err']) && empty($data['place_of_birth_err']) && empty($data['age_err']) && empty($data['date_of_birth_err']) && empty($data['aka_err']) && empty($data['sex_err']) && empty($data['extension_name_err']) && !$existingProfile){
                            
                            // THIS IS WHERE U FETCH USERID and BRGY INFO TO ADD IN CONTROL NUMBER
                            if($this->profileModel->createProfile($data)){
                                   move_uploaded_file($_FILES['image']['tmp_name'], $target);
                                   flash('profile_message', 'Profile created <br>Control Number: ' . $ctrl_no);
                                   redirect('profiles');
                            }else{
                                   die('Something went wrong');
                            }
                     }else{
                            $this->view('profiles/createProfile', $data);
                     }

              }else{
                     
                     $data = [
                            'image' => '',
                            'control_no' => $ctrl_no,
                            'type_of_admission' => '',
                            'last_name' => '',
                            'first_name' => '',
                            'middle_name' => '',
                            'extension_name' => '',
                            'sex' => '',
                            'aka' => '',
                            'date_of_birth' => '',
                            'age' => '',
                            'place_of_birth' => '',
                            'house_no' => '',
                            'street' => '',
                            'district' => '',
                            'barangay' => '',
                            'civil_status' => '',
                            'nationality' => '',
                            'religion' => '',
                            'advocacy_partner' => '',

                            'highest_educational_attainment' => '',
                            'no_of_years_in_school' => '',
                            'date_of_last_attendance_at_school' => '',
                            'occupation_prior_to_surrender' => '',


                            'control_no_err' => '',
                            'type_of_admission_err' => '',
                            'last_name_err' => '',
                            'first_name_err' => '',
                            'middle_name_err' => '',
                            'extension_name_err' => '',
                            'sex_err' => '',
                            'aka_err' => '',
                            'date_of_birth_err' => '',
                            'age_err' =>  '',
                            'place_of_birth_err' => '',
                            'house_no_err' => '',
                            'street_err' => '',
                            'district_err' => '',
                            'barangay_err' => '',
                            'civil_status_err' => '',
                            'nationality_err' => '',
                            'religion_err' => '',
                            'advocacy_partner_err' => '',

                            'highest_educational_attainment_err' => '',
                            'no_of_years_in_school_err' => '',
                            'date_of_last_attendance_at_school_err' => '',
                            'occupation_prior_to_surrender_err' => '',
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
                            'search_result' => '',
                            
                            'name' => '',
                            'created_at' => '',
                            'profileId' => '',
                            'control_no' => '',
                            'last_name' => '',
                            'first_name' => '',
                            'middle_name' => ''
                     ];

                     if(empty($data['search_item'])){
                            $data['search_item_err'] = 'Please provide a search term';
                     }             
                     
                     if(empty($data['search_item_err'])){
                            
                            if($data['filter_by'] == 'control_no'){
                                   
                                   $result = $this->profileModel->searchByCtrlNo($data['search_item']);
                                   if($result){
                                           $this->getByCtrlNumber($result);
                                   }else{
                                          flash('search_message', 'No match found', 'alert alert-danger');
                                          redirect('profiles/searchProfile');
                                   }

                            }elseif($data['filter_by'] == 'last_name'){
                                    $result = $this->profileModel->searchByLastName($data['search_item']);
                                    if($result){
                                          $this->getByLastName($result);
                                    }else{
                                          flash('search_message', 'No match found', 'alert alert-danger');
                                          redirect('profiles/searchProfile');
                                   }
                            }else{
                                   die('Something went wrong');
                            }
                            
                           
                     }else{
                            $data = [
                                   'display' => 'none',
                                   'search_item' => ''
                            ];

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
                     if(isset($profile)){
                            $data = [
                                   'display' => 'block',
                                   'image' => $profile->image,
                                   'name' => $profile->name,
                                   'created_at' => $profile->created_at,
                                   'profileId' => $profile->profileId,
                                   'search_item' => '',
                                   'control_no' => $profile->control_no,
                                   'last_name' => $profile->last_name,
                                   'first_name' => $profile->first_name,
                                   'middle_name' => $profile->middle_name
                            ];
                     }else{
                            die('not set');
                     }
                     
                     $this->view('profiles/searchProfile', $data);         
       }

       public function getByLastName($profiles){

              if($profiles){               
                     $data = [ 
                            'profiles' => $profiles,
                            'search_item' => '',
                            'search_item_err' => ''
                     ];
                     $this->view('profiles/searchResult', $data);
              }
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