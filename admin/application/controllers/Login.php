<?php
class Login extends CI_Controller
{
 public function index()
 {
        $this->form_validation->set_rules('uname','Username','trim|required');
		$this->form_validation->set_rules('pass','Password','trim|required');
		
       if($this->form_validation->run())
       {
  	    $uname = $this->input->post('uname');
  	    $pass  = $this->input->post('pass');

  	//echo $uname."<br>";
  	//echo $pass;
  	//die(); 
  	        $this->load->model('Login_Model');
			$login = $this->Login_Model->alogin($uname);

			//print_r($login);
			//die();

			if($login)
			{
				if(md5($pass) == $login[0]->password)
				{
					$this->session->set_userdata('aname',$login[0]->name);
					return redirect('Dashbord');
				}
				else
				{

				$this->session->set_flashdata('status','incorrect Password');
					return redirect('Login');
				}
			}
				else
			{
				$this->session->set_flashdata('status','Invalid Username');
                return redirect('Login');
			}

        }
       $this->load->view('Login');
      }
    }
?>