<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/
class Pages extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function about()
	{
    //create data array
    $data = array (
              'title'         => 'About - Penandaku.com',
              'descriptions'  => '',
              'keywords'      => ''
    );
    //parse view dengan array data
    $this->load->view('part/header',$data);
    $this->load->view('layout/home/pages/about');
    $this->load->view('part/footer');
  }
}
