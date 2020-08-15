<?php

class Profile{
       private $db;

       public function __construct(){
              $this->db = new Database;
       }

       public function getProfile(){
              $this->db->query('SELECT *,
              profiles.id as profileId,
              users.id as userId,
              profiles.created_at as profileCreated,
              users.created_at as userCreated
              FROM profiles
              INNER JOIN users
              ON profiles.user_id = users.id
              ORDER BY profiles.created_at DESC
              ');

              $results = $this->db->resultSet();

              return $results;
       }

       public function createProfile($data){
              $this->db->query('INSERT INTO profiles (image, user_id, control_no, type_of_admission, last_name, first_name, middle_name, extension_name, sex, aka, date_of_birth, age, place_of_birth, house_no, street, district, barangay, civil_status, nationality, religion, advocacy_partner, highest_educational_attainment, no_of_years_in_school, date_of_last_attendance_at_school, occupation_prior_to_surrender, number_of_siblings, ordinal_position, living_arrangement, estimated_monthly_inc, name_of_father, occupation_of_father, name_of_mother, occupation_of_mother, name_of_spouse, occupation_of_spouse, address_of_spouse, age_at_first_drug_use, date_of_last_drug_use, length_of_drug_use, frequency_of_drug_use, means_to_support_drug_habbit, area_where_drugs_are_being_abused, daily_expense_on_drugs, source_of_drugs, place_of_drug_source, primary_reason_for_using_drugs, drug_used_for_the_last_12_months, date_of_drug_dependency_evaluation, name_of_physician_doh, findings_recommendations, facility_type, intervention, risk_level_assist, date_of_screening_assist, name_of_social_worker, referred_to_result_of_screening, assessment_result, re_dde_date, name_of_physician_dde, findings_recommendations_dde, start_date, end_date, provided_by, complete_flag, intervention_provided_recommendation, remarks, others_current_status, enrolled_in_sustainability, applied_in_plea_bargaining, plea_bargaining_remarks) VALUES(:image, :user_id, :control_no, :type_of_admission, :last_name, :first_name, :middle_name, :extension_name, :sex, :aka, :date_of_birth, :age, :place_of_birth, :house_no, :street, :district, :barangay, :civil_status, :nationality, :religion, :advocacy_partner, :highest_educational_attainment, :no_of_years_in_school, :date_of_last_attendance_at_school, :occupation_prior_to_surrender, :number_of_siblings, :ordinal_position, :living_arrangement, :estimated_monthly_inc, :name_of_father, :occupation_of_father, :name_of_mother, :occupation_of_mother, :name_of_spouse, :occupation_of_spouse, :address_of_spouse, :age_at_first_drug_use, :date_of_last_drug_use, :length_of_drug_use, :frequency_of_drug_use, :means_to_support_drug_habbit, :area_where_drugs_are_being_abused, :daily_expense_on_drugs, :source_of_drugs, :place_of_drug_source, :primary_reason_for_using_drugs, :drug_used_for_the_last_12_months, :date_of_drug_dependency_evaluation, :name_of_physician_doh, :findings_recommendations, :facility_type, :intervention, :risk_level_assist, :date_of_screening_assist, :name_of_social_worker, :referred_to_result_of_screening, :assessment_result, :re_dde_date, :name_of_physician_dde, :findings_recommendations_dde, :start_date, :end_date, :provided_by, :complete_flag, :intervention_provided_recommendation, :remarks, :others_current_status, :enrolled_in_sustainability, :applied_in_plea_bargaining, :plea_bargaining_remarks)');
              

              $this->db->bind(':image', $data['image']);
              $this->db->bind(':user_id', $data['user_id']);
              $this->db->bind(':control_no', $data['control_no']);
              $this->db->bind(':type_of_admission', $data['type_of_admission']);
              $this->db->bind(':last_name', $data['last_name']);
              $this->db->bind(':first_name', $data['first_name']);
              $this->db->bind(':middle_name', $data['middle_name']);
              $this->db->bind(':extension_name', $data['extension_name']);
              $this->db->bind(':sex', $data['sex']);
              $this->db->bind(':aka', $data['aka']);
              $this->db->bind(':date_of_birth', $data['date_of_birth']);
              $this->db->bind(':age', $data['age']);
              $this->db->bind(':place_of_birth', $data['place_of_birth']);
              $this->db->bind(':house_no', $data['house_no']);
              $this->db->bind(':street', $data['street']);
              $this->db->bind(':district', $data['district']);
              $this->db->bind(':barangay', $data['barangay']);
              $this->db->bind(':civil_status', $data['civil_status']);
              $this->db->bind(':nationality', $data['nationality']);
              $this->db->bind(':religion', $data['religion']);
              $this->db->bind(':advocacy_partner', $data['advocacy_partner']);
              $this->db->bind(':highest_educational_attainment', $data['highest_educational_attainment']);
              $this->db->bind(':no_of_years_in_school', $data['no_of_years_in_school']);
              $this->db->bind(':date_of_last_attendance_at_school', $data['date_of_last_attendance_at_school']);
              $this->db->bind(':occupation_prior_to_surrender', $data['occupation_prior_to_surrender']);
              $this->db->bind(':number_of_siblings', $data['number_of_siblings']);
              $this->db->bind(':ordinal_position', $data['ordinal_position']);
              $this->db->bind(':living_arrangement', $data['living_arrangement']);
              $this->db->bind(':estimated_monthly_inc', $data['estimated_monthly_inc']);
              $this->db->bind(':name_of_father', $data['name_of_father']);
              $this->db->bind(':occupation_of_father', $data['occupation_of_father']);
              $this->db->bind(':name_of_mother', $data['name_of_mother']);
              $this->db->bind(':occupation_of_mother', $data['occupation_of_mother']);
              $this->db->bind(':name_of_spouse', $data['name_of_spouse']);
              $this->db->bind(':occupation_of_spouse', $data['occupation_of_spouse']);
              $this->db->bind(':address_of_spouse', $data['address_of_spouse']);
              $this->db->bind(':age_at_first_drug_use', $data['age_at_first_drug_use']);
              $this->db->bind(':date_of_last_drug_use', $data['date_of_last_drug_use']);
              $this->db->bind(':length_of_drug_use', $data['length_of_drug_use']);
              $this->db->bind(':frequency_of_drug_use', $data['frequency_of_drug_use']);
              $this->db->bind(':means_to_support_drug_habbit', $data['means_to_support_drug_habbit']);
              $this->db->bind(':area_where_drugs_are_being_abused', $data['area_where_drugs_are_being_abused']);
              $this->db->bind(':daily_expense_on_drugs', $data['daily_expense_on_drugs']);
              $this->db->bind(':source_of_drugs', $data['source_of_drugs']);
              $this->db->bind(':place_of_drug_source', $data['place_of_drug_source']);
              $this->db->bind(':primary_reason_for_using_drugs', $data['primary_reason_for_using_drugs']);
              $this->db->bind(':drug_used_for_the_last_12_months', $data['drug_used_for_the_last_12_months']);
              $this->db->bind(':date_of_drug_dependency_evaluation', $data['date_of_drug_dependency_evaluation']);
              $this->db->bind(':name_of_physician_doh', $data['name_of_physician_doh']);
              $this->db->bind(':findings_recommendations', $data['findings_recommendations']);
              $this->db->bind(':facility_type', $data['facility_type']);
              $this->db->bind(':intervention', $data['intervention']);
              $this->db->bind(':risk_level_assist', $data['risk_level_assist']);
              $this->db->bind(':date_of_screening_assist', $data['date_of_screening_assist']);
              $this->db->bind(':name_of_social_worker', $data['name_of_social_worker']);
              $this->db->bind(':referred_to_result_of_screening', $data['referred_to_result_of_screening']);
              $this->db->bind(':assessment_result', $data['assessment_result']);
              $this->db->bind(':re_dde_date', $data['re_dde_date']);
              $this->db->bind(':name_of_physician_dde', $data['name_of_physician_dde']);
              $this->db->bind(':findings_recommendations_dde', $data['findings_recommendations_dde']);
              $this->db->bind(':start_date', $data['start_date']);
              $this->db->bind(':end_date', $data['end_date']);
              $this->db->bind(':provided_by', $data['provided_by']);
              $this->db->bind(':complete_flag', $data['complete_flag']);
              $this->db->bind(':intervention_provided_recommendation', $data['intervention_provided_recommendation']);
              $this->db->bind(':remarks', $data['remarks']);
              $this->db->bind(':others_current_status', $data['others_current_status']);
              $this->db->bind(':enrolled_in_sustainability', $data['enrolled_in_sustainability']);
              $this->db->bind(':applied_in_plea_bargaining', $data['applied_in_plea_bargaining']);
              $this->db->bind(':plea_bargaining_remarks', $data['plea_bargaining_remarks']);

              if($this->db->execute()){
                     return true;
              }else{
                     return false;
              }
       }

       public function updateProfile($data){
              $this->db->query('UPDATE profiles SET  
              -- image = :image,
              control_no = :control_no, 
              type_of_admission = :type_of_admission, 
              last_name = :last_name, 
              first_name = :first_name, 
              middle_name = :middle_name, 
              extension_name = :extension_name, 
              sex = :sex, 
              aka = :aka, 
              date_of_birth = :date_of_birth, 
              age = :age, 
              place_of_birth = :place_of_birth, 
              house_no = :house_no, 
              street = :street, 
              district = :district, 
              barangay = :barangay, 
              civil_status = :civil_status, 
              nationality = :nationality, 
              religion = :religion, 
              advocacy_partner = :advocacy_partner, 
              highest_educational_attainment = :highest_educational_attainment, 
              no_of_years_in_school = :no_of_years_in_school, 
              date_of_last_attendance_at_school = :date_of_last_attendance_at_school, 
              occupation_prior_to_surrender = :occupation_prior_to_surrender, 
              number_of_siblings = :number_of_siblings, 
              ordinal_position = :ordinal_position, 
              living_arrangement = :living_arrangement, 
              estimated_monthly_inc = :estimated_monthly_inc, 
              name_of_father = :name_of_father, 
              occupation_of_father = :occupation_of_father, 
              name_of_mother = :name_of_mother, 
              occupation_of_mother = :occupation_of_mother, 
              name_of_spouse = :name_of_spouse, 
              occupation_of_spouse = :occupation_of_spouse, 
              address_of_spouse = :address_of_spouse, 
              age_at_first_drug_use = :age_at_first_drug_use, 
              date_of_last_drug_use = :date_of_last_drug_use, 
              length_of_drug_use = :length_of_drug_use, 
              frequency_of_drug_use = :frequency_of_drug_use, 
              means_to_support_drug_habbit = :means_to_support_drug_habbit, 
              area_where_drugs_are_being_abused = :area_where_drugs_are_being_abused, 
              daily_expense_on_drugs = :daily_expense_on_drugs, 
              source_of_drugs = :source_of_drugs, 
              place_of_drug_source = :place_of_drug_source, 
              primary_reason_for_using_drugs = :primary_reason_for_using_drugs, 
              drug_used_for_the_last_12_months = :drug_used_for_the_last_12_months, 
              date_of_drug_dependency_evaluation = :date_of_drug_dependency_evaluation, 
              name_of_physician_doh = :name_of_physician_doh, 
              findings_recommendations = :findings_recommendations, 
              facility_type = :facility_type, 
              intervention = :intervention, 
              risk_level_assist = :risk_level_assist, 
              date_of_screening_assist = :date_of_screening_assist, 
              name_of_social_worker = :name_of_social_worker, 
              referred_to_result_of_screening = :referred_to_result_of_screening, 
              assessment_result = :assessment_result, 
              re_dde_date = :re_dde_date, 
              name_of_physician_dde = :name_of_physician_dde, 
              findings_recommendations_dde = :findings_recommendations_dde, 
              start_date = :start_date, 
              end_date = :end_date, 
              provided_by = :provided_by, 
              complete_flag = :complete_flag, 
              intervention_provided_recommendation = :intervention_provided_recommendation, 
              remarks = :remarks, 
              others_current_status = :others_current_status, 
              enrolled_in_sustainability = :enrolled_in_sustainability, 
              applied_in_plea_bargaining = :applied_in_plea_bargaining, 
              plea_bargaining_remarks = :plea_bargaining_remarks  WHERE id = :id');
              

              // $this->db->bind(':image', $data['image']); 
              $this->db->bind(':id', $data['id']);
              $this->db->bind(':control_no', $data['control_no']);
              $this->db->bind(':type_of_admission', $data['type_of_admission']);
              $this->db->bind(':last_name', $data['last_name']);
              $this->db->bind(':first_name', $data['first_name']);
              $this->db->bind(':middle_name', $data['middle_name']);
              $this->db->bind(':extension_name', $data['extension_name']);
              $this->db->bind(':sex', $data['sex']);
              $this->db->bind(':aka', $data['aka']);
              $this->db->bind(':date_of_birth', $data['date_of_birth']);
              $this->db->bind(':age', $data['age']);
              $this->db->bind(':place_of_birth', $data['place_of_birth']);
              $this->db->bind(':house_no', $data['house_no']);
              $this->db->bind(':street', $data['street']);
              $this->db->bind(':district', $data['district']);
              $this->db->bind(':barangay', $data['barangay']);
              $this->db->bind(':civil_status', $data['civil_status']);
              $this->db->bind(':nationality', $data['nationality']);
              $this->db->bind(':religion', $data['religion']);
              $this->db->bind(':advocacy_partner', $data['advocacy_partner']);
              $this->db->bind(':highest_educational_attainment', $data['highest_educational_attainment']);
              $this->db->bind(':no_of_years_in_school', $data['no_of_years_in_school']);
              $this->db->bind(':date_of_last_attendance_at_school', $data['date_of_last_attendance_at_school']);
              $this->db->bind(':occupation_prior_to_surrender', $data['occupation_prior_to_surrender']);
              $this->db->bind(':number_of_siblings', $data['number_of_siblings']);
              $this->db->bind(':ordinal_position', $data['ordinal_position']);
              $this->db->bind(':living_arrangement', $data['living_arrangement']);
              $this->db->bind(':estimated_monthly_inc', $data['estimated_monthly_inc']);
              $this->db->bind(':name_of_father', $data['name_of_father']);
              $this->db->bind(':occupation_of_father', $data['occupation_of_father']);
              $this->db->bind(':name_of_mother', $data['name_of_mother']);
              $this->db->bind(':occupation_of_mother', $data['occupation_of_mother']);
              $this->db->bind(':name_of_spouse', $data['name_of_spouse']);
              $this->db->bind(':occupation_of_spouse', $data['occupation_of_spouse']);
              $this->db->bind(':address_of_spouse', $data['address_of_spouse']);
              $this->db->bind(':age_at_first_drug_use', $data['age_at_first_drug_use']);
              $this->db->bind(':date_of_last_drug_use', $data['date_of_last_drug_use']);
              $this->db->bind(':length_of_drug_use', $data['length_of_drug_use']);
              $this->db->bind(':frequency_of_drug_use', $data['frequency_of_drug_use']);
              $this->db->bind(':means_to_support_drug_habbit', $data['means_to_support_drug_habbit']);
              $this->db->bind(':area_where_drugs_are_being_abused', $data['area_where_drugs_are_being_abused']);
              $this->db->bind(':daily_expense_on_drugs', $data['daily_expense_on_drugs']);
              $this->db->bind(':source_of_drugs', $data['source_of_drugs']);
              $this->db->bind(':place_of_drug_source', $data['place_of_drug_source']);
              $this->db->bind(':primary_reason_for_using_drugs', $data['primary_reason_for_using_drugs']);
              $this->db->bind(':drug_used_for_the_last_12_months', $data['drug_used_for_the_last_12_months']);
              $this->db->bind(':date_of_drug_dependency_evaluation', $data['date_of_drug_dependency_evaluation']);
              $this->db->bind(':name_of_physician_doh', $data['name_of_physician_doh']);
              $this->db->bind(':findings_recommendations', $data['findings_recommendations']);
              $this->db->bind(':facility_type', $data['facility_type']);
              $this->db->bind(':intervention', $data['intervention']);
              $this->db->bind(':risk_level_assist', $data['risk_level_assist']);
              $this->db->bind(':date_of_screening_assist', $data['date_of_screening_assist']);
              $this->db->bind(':name_of_social_worker', $data['name_of_social_worker']);
              $this->db->bind(':referred_to_result_of_screening', $data['referred_to_result_of_screening']);
              $this->db->bind(':assessment_result', $data['assessment_result']);
              $this->db->bind(':re_dde_date', $data['re_dde_date']);
              $this->db->bind(':name_of_physician_dde', $data['name_of_physician_dde']);
              $this->db->bind(':findings_recommendations_dde', $data['findings_recommendations_dde']);
              $this->db->bind(':start_date', $data['start_date']);
              $this->db->bind(':end_date', $data['end_date']);
              $this->db->bind(':provided_by', $data['provided_by']);
              $this->db->bind(':complete_flag', $data['complete_flag']);
              $this->db->bind(':intervention_provided_recommendation', $data['intervention_provided_recommendation']);
              $this->db->bind(':remarks', $data['remarks']);
              $this->db->bind(':others_current_status', $data['others_current_status']);
              $this->db->bind(':enrolled_in_sustainability', $data['enrolled_in_sustainability']);
              $this->db->bind(':applied_in_plea_bargaining', $data['applied_in_plea_bargaining']);
              $this->db->bind(':plea_bargaining_remarks', $data['plea_bargaining_remarks']);

              if($this->db->execute()){
                     return true;
              }else{
                     return false;
              }
       }

       public function delete($id){
              $this->db->query('DELETE FROM profiles WHERE id = :id');
              $this->db->bind(':id', $id);

              if($this->db->execute()){
                     return true;
              }else{
                     return false;
              }
       }

       public function searchByCtrlNo($item){
                     $this->db->query('SELECT *,
                     profiles.id as profileId,
                     users.id as userId,
                     profiles.created_at as profileCreated,
                     users.created_at as userCreated
                     FROM profiles
                     INNER JOIN users
                     ON profiles.user_id = users.id
                     WHERE control_no = :control_no
                     ');

                     $this->db->bind(':control_no', $item);
                     $row = $this->db->single();
                     if($row){
                            return $row;
                     }else{
                            return false;
                     }
       }

       public function searchByLastName($lastname){
              $this->db->query('SELECT *,
                     profiles.id as profileId,
                     users.id as userId,
                     profiles.created_at as profileCreated,
                     users.created_at as userCreated
                     FROM profiles
                     INNER JOIN users
                     ON profiles.user_id = users.id
                     WHERE last_name = :last_name
                     ');

                     $this->db->bind(':last_name', $lastname);
                     $results = $this->db->resultSet();
                     if($results){
                            return $results;
                     }else{
                            return false;
                     }
       }

       public function existingProfile($data){
              $this->db->query('SELECT * FROM profiles WHERE last_name = :last_name AND first_name = :first_name AND middle_name = :middle_name');
              $this->db->bind(':last_name', $data['last_name']);
              $this->db->bind(':first_name', $data['first_name']);
              $this->db->bind(':middle_name', $data['middle_name']);

              $row = $this->db->single();
              $result = $this->db->resultSet();
              $matchCount = $this->db->rowCount();

              if($this->db->rowCount() > 0){
                     return $row;
              }else{
                     return false;
              }
       }

       public function getProfileById($id){
              $this->db->query('SELECT * FROM profiles WHERE id = :id');
              $this->db->bind(':id', $id);

              $row = $this->db->single();

              return $row;
       }

       public function generateCtrlNo(){    
                     $emp = $_SESSION['employee_id'];
                     $n = date("Y.m.d");
                     $date = $n[5].$n[6].$n[8].$n[9].$n[2].$n[3];
                     
                     $genId = md5(uniqid(rand(), true));
                     $genId = $emp . substr($genId, 0, 6). $date;
                     return $genId;
       }

}

?>