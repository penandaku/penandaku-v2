<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/
class Join extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      //load library
      $this->load->library(array('form_validation', 'recaptcha'));
      //load model
      $this->load->model('users');
  }

  public function index()
  {
    if($this->users->users_id())
    {
      //redirect dashboard homepage
      redirect('/');
    }else{
      //set fomr validation

      //create data array
      $data = array (
                'title'         => 'Join - penandaku.com',
                'descriptions'  => '',
                'keywords'      => '',
                'error'         => '',
                'recaptcha_html' => $this->recaptcha->render()
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/users/join/form_join');
      $this->load->view('part/footer');
    }
  }

  public function verivy()
  {
    //
  }

  public function source_home()
  {
    //set form validation
    $this->form_validation->set_rules('username', 'Username', 'required');
    $this->form_validation->set_rules('email', 'Alamat email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');
    $this->form_validation->set_rules('g-recaptcha-response', '<b>Captcha</b>', 'callback_getResponseCaptcha');
    //set message form validation
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto">
                                                        <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                     </div>');
    $this->form_validation->set_message('callback_getResponseCaptcha',
                                                      '<div class="alert alert-danger" style="font-family:Roboto">
                                                          i class="fa fa-exclamation-circle"></i> {field} {g-recaptcha-response} harus diisi.
                                                      div>');
    if($this->form_validation->run() == TRUE)
    {
      $username = $this->input->post('username');
      $email    = $this->input->post('email');
      //checking username
      $checking = $this->users->checking_all('tbl_users', array('username' => $username), array('email_user' => $email));
      if($checking)
      {
        //error
        echo 'njir error';
      }else{
        $data = array(
          'username'    => $this->input->post('username'),
          'password'    => $this->input->post('password'),
          'email_user'  => $this->input->post('email'),
          'joined'      => date("Y-m-d H:i:s"),
          'verifikasi'  => 0
        );
        //insert ke database
        $this->db->insert('tbl_users', $data);
        redirect('/');
      }
    }else{
      //create data array
      $data = array (
                'title'         => 'Penandaku.com - Layanan Penyedia Bookmark Online.',
                'descriptions'  => '',
                'keywords'      => '',
                'error'         => '',
                'recaptcha_html' => $this->recaptcha->render()
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/home/homepage');
      $this->load->view('part/footer');
    }

  }

}
