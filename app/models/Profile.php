<?php

class Profile{
       private $db;

       public function __construct(){
              $this->db = new Database;
       }

       public function createProfile($data){
              $this->db->query('INSERT INTO profiles (control_no, type_of_admission, last_name, first_name, middle_name, extension_name) VALUES(:control_no, :type_of_admission, :last_name, :first_name, :middle_name, :extension_name)');

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
}

?>