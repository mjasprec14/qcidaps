<?php

class Pages extends Controller{
       public function __construct(){

       }

       public function index(){

              $data = [
                     'title' => 'QCIDAPS HOMEPAGE'
              ];

              $this->view('pages/index', $data);
       }

       public function create(){
              $this->view('pages/create');
       }

       public function update(){
              $this->view('pages/update');
       }

       public function delete(){
              $this->view('pages/delete');
       }

       public function createMod(){
              $this->view('pages/createMod');
       }
}

?>