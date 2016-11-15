<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/

class Users extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }

  /* fungsi login */
	function login($table,$field1,$field2)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->where($field2);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi auth */

  /* fungsi restrict halaman */
  function users_id()
  {
    return $this->session->userdata('users_id');
  }

  function username()
  {
    return $this->session->userdata('username');
  }

  function password()
  {
    return $this->session->userdata('password');
  }
	/* end fungsi restrict */

  /* fungsi logout */
	function logout()
	{
		$this->session->sess_destroy();
	}
	/* end fungsi logout */

}
