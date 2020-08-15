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
                            'number_of_siblings' =>  trim($_POST['number_of_siblings']),
                            'ordinal_position' =>  trim($_POST['ordinal_position']),
                            'living_arrangement' =>  trim($_POST['living_arrangement']),
                            'estimated_monthly_inc' =>  trim($_POST['estimated_monthly_inc']),
                            'name_of_father' => trim($_POST['name_of_father']),
                            'occupation_of_father' => trim($_POST['occupation_of_father']),
                            'name_of_mother' => trim($_POST['name_of_mother']),
                            'occupation_of_mother' => trim($_POST['occupation_of_mother']),
                            'name_of_spouse' => trim($_POST['name_of_spouse']),
                            'occupation_of_spouse' => trim($_POST['occupation_of_spouse']),
                            'address_of_spouse' => trim($_POST['address_of_spouse']),
                            'age_at_first_drug_use' => trim($_POST['age_at_first_drug_use']),
                            'date_of_last_drug_use' => trim($_POST['date_of_last_drug_use']),
                            'length_of_drug_use' => trim($_POST['length_of_drug_use']),
                            'frequency_of_drug_use' => trim($_POST['frequency_of_drug_use']),
                            'means_to_support_drug_habbit' => trim($_POST['means_to_support_drug_habbit']),
                            'area_where_drugs_are_being_abused' => trim($_POST['area_where_drugs_are_being_abused']),
                            'daily_expense_on_drugs' => trim($_POST['daily_expense_on_drugs']),
                            'source_of_drugs' => trim($_POST['source_of_drugs']),
                            'place_of_drug_source' => trim($_POST['place_of_drug_source']),
                            'primary_reason_for_using_drugs' => trim($_POST['primary_reason_for_using_drugs']),
                            'drug_used_for_the_last_12_months' => trim($_POST['drug_used_for_the_last_12_months']),
                            'date_of_drug_dependency_evaluation' => trim($_POST['date_of_drug_dependency_evaluation']),
                            'name_of_physician_doh' => trim($_POST['name_of_physician_doh']),
                            'findings_recommendations' => trim($_POST['findings_recommendations']),
                            'facility_type' => trim($_POST['facility_type']),
                            'intervention' => trim($_POST['intervention']),
                            'risk_level_assist' => trim($_POST['risk_level_assist']),
                            'date_of_screening_assist' => trim($_POST['date_of_screening_assist']),
                            'name_of_social_worker' => trim($_POST['name_of_social_worker']),
                            'referred_to_result_of_screening' => trim($_POST['referred_to_result_of_screening']),
                            'assessment_result' => trim($_POST['assessment_result']),
                            're_dde_date' => trim($_POST['re_dde_date']),
                            'name_of_physician_dde' => trim($_POST['name_of_physician_dde']),
                            'findings_recommendations_dde' => trim($_POST['findings_recommendations_dde']),
                            'start_date' => trim($_POST['start_date']),
                            'end_date' => trim($_POST['end_date']),
                            'provided_by' => trim($_POST['provided_by']),
                            'complete_flag' => trim($_POST['complete_flag']),
                            'intervention_provided_recommendation' => trim($_POST['intervention_provided_recommendation']),
                            'remarks' => trim($_POST['remarks']),
                            'others_current_status' => trim($_POST['others_current_status']),
                            'enrolled_in_sustainability' => trim($_POST['enrolled_in_sustainability']),
                            'applied_in_plea_bargaining' => trim($_POST['applied_in_plea_bargaining']),
                            'plea_bargaining_remarks' => trim($_POST['plea_bargaining_remarks']),
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
                            'number_of_siblings_err' => '',
                            'ordinal_position_err' => '',
                            'living_arrangement_err' => '',
                            'estimated_monthly_inc_err' => '',
                            'name_of_father_err' => '',
                            'occupation_of_father_err' => '',
                            'name_of_mother_err' => '',
                            'occupation_of_mother_err' => '',
                            'name_of_spouse_err' => '',
                            'occupation_of_spouse_err' => '',
                            'address_of_spouse_err' => '',
                            'age_at_first_drug_use_err' => '',
                            'date_of_last_drug_use_err' => '',
                            'length_of_drug_use_err' => '',
                            'frequency_of_drug_use_err' => '',
                            'means_to_support_drug_habbit_err' => '',
                            'area_where_drugs_are_being_abused_err' => '',
                            'daily_expense_on_drugs_err' => '',
                            'source_of_drugs_err' => '',
                            'place_of_drug_source_err' => '',
                            'primary_reason_for_using_drugs_err' => '',
                            'drug_used_for_the_last_12_months_err' => '',
                            'date_of_drug_dependency_evaluation_err' => '',
                            'risk_level_assist_err' => '',
                            'date_of_screening_assist_err' => '',
                            'name_of_social_worker_err' => '',
                            'referred_to_result_of_screening_err' => '',
                            'assessment_result_err' => '',
                            're_dde_date_err' => '',
                            'name_of_physician_dde_err' => '',
                            'findings_recommendations_dde_err' => '',
                            'start_date_err' => '',
                            'end_date_err' => '',
                            'provided_by_err' => '',
                            'complete_flag_err' => '',
                            'intervention_provided_recommendation_err' => '',
                            'remarks_err' => '',
                            'others_current_status_err' => '',
                            'enrolled_in_sustainability_err' => '',
                            'applied_in_plea_bargaining_err' => '',
                            'plea_bargaining_remarks_err' => '',
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
                            $data['house_no_err'] = 'Please provide control house number';
                     }

                     if(empty($data['street'])){
                            $data['street_err'] = 'Please provide street number';
                     }

                     if(empty($data['district'])){
                            $data['district_err'] = 'Please provide district';
                     }

                     if(empty($data['barangay'])){
                            $data['barangay_err'] = 'Please provide barangay';
                     }

                     if(empty($data['civil_status'])){
                            $data['civil_status_err'] = 'Please provide civil status';
                     }

                     if(empty($data['nationality'])){
                            $data['nationality_err'] = 'Please provide nationality';
                     }

                     if(empty($data['religion'])){
                            $data['religion_err'] = 'Please provide religion';
                     }

                     if(empty($data['advocacy_partner'])){
                            $data['advocacy_partner_err'] = 'Please provide advocacy partner';
                     }

                     if(empty($data['highest_educational_attainment'])){
                            $data['highest_educational_attainment_err'] = 'Please provide educational attainment';
                     }

                     if(empty($data['no_of_years_in_school'])){
                            $data['no_of_years_in_school_err'] = 'Please provide years in school';
                     }

                     if(empty($data['date_of_last_attendance_at_school'])){
                            $data['date_of_last_attendance_at_school_err'] = 'Please provide date of last attendance at school';
                     }

                     if(empty($data['occupation_prior_to_surrender'])){
                            $data['occupation_prior_to_surrender_err'] = 'Please provide occupation prior to surrender';
                     }

                     if(empty($data['number_of_siblings'])){
                            $data['number_of_siblings_err'] = 'Please provide number of siblings';
                     }
                     if(empty($data['ordinal_position'])){
                            $data['ordinal_position_err'] = 'Please provide ordinal position';
                     }
                     if(empty($data['living_arrangement'])){
                            $data['living_arrangement_err'] = 'Please provide living arrangement';
                     }
                     if(empty($data['estimated_monthly_inc'])){
                            $data['estimated_monthly_inc_err'] = 'Please provide estimated monthly inc';
                     }

                     if(empty($data['name_of_father'])){
                            $data['name_of_father_err'] = 'Please provide name of father';
                     }

                     if(empty($data['occupation_of_father'])){
                            $data['occupation_of_father_err'] = 'Please provide occupation of father';
                     }

                     if(empty($data['name_of_mother'])){
                            $data['name_of_mother_err'] = 'Please provide name of mother';
                     }

                     if(empty($data['occupation_of_mother'])){
                            $data['occupation_of_mother_err'] = 'Please provide occupation of mother';
                     }
                     
                     if(empty($data['name_of_spouse'])){
                            $data['name_of_spouse_err'] = 'Please provide name of spouse';
                     }
                     if(empty($data['occupation_of_spouse'])){
                            $data['occupation_of_spouse_err'] = 'Please provide occupation of spouse';
                     }
                     if(empty($data['address_of_spouse'])){
                            $data['address_of_spouse_err'] = 'Please provide address of spouse';
                     }

                     if(empty($data['age_at_first_drug_use'])){
                            $data['age_at_first_drug_use_err'] = 'Please provide age at first drug use';
                     }

                     if(empty($data['date_of_last_drug_use'])){
                            $data['date_of_last_drug_use_err'] = 'Please provide date of last drug use';
                     }

                     if(empty($data['length_of_drug_use'])){
                            $data['length_of_drug_use_err'] = 'Please provide length of drug use';
                     }

                     if(empty($data['frequency_of_drug_use'])){
                            $data['frequency_of_drug_use_err'] = 'Please provide frequency of drug use';
                     }
                     
                     if(empty($data['means_to_support_drug_habbit'])){
                            $data['means_to_support_drug_habbit_err'] = 'Please provide means to support drug habbit';
                     }
                     if(empty($data['area_where_drugs_are_being_abused'])){
                            $data['area_where_drugs_are_being_abused_err'] = 'Please provide area where drugs are being abused';
                     }
                     if(empty($data['daily_expense_on_drugs'])){
                            $data['daily_expense_on_drugs_err'] = 'Please provide daily expense on drugs';
                     }
                     if(empty($data['source_of_drugs'])){
                            $data['source_of_drugs_err'] = 'Please provide source of drugs';
                     }
                     if(empty($data['place_of_drug_source'])){
                            $data['place_of_drug_source_err'] = 'Please provide place of drug source';
                     }
                     
                     if(empty($data['primary_reason_for_using_drugs'])){
                            $data['primary_reason_for_using_drugs_err'] = 'Please provide primary reason for using drugs';
                     }

                     if(empty($data['drug_used_for_the_last_12_months'])){
                            $data['drug_used_for_the_last_12_months_err'] = 'Please provide drug used for the last 12 months';
                     }

                     if(empty($data['date_of_drug_dependency_evaluation'])){
                            $data['date_of_drug_dependency_evaluation_err'] = 'Please provide date of drug dependency evaluation';
                     }
                     if(empty($data['name_of_physician_doh'])){
                            $data['name_of_physician_doh_err'] = 'Please provide name of physician doh';
                     }
                     if(empty($data['findings_recommendations'])){
                            $data['findings_recommendations_err'] = 'Please provide findings recommendations';
                     }
                     if(empty($data['facility_type'])){
                            $data['facility_type_err'] = 'Please provide facility type';
                     }
                     if(empty($data['intervention'])){
                            $data['intervention_err'] = 'Please provide intervention';
                     }
                     if(empty($data['risk_level_assist'])){
                            $data['risk_level_assist_err'] = 'Please provide risk level assist';
                     }
                     if(empty($data['date_of_screening_assist'])){
                            $data['date_of_screening_assist_err'] = 'Please provide date of screening assist';
                     }
                     if(empty($data['name_of_social_worker'])){
                            $data['name_of_social_worker_err'] = 'Please provide name of social worker';
                     }
                     if(empty($data['referred_to_result_of_screening'])){
                            $data['referred_to_result_of_screening_err'] = 'Please provide required field';
                     }
                     if(empty($data['assessment_result'])){
                            $data['assessment_result_err'] = 'Please provide assessment result';
                     }
                     if(empty($data['re_dde_date'])){
                            $data['re_dde_date_err'] = 'Please provide date';
                     }
                     if(empty($data['name_of_physician_dde'])){
                            $data['name_of_physician_dde_err'] = 'Please provide name of physician';
                     }
                     if(empty($data['findings_recommendations_dde'])){
                            $data['findings_recommendations_dde_err'] = 'Please provide findings/recommendation';
                     }
                     if(empty($data['start_date'])){
                            $data['start_date_err'] = 'Please provide start date';
                     }
                     if(empty($data['end_date'])){
                            $data['end_date_err'] = 'Please provide end date';
                     }
                     if(empty($data['provided_by'])){
                            $data['provided_by_err'] = 'Please provide required field';
                     }
                     if(empty($data['complete_flag'])){
                            $data['complete_flag_err'] = 'Please provide required field';
                     }
                     if(empty($data['intervention_provided_recommendation'])){
                            $data['intervention_provided_recommendation_err'] = 'Please provide required field';
                     }
                     if(empty($data['remarks'])){
                            $data['remarks_err'] = 'Please provide remarks';
                     }
                     if(empty($data['others_current_status'])){
                            $data['others_current_status_err'] = 'Please provide required field';
                     }
                     if(empty($data['enrolled_in_sustainability'])){
                            $data['enrolled_in_sustainability_err'] = 'Please provide required field';
                     }
                     if(empty($data['applied_in_plea_bargaining'])){
                            $data['applied_in_plea_bargaining_err'] = 'Please provide required field';
                     }
                     if(empty($data['plea_bargaining_remarks'])){
                            $data['plea_bargaining_remarks_err'] = 'Please provide required field';
                     }  

                     $existingProfile = $this->profileModel->existingProfile($data);
                     if($existingProfile){
                            $errMsg = 'Existing profile<br> Control No: ' . $existingProfile->control_no . '<br>Name: ' . $existingProfile->last_name . ', ' . $existingProfile->first_name;

                            flash('existing_profile', $errMsg, 'alert alert-danger');
                     }


                     if(empty($data['control_no_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['middle_name_err']) && empty($data['occupation_prior_to_surrender_err']) && empty($data['date_of_last_attendance_at_school_err']) && empty($data['no_of_years_in_school_err']) && empty($data['highest_educational_attainment_err']) && empty($data['advocacy_partner_err']) && empty($data['religion_err']) && empty($data['nationality_err']) && empty($data['civil_status_err']) && empty($data['barangay_err']) && empty($data['district_err']) && empty($data['street_err']) && empty($data['house_no_err']) && empty($data['place_of_birth_err']) && empty($data['age_err']) && empty($data['date_of_birth_err']) && empty($data['aka_err']) && empty($data['sex_err']) && empty($data['extension_name_err']) && empty($data['estimated_monthly_inc_err']) && empty($data['living_arrangement_err']) && empty($data['ordinal_position_err']) && empty($data['number_of_siblings_err']) && empty($data['name_of_father_err']) && empty($data['occupation_of_father_err']) && empty($data['name_of_mother_err']) && empty($data['occupation_of_mother_err']) && empty($data['name_of_spouse_err']) && empty($data['occupation_of_spouse_err']) && empty($data['address_of_spouse_err']) && empty($data['age_at_first_drug_use_err']) && empty($data['date_of_last_drug_use_err']) && empty($data['length_of_drug_use_err']) && empty($data['frequency_of_drug_use_err']) && empty($data['source_of_drugs_err']) && empty($data['daily_expense_on_drugs_err']) && empty($data['area_where_drugs_are_being_abused_err']) && empty($data['means_to_support_drug_habbit_err']) && empty($data['place_of_drug_source_err']) && empty($data['primary_reason_for_using_drugs_err']) && empty($data['drug_used_for_the_last_12_months_err']) && empty($data['date_of_drug_dependency_evaluation_err']) && empty($data['name_of_physician_doh_err']) && empty($data['findings_recommendations_err']) && empty($data['facility_type_err']) && empty($data['intervention_err']) && empty($data['risk_level_assist_err']) && empty($data['date_of_screening_assist_err']) && empty($data['name_of_social_worker_err']) && empty($data['referred_to_result_of_screening_err']) && empty($data['assessment_result_err']) && empty($data['re_dde_date_err']) && empty($data['name_of_physician_dde_err']) && empty($data['findings_recommendations_dde_err']) && empty($data['start_date_err']) && empty($data['end_date_err']) && empty($data['provided_by_err']) && empty($data['complete_flag_err']) && empty($data['intervention_provided_recommendation_err']) && empty($data['remarks_err']) && empty($data['others_current_status_err']) && empty($data['enrolled_in_sustainability_err']) && empty($data['applied_in_plea_bargaining_err']) && empty($data['plea_bargaining_remarks_err']) && !$existingProfile){
                            
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
                            'number_of_siblings' => '',
                            'ordinal_position' => '',
                            'living_arrangement' => '',
                            'estimated_monthly_inc' => '',
                            'name_of_father' => '',
                            'occupation_of_father' => '',
                            'name_of_mother' => '',
                            'occupation_of_mother' => '',
                            'name_of_spouse' => '',
                            'occupation_of_spouse' => '',
                            'address_of_spouse' => '',
                            'age_at_first_drug_use' => '',
                            'date_of_last_drug_use' => '',
                            'length_of_drug_use' => '',
                            'frequency_of_drug_use' => '',
                            'means_to_support_drug_habbit' => '',
                            'area_where_drugs_are_being_abused' => '',
                            'daily_expense_on_drugs' => '',
                            'source_of_drugs' => '',
                            'place_of_drug_source' => '',
                            'primary_reason_for_using_drugs' => '',
                            'drug_used_for_the_last_12_months' => '',
                            'date_of_drug_dependency_evaluation' => '',
                            'name_of_physician_doh' => '',
                            'findings_recommendations' => '',
                            'facility_type' => '',
                            'intervention' => '',
                            'risk_level_assist' => '',
                            'date_of_screening_assist' => '',
                            'name_of_social_worker' => '',
                            'referred_to_result_of_screening' => '',
                            'assessment_result' => '',
                            're_dde_date' => '',
                            'name_of_physician_dde' => '',
                            'findings_recommendations_dde' => '',
                            'start_date' => '',
                            'end_date' => '',
                            'provided_by' => '',
                            'complete_flag' => '',
                            'intervention_provided_recommendation' => '',
                            'remarks' => '',
                            'others_current_status' => '',
                            'enrolled_in_sustainability' => '',
                            'applied_in_plea_bargaining' => '',
                            'plea_bargaining_remarks' => '',
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
                            'number_of_siblings_err' => '',
                            'ordinal_position_err' => '',
                            'living_arrangement_err' => '',
                            'estimated_monthly_inc_err' => '',
                            'name_of_father_err' => '',
                            'occupation_of_father_err' => '',
                            'name_of_mother_err' => '',
                            'occupation_of_mother_err' => '',
                            'name_of_spouse_err' => '',
                            'occupation_of_spouse_err' => '',
                            'address_of_spouse_err' => '',
                            'age_at_first_drug_use_err' => '',
                            'date_of_last_drug_use_err' => '',
                            'length_of_drug_use_err' => '',
                            'frequency_of_drug_use_err' => '',
                            'means_to_support_drug_habbit_err' => '',
                            'area_where_drugs_are_being_abused_err' => '',
                            'daily_expense_on_drugs_err' => '',
                            'source_of_drugs_err' => '',
                            'place_of_drug_source_err' => '',
                            'primary_reason_for_using_drugs_err' => '',
                            'drug_used_for_the_last_12_months_err' => '',
                            'date_of_drug_dependency_evaluation_err' => '',
                            'name_of_physician_doh_err' => '',
                            'findings_recommendations_err' => '',
                            'facility_type_err' => '',
                            'intervention_err' => '',
                            'risk_level_assist_err' => '',
                            'date_of_screening_assist_err' => '',
                            'name_of_social_worker_err' => '',
                            'referred_to_result_of_screening_err' => '',
                            'assessment_result_err' => '',
                            're_dde_date_err' => '',
                            'name_of_physician_dde_err' => '',
                            'findings_recommendations_dde_err' => '',
                            'start_date_err' => '',
                            'end_date_err' => '',
                            'provided_by_err' => '',
                            'complete_flag_err' => '',
                            'intervention_provided_recommendation_err' => '',
                            'remarks_err' => '',
                            'others_current_status_err' => '',
                            'enrolled_in_sustainability_err' => '',
                            'applied_in_plea_bargaining_err' => '',
                            'plea_bargaining_remarks_err' => '',
                     ];

                     $this->view('profiles/createProfile', $data);
              }
       }

       public function editProfile($id){
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
                            'number_of_siblings' =>  trim($_POST['number_of_siblings']),
                            'ordinal_position' =>  trim($_POST['ordinal_position']),
                            'living_arrangement' =>  trim($_POST['living_arrangement']),
                            'estimated_monthly_inc' =>  trim($_POST['estimated_monthly_inc']),
                            'name_of_father' => trim($_POST['name_of_father']),
                            'occupation_of_father' => trim($_POST['occupation_of_father']),
                            'name_of_mother' => trim($_POST['name_of_mother']),
                            'occupation_of_mother' => trim($_POST['occupation_of_mother']),
                            'name_of_spouse' => trim($_POST['name_of_spouse']),
                            'occupation_of_spouse' => trim($_POST['occupation_of_spouse']),
                            'address_of_spouse' => trim($_POST['address_of_spouse']),
                            'age_at_first_drug_use' => trim($_POST['age_at_first_drug_use']),
                            'date_of_last_drug_use' => trim($_POST['date_of_last_drug_use']),
                            'length_of_drug_use' => trim($_POST['length_of_drug_use']),
                            'frequency_of_drug_use' => trim($_POST['frequency_of_drug_use']),
                            'means_to_support_drug_habbit' => trim($_POST['means_to_support_drug_habbit']),
                            'area_where_drugs_are_being_abused' => trim($_POST['area_where_drugs_are_being_abused']),
                            'daily_expense_on_drugs' => trim($_POST['daily_expense_on_drugs']),
                            'source_of_drugs' => trim($_POST['source_of_drugs']),
                            'place_of_drug_source' => trim($_POST['place_of_drug_source']),
                            'primary_reason_for_using_drugs' => trim($_POST['primary_reason_for_using_drugs']),
                            'drug_used_for_the_last_12_months' => trim($_POST['drug_used_for_the_last_12_months']),
                            'date_of_drug_dependency_evaluation' => trim($_POST['date_of_drug_dependency_evaluation']),
                            'name_of_physician_doh' => trim($_POST['name_of_physician_doh']),
                            'findings_recommendations' => trim($_POST['findings_recommendations']),
                            'facility_type' => trim($_POST['facility_type']),
                            'intervention' => trim($_POST['intervention']),
                            'risk_level_assist' => trim($_POST['risk_level_assist']),
                            'date_of_screening_assist' => trim($_POST['date_of_screening_assist']),
                            'name_of_social_worker' => trim($_POST['name_of_social_worker']),
                            'referred_to_result_of_screening' => trim($_POST['referred_to_result_of_screening']),
                            'assessment_result' => trim($_POST['assessment_result']),
                            're_dde_date' => trim($_POST['re_dde_date']),
                            'name_of_physician_dde' => trim($_POST['name_of_physician_dde']),
                            'findings_recommendations_dde' => trim($_POST['findings_recommendations_dde']),
                            'start_date' => trim($_POST['start_date']),
                            'end_date' => trim($_POST['end_date']),
                            'provided_by' => trim($_POST['provided_by']),
                            'complete_flag' => trim($_POST['complete_flag']),
                            'intervention_provided_recommendation' => trim($_POST['intervention_provided_recommendation']),
                            'remarks' => trim($_POST['remarks']),
                            'others_current_status' => trim($_POST['others_current_status']),
                            'enrolled_in_sustainability' => trim($_POST['enrolled_in_sustainability']),
                            'applied_in_plea_bargaining' => trim($_POST['applied_in_plea_bargaining']),
                            'plea_bargaining_remarks' => trim($_POST['plea_bargaining_remarks']),
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
                            'number_of_siblings_err' => '',
                            'ordinal_position_err' => '',
                            'living_arrangement_err' => '',
                            'estimated_monthly_inc_err' => '',
                            'name_of_father_err' => '',
                            'occupation_of_father_err' => '',
                            'name_of_mother_err' => '',
                            'occupation_of_mother_err' => '',
                            'name_of_spouse_err' => '',
                            'occupation_of_spouse_err' => '',
                            'address_of_spouse_err' => '',
                            'age_at_first_drug_use_err' => '',
                            'date_of_last_drug_use_err' => '',
                            'length_of_drug_use_err' => '',
                            'frequency_of_drug_use_err' => '',
                            'means_to_support_drug_habbit_err' => '',
                            'area_where_drugs_are_being_abused_err' => '',
                            'daily_expense_on_drugs_err' => '',
                            'source_of_drugs_err' => '',
                            'place_of_drug_source_err' => '',
                            'primary_reason_for_using_drugs_err' => '',
                            'drug_used_for_the_last_12_months_err' => '',
                            'date_of_drug_dependency_evaluation_err' => '',
                            'risk_level_assist_err' => '',
                            'date_of_screening_assist_err' => '',
                            'name_of_social_worker_err' => '',
                            'referred_to_result_of_screening_err' => '',
                            'assessment_result_err' => '',
                            're_dde_date_err' => '',
                            'name_of_physician_dde_err' => '',
                            'findings_recommendations_dde_err' => '',
                            'start_date_err' => '',
                            'end_date_err' => '',
                            'provided_by_err' => '',
                            'complete_flag_err' => '',
                            'intervention_provided_recommendation_err' => '',
                            'remarks_err' => '',
                            'others_current_status_err' => '',
                            'enrolled_in_sustainability_err' => '',
                            'applied_in_plea_bargaining_err' => '',
                            'plea_bargaining_remarks_err' => '',
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
                            $data['house_no_err'] = 'Please provide control house number';
                     }

                     if(empty($data['street'])){
                            $data['street_err'] = 'Please provide street number';
                     }

                     if(empty($data['district'])){
                            $data['district_err'] = 'Please provide district';
                     }

                     if(empty($data['barangay'])){
                            $data['barangay_err'] = 'Please provide barangay';
                     }

                     if(empty($data['civil_status'])){
                            $data['civil_status_err'] = 'Please provide civil status';
                     }

                     if(empty($data['nationality'])){
                            $data['nationality_err'] = 'Please provide nationality';
                     }

                     if(empty($data['religion'])){
                            $data['religion_err'] = 'Please provide religion';
                     }

                     if(empty($data['advocacy_partner'])){
                            $data['advocacy_partner_err'] = 'Please provide advocacy partner';
                     }

                     if(empty($data['highest_educational_attainment'])){
                            $data['highest_educational_attainment_err'] = 'Please provide educational attainment';
                     }

                     if(empty($data['no_of_years_in_school'])){
                            $data['no_of_years_in_school_err'] = 'Please provide years in school';
                     }

                     if(empty($data['date_of_last_attendance_at_school'])){
                            $data['date_of_last_attendance_at_school_err'] = 'Please provide date of last attendance at school';
                     }

                     if(empty($data['occupation_prior_to_surrender'])){
                            $data['occupation_prior_to_surrender_err'] = 'Please provide occupation prior to surrender';
                     }

                     if(empty($data['number_of_siblings'])){
                            $data['number_of_siblings_err'] = 'Please provide number of siblings';
                     }
                     if(empty($data['ordinal_position'])){
                            $data['ordinal_position_err'] = 'Please provide ordinal position';
                     }
                     if(empty($data['living_arrangement'])){
                            $data['living_arrangement_err'] = 'Please provide living arrangement';
                     }
                     if(empty($data['estimated_monthly_inc'])){
                            $data['estimated_monthly_inc_err'] = 'Please provide estimated monthly inc';
                     }

                     if(empty($data['name_of_father'])){
                            $data['name_of_father_err'] = 'Please provide name of father';
                     }

                     if(empty($data['occupation_of_father'])){
                            $data['occupation_of_father_err'] = 'Please provide occupation of father';
                     }

                     if(empty($data['name_of_mother'])){
                            $data['name_of_mother_err'] = 'Please provide name of mother';
                     }

                     if(empty($data['occupation_of_mother'])){
                            $data['occupation_of_mother_err'] = 'Please provide occupation of mother';
                     }
                     
                     if(empty($data['name_of_spouse'])){
                            $data['name_of_spouse_err'] = 'Please provide name of spouse';
                     }
                     if(empty($data['occupation_of_spouse'])){
                            $data['occupation_of_spouse_err'] = 'Please provide occupation of spouse';
                     }
                     if(empty($data['address_of_spouse'])){
                            $data['address_of_spouse_err'] = 'Please provide address of spouse';
                     }

                     if(empty($data['age_at_first_drug_use'])){
                            $data['age_at_first_drug_use_err'] = 'Please provide age at first drug use';
                     }

                     if(empty($data['date_of_last_drug_use'])){
                            $data['date_of_last_drug_use_err'] = 'Please provide date of last drug use';
                     }

                     if(empty($data['length_of_drug_use'])){
                            $data['length_of_drug_use_err'] = 'Please provide length of drug use';
                     }

                     if(empty($data['frequency_of_drug_use'])){
                            $data['frequency_of_drug_use_err'] = 'Please provide frequency of drug use';
                     }
                     
                     if(empty($data['means_to_support_drug_habbit'])){
                            $data['means_to_support_drug_habbit_err'] = 'Please provide means to support drug habbit';
                     }
                     if(empty($data['area_where_drugs_are_being_abused'])){
                            $data['area_where_drugs_are_being_abused_err'] = 'Please provide area where drugs are being abused';
                     }
                     if(empty($data['daily_expense_on_drugs'])){
                            $data['daily_expense_on_drugs_err'] = 'Please provide daily expense on drugs';
                     }
                     if(empty($data['source_of_drugs'])){
                            $data['source_of_drugs_err'] = 'Please provide source of drugs';
                     }
                     if(empty($data['place_of_drug_source'])){
                            $data['place_of_drug_source_err'] = 'Please provide place of drug source';
                     }
                     
                     if(empty($data['primary_reason_for_using_drugs'])){
                            $data['primary_reason_for_using_drugs_err'] = 'Please provide primary reason for using drugs';
                     }

                     if(empty($data['drug_used_for_the_last_12_months'])){
                            $data['drug_used_for_the_last_12_months_err'] = 'Please provide drug used for the last 12 months';
                     }

                     if(empty($data['date_of_drug_dependency_evaluation'])){
                            $data['date_of_drug_dependency_evaluation_err'] = 'Please provide date of drug dependency evaluation';
                     }
                     if(empty($data['name_of_physician_doh'])){
                            $data['name_of_physician_doh_err'] = 'Please provide name of physician doh';
                     }
                     if(empty($data['findings_recommendations'])){
                            $data['findings_recommendations_err'] = 'Please provide findings recommendations';
                     }
                     if(empty($data['facility_type'])){
                            $data['facility_type_err'] = 'Please provide facility type';
                     }
                     if(empty($data['intervention'])){
                            $data['intervention_err'] = 'Please provide intervention';
                     }
                     if(empty($data['risk_level_assist'])){
                            $data['risk_level_assist_err'] = 'Please provide risk level assist';
                     }
                     if(empty($data['date_of_screening_assist'])){
                            $data['date_of_screening_assist_err'] = 'Please provide date of screening assist';
                     }
                     if(empty($data['name_of_social_worker'])){
                            $data['name_of_social_worker_err'] = 'Please provide name of social worker';
                     }
                     if(empty($data['referred_to_result_of_screening'])){
                            $data['referred_to_result_of_screening_err'] = 'Please provide required field';
                     }
                     if(empty($data['assessment_result'])){
                            $data['assessment_result_err'] = 'Please provide assessment result';
                     }
                     if(empty($data['re_dde_date'])){
                            $data['re_dde_date_err'] = 'Please provide date';
                     }
                     if(empty($data['name_of_physician_dde'])){
                            $data['name_of_physician_dde_err'] = 'Please provide name of physician';
                     }
                     if(empty($data['findings_recommendations_dde'])){
                            $data['findings_recommendations_dde_err'] = 'Please provide findings/recommendation';
                     }
                     if(empty($data['start_date'])){
                            $data['start_date_err'] = 'Please provide start date';
                     }
                     if(empty($data['end_date'])){
                            $data['end_date_err'] = 'Please provide end date';
                     }
                     if(empty($data['provided_by'])){
                            $data['provided_by_err'] = 'Please provide required field';
                     }
                     if(empty($data['complete_flag'])){
                            $data['complete_flag_err'] = 'Please provide required field';
                     }
                     if(empty($data['intervention_provided_recommendation'])){
                            $data['intervention_provided_recommendation_err'] = 'Please provide required field';
                     }
                     if(empty($data['remarks'])){
                            $data['remarks_err'] = 'Please provide remarks';
                     }
                     if(empty($data['others_current_status'])){
                            $data['others_current_status_err'] = 'Please provide required field';
                     }
                     if(empty($data['enrolled_in_sustainability'])){
                            $data['enrolled_in_sustainability_err'] = 'Please provide required field';
                     }
                     if(empty($data['applied_in_plea_bargaining'])){
                            $data['applied_in_plea_bargaining_err'] = 'Please provide required field';
                     }
                     if(empty($data['plea_bargaining_remarks'])){
                            $data['plea_bargaining_remarks_err'] = 'Please provide required field';
                     }  

                     if(empty($data['control_no_err']) && empty($data['last_name_err']) && empty($data['first_name_err']) && empty($data['middle_name_err']) && empty($data['occupation_prior_to_surrender_err']) && empty($data['date_of_last_attendance_at_school_err']) && empty($data['no_of_years_in_school_err']) && empty($data['highest_educational_attainment_err']) && empty($data['advocacy_partner_err']) && empty($data['religion_err']) && empty($data['nationality_err']) && empty($data['civil_status_err']) && empty($data['barangay_err']) && empty($data['district_err']) && empty($data['street_err']) && empty($data['house_no_err']) && empty($data['place_of_birth_err']) && empty($data['age_err']) && empty($data['date_of_birth_err']) && empty($data['aka_err']) && empty($data['sex_err']) && empty($data['extension_name_err']) && empty($data['estimated_monthly_inc_err']) && empty($data['living_arrangement_err']) && empty($data['ordinal_position_err']) && empty($data['number_of_siblings_err']) && empty($data['name_of_father_err']) && empty($data['occupation_of_father_err']) && empty($data['name_of_mother_err']) && empty($data['occupation_of_mother_err']) && empty($data['name_of_spouse_err']) && empty($data['occupation_of_spouse_err']) && empty($data['address_of_spouse_err']) && empty($data['age_at_first_drug_use_err']) && empty($data['date_of_last_drug_use_err']) && empty($data['length_of_drug_use_err']) && empty($data['frequency_of_drug_use_err']) && empty($data['source_of_drugs_err']) && empty($data['daily_expense_on_drugs_err']) && empty($data['area_where_drugs_are_being_abused_err']) && empty($data['means_to_support_drug_habbit_err']) && empty($data['place_of_drug_source_err']) && empty($data['primary_reason_for_using_drugs_err']) && empty($data['drug_used_for_the_last_12_months_err']) && empty($data['date_of_drug_dependency_evaluation_err']) && empty($data['name_of_physician_doh_err']) && empty($data['findings_recommendations_err']) && empty($data['facility_type_err']) && empty($data['intervention_err']) && empty($data['risk_level_assist_err']) && empty($data['date_of_screening_assist_err']) && empty($data['name_of_social_worker_err']) && empty($data['referred_to_result_of_screening_err']) && empty($data['assessment_result_err']) && empty($data['re_dde_date_err']) && empty($data['name_of_physician_dde_err']) && empty($data['findings_recommendations_dde_err']) && empty($data['start_date_err']) && empty($data['end_date_err']) && empty($data['provided_by_err']) && empty($data['complete_flag_err']) && empty($data['intervention_provided_recommendation_err']) && empty($data['remarks_err']) && empty($data['others_current_status_err']) && empty($data['enrolled_in_sustainability_err']) && empty($data['applied_in_plea_bargaining_err']) && empty($data['plea_bargaining_remarks_err'])){
    
                            // THIS IS WHERE U FETCH USERID and BRGY INFO TO ADD IN CONTROL NUMBER
                            if($this->profileModel->updateProfile($data)){
                                   move_uploaded_file($_FILES['image']['tmp_name'], $target);
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
                            'image' => $profile->image,
                            'control_no' => $profile->control_no,
                            'type_of_admission' => $profile->type_of_admission,
                            'last_name' => $profile->last_name,
                            'first_name' => $profile->first_name,
                            'middle_name' => $profile->middle_name,
                            'extension_name' => $profile->extension_name,
                            'sex' => $profile->sex,
                            'aka' => $profile->aka,
                            'date_of_birth' => $profile->date_of_birth,
                            'age' => $profile->age,
                            'place_of_birth' => $profile->place_of_birth,
                            'house_no' => $profile->house_no,
                            'street' => $profile->street,
                            'district' => $profile->district,
                            'barangay' => $profile->barangay,
                            'civil_status' => $profile->civil_status,
                            'nationality' => $profile->nationality,
                            'religion' => $profile->religion,
                            'advocacy_partner' => $profile->advocacy_partner,
                            'highest_educational_attainment' => $profile->highest_educational_attainment,
                            'no_of_years_in_school' => $profile->no_of_years_in_school,
                            'date_of_last_attendance_at_school' => $profile->date_of_last_attendance_at_school,
                            'occupation_prior_to_surrender' => $profile->occupation_prior_to_surrender,
                            'number_of_siblings' => $profile->number_of_siblings,
                            'ordinal_position' => $profile->ordinal_position,
                            'living_arrangement' => $profile->living_arrangement,
                            'estimated_monthly_inc' => $profile->estimated_monthly_inc,
                            'name_of_father' => $profile->name_of_father,
                            'occupation_of_father' => $profile->occupation_of_father,
                            'name_of_mother' => $profile->name_of_mother,
                            'occupation_of_mother' => $profile->occupation_of_mother,
                            'name_of_spouse' => $profile->name_of_spouse,
                            'occupation_of_spouse' => $profile->occupation_of_spouse,
                            'address_of_spouse' => $profile->address_of_spouse,
                            'age_at_first_drug_use' => $profile->age_at_first_drug_use,
                            'date_of_last_drug_use' => $profile->date_of_last_drug_use,
                            'length_of_drug_use' => $profile->length_of_drug_use,
                            'frequency_of_drug_use' => $profile->frequency_of_drug_use,
                            'means_to_support_drug_habbit' => $profile->means_to_support_drug_habbit,
                            'area_where_drugs_are_being_abused' => $profile->area_where_drugs_are_being_abused,
                            'daily_expense_on_drugs' => $profile->daily_expense_on_drugs,
                            'source_of_drugs' => $profile->source_of_drugs,
                            'place_of_drug_source' => $profile->place_of_drug_source,
                            'primary_reason_for_using_drugs' => $profile->primary_reason_for_using_drugs,
                            'drug_used_for_the_last_12_months' => $profile->drug_used_for_the_last_12_months,
                            'date_of_drug_dependency_evaluation' => $profile->date_of_drug_dependency_evaluation,
                            'name_of_physician_doh' => $profile->name_of_physician_doh,
                            'findings_recommendations' => $profile->findings_recommendations,
                            'facility_type' => $profile->facility_type,
                            'intervention' => $profile->intervention,
                            'risk_level_assist' => $profile->risk_level_assist,
                            'date_of_screening_assist' => $profile->date_of_screening_assist,
                            'name_of_social_worker' => $profile->name_of_social_worker,
                            'referred_to_result_of_screening' => $profile->referred_to_result_of_screening,
                            'assessment_result' => $profile->assessment_result,
                            're_dde_date' => $profile->re_dde_date,
                            'name_of_physician_dde' => $profile->name_of_physician_dde,
                            'findings_recommendations_dde' => $profile->findings_recommendations_dde,
                            'start_date' => $profile->start_date,
                            'end_date' => $profile->end_date,
                            'provided_by' => $profile->provided_by,
                            'complete_flag' => $profile->complete_flag,
                            'intervention_provided_recommendation' => $profile->intervention_provided_recommendation,
                            'remarks' => $profile->remarks,
                            'others_current_status' => $profile->others_current_status,
                            'enrolled_in_sustainability' => $profile->enrolled_in_sustainability,
                            'applied_in_plea_bargaining' => $profile->applied_in_plea_bargaining,
                            'plea_bargaining_remarks' => $profile->plea_bargaining_remarks,
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