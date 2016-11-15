<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/
class Login extends CI_Controller {

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
    //jika memang session sudah terdaftar, alihkan ke dashboard
    if($this->users->users_id())
    {
      //alihkan dashboard
      redirect('/');

    }else{
      //check dengan form validation
      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
      $this->form_validation->set_message('required', '<div class="alert alert-danger" style="font-family:Roboto">
                                                          <i class="fa fa-exclamation-circle"></i> {field} harus diisi.
                                                       </div>');
      $this->form_validation->set_message('min_length', '<div class="alert alert-danger" style="font-family:Roboto">
                                                          <i class="fa fa-exclamation-circle"></i> {field} tidak boleh kurang dari {param} karakter.
                                                         </div>');
      //check status form validation
      if($this->form_validation->run() == TRUE){
      //get form data
      $username = $this->input->post('username', TRUE);
      $password = SHA1(MD5(MD5(SHA1($this->input->post('password', TRUE)))));
      //checking data via model
      $checking = $this->users->login('tbl_users', array('username' => $username), array('password' => $password));
      //status
      if($checking != FALSE){
          //loop data
          foreach($checking as $users){
            //check aktivasi email
            if($users->verifikasi_email == 0){
                $data = array(
                          'email'         => $users->email,
                          'title'         => 'Verifikasi Email - Penandaku.com',
                          'descriptions'  => '',
                          'keywords'      => ''
                );
                $this->load->view('layout/users/auth/verifikasi_email', $data);
            }else{
              $this->session->set_userdata(array(
                  'users_id'  => $users->id_user,
                  'username'  => $users->username,
                  'password'  => $users->password,
                  'nama_user' => $users->nama_user,
                  'foto_user' => $users->foto_user
              ));
              redirect('/');
            }
          }
        }else{
          //create data array
          $data = array(
                    'error' => '<div class="alert alert-danger" style="font-family:ubuntu">
                                    <i class="fa fa-exclamation-circle"></i> Username atau Password Anda salah.
                                  </div>',
                    'title'         => 'Login - Penandaku.com',
                    'descriptions'  => '',
                    'keywords'      => ''
          );
          $this->load->view('layout/users/auth/login', $data);
        }
      }else{
        //create data array
        $data = array (
                  'title'         => 'Login - Penandaku.com',
                  'descriptions'  => '',
                  'keywords'      => ''
        );
        $this->load->view('layout/users/auth/login', $data);
      }
    }
  }
}
