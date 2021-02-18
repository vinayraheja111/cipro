<?php
class Login_Model extends CI_Model
{
	public function alogin($username)
	{
    $qry = $this->db->where(['username'=> $username])
     ->get('admin');
      //print_r($qry);
      //echo $this->db->last_query();
     return $qry->result();
	}
}


?>