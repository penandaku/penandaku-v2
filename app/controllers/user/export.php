<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Simple Apps for Save and Access Bookmark online.
* @version      Beta
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Simple Apps for Save and Access Bookmark online.
* @link         https://penandaku.com
*/
class Export extends CI_Controller {

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
                'title'       => 'Export Bookmark &rsaquo; Penandaku.com',
                'export'      => TRUE
      );
      $this->load->view('part/header', $data);
      $this->load->view('part/sidebar');
      $this->load->view('layout/users/export/data_export');
      $this->load->view('part/footer');
    }else{
      show_404();
      return FALSE;
    }
  }
}
