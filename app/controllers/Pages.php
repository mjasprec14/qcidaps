<?php

class Pages extends Controller{
       public function __construct(){

       }

       public function index(){

              $data = [
                     'title' => 'QCIDAPS HOMEPAGE',
                     'description' => 'An application for QCIDAPS'
              ];

              $this->view('pages/index', $data);
       }

       public function create(){

              $data = [
                     'title' => 'Create new profile'
              ];

              $this->view('pages/create', $data);
       }

       public function search(){

              $data = [
                     'title' => 'Search a profile'
              ];

              $this->view('pages/search', $data);
       }

       public function createMod(){

              $data = [
                     'title' => 'Create a new moderator'
              ];

              $this->view('pages/createMod', $data);
       }
}

?>