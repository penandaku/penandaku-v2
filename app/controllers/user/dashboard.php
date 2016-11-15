<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Dashboard extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load library
      $this->load->library('form_validation');
      //load model
      $this->load->model('users');
  }

  public function index()
  {
    if($this->users->users_id())
    {
      $data = array (
                'title'       => 'Dashboard &rsaquo; Penandaku.com',
                'dashboard'   => TRUE
      );
      $this->load->view('part/header', $data);
      $this->load->view('part/sidebar');
      $this->load->view('layout/users/dashboard');
      $this->load->view('part/footer');
    }else{
      show_404();
      return FALSE;
    }
  }

  public function logout()
  {
    if($this->users->users_id())
    {
      $this->users->logout();
      redirect('/');
    }else{
      show_404();
      return FALSE;
    }
  }

  //fungsi hapus account !
  public function delete()
  {
    if($this->users->users_id())
    {
      //set form validation
      $this->form_validation->set_rules('username', 'Username', 'trim|required');
      //set messege form validation
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto"> <i class="fa fa-exclamation-circle"></i> {field} harus diisi. </div>');
      if($this->form_validation->run() == TRUE)
      {
        $username = $this->input->post("username");
        if($username == $this->session->userdata("username")){
          //checking
          $checking = $this->member->checking_data('tbl_member', array('username' => $this->input->post("username", TRUE)));
          if($checking != FALSE)
          {
            //delete user account
            $this->users->destroy_account($username);
            //destroy session
            $this->users->logout();
            redirect('/');
          }else{
            //set session flashdata
            $this->session->set_flashdata('notif', '<div class="alert alert-danger" style="font-family:Roboto"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-exclamation-circle"></i> Username tidak terdaftar.</div>');
            redirect('user/dashboard/');
          }
       }else{
         //set session flashdata
         $this->session->set_flashdata('notif', '<div class="alert alert-danger" style="font-family:Roboto"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-exclamation-circle"></i> Username tidak terdaftar.</div>');
         redirect('user/dashboard/');
       }
      }else{
        //set session flashdata
        $this->session->set_flashdata('notif', '<div class="alert alert-danger" style="font-family:Roboto"><button type="button" class="close" data-dismiss="alert">&times;</button><i class="fa fa-exclamation-circle"></i> Username belum diisi.</div>');
        redirect('user/dashboard/');
      }
    }else{
      show_404();
      return FALSE;
    }
  }
}
