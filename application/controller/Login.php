<?php
class Login extends CI_controller{
  public function __construct(){
    parent::__construct();
  }
  public function index(){
    $this->load->view('admin/login2');
  }
}
 ?>
