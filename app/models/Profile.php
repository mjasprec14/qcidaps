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
              $this->db->query('INSERT INTO profiles (user_id, control_no, type_of_admission, last_name, first_name, middle_name, extension_name) VALUES(:user_id, :control_no, :type_of_admission, :last_name, :first_name, :middle_name, :extension_name)');

              $this->db->bind(':user_id', $data['user_id']);
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
             //$this->db->query('SELECT * FROM profiles WHERE control_no = :control_no');
             
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
                     return $row;
                 
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
                     return $results;
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