<?php
class User_Signup_Model extends CI_Model
{
	public function register($fname,$uname,$lname,$email,$pass,$city,$zip,$mobile)
	{
		$data = array(
             'uname' => $uname,
             'fname' => $fname,
             'lname' => $lname,
             'email' => $email,
             'password' => $pass,
             'city' => $city,
             'zip' =>  $zip, 
             'mobile' => $mobile,
             'ip' => $this->input->ip_address()

		);

		$qry = $this->db->insert('user',$data);

			if($qry)
			{
      $this->session->set_flashdata('success', 'Registration successfull');
		redirect('Register');
	}
	else{
		$this->session->set_flashdata('error', 'Somthing went worng. Error!!');
		redirect('Register');
	}
	}
}



?>