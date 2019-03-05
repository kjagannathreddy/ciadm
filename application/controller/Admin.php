<?php
class Admin extends CI_controller
{
  public function __construct()
  {
    parent::__construct();

  }
  public function index()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/index');
  }
  public function data_table()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/data-table');
  }
  public function popup()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/popup');
  }
  public function popup1()
  {
    $this->load->view('admin/add_popup1');
  }
  public function profile()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/profile');
  }
  public function form()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/form');
  }
  public function sweetalert()
  {
    $this->load->view('admin/header');
    $this->load->view('admin/footer');
    $this->load->view('admin/sweetalert');
  }
  public function login(){
    //$this->load->view('admin/header');
    //$this->load->view('admin/footer');
    $this->load->view('admin/login2');
  }
}
