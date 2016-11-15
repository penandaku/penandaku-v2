<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/
class Home extends CI_Controller {

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
			//create data array
      $data = array (
                'title'         => $this->session->userdata('username'). ' ' . '('. $this->session->userdata('nama_user') .')',
                'descriptions'  => '',
                'keywords'      => '',
                'recaptcha_html' => $this->recaptcha->render()
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/home/dashboard');
      $this->load->view('part/footer');
		}else{
			//create data array
      $data = array (
                'title'         => 'Penandaku.com - Layanan Penyedia Bookmark Online.',
                'descriptions'  => '',
                'keywords'      => '',
                'recaptcha_html' => $this->recaptcha->render()
      );
      //parse view dengan array data
      $this->load->view('part/header',$data);
      $this->load->view('layout/home/homepage');
      $this->load->view('part/footer');
		}
	}
}
