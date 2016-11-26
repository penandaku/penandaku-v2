<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* @package      Penandaku - Layanan Penyedia Bookmark Online.
* @version      Beta V.0.2
* @author       Fika Ridaul Maulayya
* @copyright    Copyright © 2016 Penandaku, Inc - Layanan Penyedia Bookmark Online.
* @link         https://penandaku.com
*/
class Ajax extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

  function checking_username()
  {
      $id = $_POST["id"];
      $username = $_POST["username"];
      $query = $this->db->query("SELECT id_user FROM tbl_users WHERE username='$username' AND id_user!='$id'");
      if(($query->num_rows())>0)
      {
         echo "false";
      }else{
         echo "true";
      }
  }

  function cheking_email()
  {
      $id = $_POST["id"];
      $email = $_POST["email"];
      $query = $this->db->query("SELECT id_user FROM tbl_users WHERE email_user='$email' AND id_user!='$id'");
      if(($query->num_rows())>0)
      {
         echo "false";
      }else{
         echo "true";
      }
  }

}
