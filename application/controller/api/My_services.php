<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';
class My_services extends REST_Controller
{
  public function get_all_blog_get()
  {
    $this->load->model('admin_data');
    $results=$this->admin_data->multiple_data('blogs');
    foreach($results as $key => $result)
    {
      $results[$key]['image']=base_url()."uploads/".$result['image'];
    }
    //$result = ['blogs'=>$results];
    $this->response($results, REST_Controller::HTTP_OK);
  }
  public function get_single_blog_get()
  {
    $id=$this->uri->segment(4);
    $this->load->model('admin_data');
    $results=$this->admin_data->single_data('blogs',$id);
    $this->response($results, REST_Controller::HTTP_OK);
  }
}
