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
	function checking_username($table,$field1)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($field1);
		$this->db->limit(1);
		$query = $this->db->get();
		if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->result();
		}
	}
	/* end fungsi auth */

  /* fungsi login */
  function checking_password($table,$field1,$field2)
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

  /* fungsi login */
	function checking_all($table,$field1,$field2)
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

  function get_url($url)
  {
    $query = $this->db->query("SELECT * FROM tbl_bookmark as a JOIN tbl_users as b ON a.user_id = b.id_user JOIN tbl_label as c ON c.id_label = b.id_user WHERE a.slug_bookmark = '$url'");

    if($query->num_rows() > 0)
    {
      return $query->row();
    }else
    {
      return NULL;
    }
  }

  /* fungsi get url
  function get_url($url)
  {
    $this->db->select('*');
    $this->db->from('tbl_bookmark');
    $this->db->from('tbl_users');
    //$this->db->from('tbl_label');
    $this->db->join('tbl_users', 'id_user = user_id');
    $this->db->join('tbl_label', 'label_id = id_user');
    $this->db->where('slug_bookmark', $url);
    $query = $this->db->get();
    if ($query->num_rows() == 0) {
			return FALSE;
		} else {
			return $query->row();
		}
  }
  /* end fungsi get url */

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
