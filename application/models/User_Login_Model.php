<?php
class User_Login_Model extends CI_Model
{
	public function ulogin($username,$pass)
	{
    $qry = $this->db->where(['uname'=> $username, 'password' => $pass])
     ->get('user');

     return $qry->num_rows();
	}
}


?>