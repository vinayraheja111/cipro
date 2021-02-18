<?php
class Register extends CI_Controller
{
	
	public function index()
	{
		$this->form_validation->set_rules('uname','Username','trim|required|is_unique[user.uname]');
		$this->form_validation->set_rules('fname','First name','trim|required|alpha');
		$this->form_validation->set_rules('lname','last Name','trim|required');
		$this->form_validation->set_rules('em','Email','trim|required|valid_email|is_unique[user.email]');
		$this->form_validation->set_rules('pass','Password','trim|required|min_length[5]');
		$this->form_validation->set_rules('city','city','trim|required|alpha');
		$this->form_validation->set_rules('zip','Zip','trim|required|numeric|min_length[6]');
		$this->form_validation->set_rules('mobile','Mobile','trim|required|numeric|min_length[10]|is_unique[user.mobile]');

		

		if($this->form_validation->run())
		{
			$uname = $this->input->post('uname');
			$fname = $this->input->post('fname');
			$lname = $this->input->post('lname');
			$email = $this->input->post('em');
			$pass = $this->input->post('pass');
			$city = $this->input->post('city');
			$zip = $this->input->post('zip');
			$mobile = $this->input->post('mobile');

			$this->load->model('User_Signup_Model');
			$this->User_Signup_Model->register($uname,$fname,$lname,$email,$pass,$city,$zip,$mobile);
			echo '<script>alert("Data Inserted");</script>';
		}
		else
		{
			// echo "<script>alert('error');</script>";
		}
		$this->load->view('Register');
	}

}



?>