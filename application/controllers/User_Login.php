<?php
class User_Login extends CI_Controller
{
	public function login()
	{
		$uname = $this->input->post('username');
		$pass = $this->input->post('password');

		if(!$uname =='' && !$pass =='')
		{
			$this->load->model('User_Login_Model');
		    $login = $this->User_Login_Model->ulogin($uname,$pass);
		    if($login)
		{
			echo 'success';
			$this->session->set_userdata('uname',$uname);
		}
		else
		{
			echo 'fail';
		}

		}
		else
		{
			echo "Blank";
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('uname');
        $this->session->sess_destroy();
        return redirect('Home');
	}
}



?>