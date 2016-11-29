<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Bookmark extends CI_Controller {

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

  }

  public function detail($url)
  {
    //cek uri ke 3 apakah kosong ?
    if($this->uri->segment(2) == "")
    {
      //redirect
      redirect('/');
    }else{
      //cek status users
      if($this->users->users_id())
      {
        if($this->uri->segment(2) !== $this->users->get_url($url)->slug_bookmark)
        {
          //redirect
          redirect('/');
        }else{
          //create data array
          $data = array (
                    'title'         => $judul = $this->users->get_url($url)->judul_bookmark . ' ' . ' &mdash; '. '('. $this->session->userdata('username') .')',
                    'descriptions'  => '',
                    'keywords'      => '',
                    'data_bookmark' => $this->users->get_url($url)
          );
          //parse view dengan array data
          $this->load->view('part/header',$data);
          $this->load->view('layout/users/bookmark-home/detail_bookmark');
          $this->load->view('part/footer');
        }
      }else{
        show_404();
        return FALSE;
      }
    }
  }
}
