<?php
    class Test extends CI_Controller{
        public function index(){
        //    echo "This is default function";
          $this->load->view('test.php');
          $this->load->helper('array_helper');
        }
        public function hello(){
            echo "This is hello function";
        }
    }

?>