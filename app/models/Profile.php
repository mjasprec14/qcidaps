<?php

class Profile{
       private $db;

       public function __construct(){
              $this->db = new Database;
       }

       public function getProfile(){
              $this->db->query('SELECT *,
              profiles.id as profileId,
              users.id as userId
              FROM profiles
              INNER JOIN users
              ON profiles.user_id = users.id
              ORDER BY profiles.created_at DESC
              ');

              $results = $this->db->resultSet();

              return $results;
       }

       public function createProfile($data){
              $this->db->query('INSERT INTO profiles (image, user_id, control_no, type_of_admission, last_name, first_name, middle_name, extension_name, sex, aka, date_of_birth, age, place_of_birth, house_no, street, district, barangay, civil_status, nationality, religion, advocacy_partner, highest_educational_attainment, no_of_years_in_school, date_of_last_attendance_at_school, occupation_prior_to_surrender) VALUES(:image, :user_id, :control_no, :type_of_admission, :last_name, :first_name, :middle_name, :extension_name, :sex, :aka, :date_of_birth, :age, :place_of_birth, :house_no, :street, :district, :barangay, :civil_status, :nationality, :religion, :advocacy_partner, :highest_educational_attainment, :no_of_years_in_school, :date_of_last_attendance_at_school, :occupation_prior_to_surrender)');

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

              if($this->db->execute()){
                     return true;
              }else{
                     return false;
              }
       }

       public function updateProfile($data){
              $this->db->query('UPDATE profiles SET control_no = :control_no, type_of_admission = :type_of_admission, last_name = :last_name, first_name = :first_name, middle_name = :middle_name, extension_name = :extension_name WHERE id = :id');

              $this->db->bind(':id', $data['id']);
              $this->db->bind(':control_no', $data['control_no']);
              $this->db->bind(':type_of_admission', $data['type_of_admission']);
              $this->db->bind(':last_name', $data['last_name']);
              $this->db->bind(':first_name', $data['first_name']);
              $this->db->bind(':middle_name', $data['middle_name']);
              $this->db->bind(':extension_name', $data['extension_name']);

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
                     users.id as userId
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
                     users.id as userId
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