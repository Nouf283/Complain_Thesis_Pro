<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Loginuser extends CI_Controller 
{


	public function index()
	{

		if($this->session->userdata('user_login')=='yes'){
			redirect(base_url().'index.php/user','refresh');
		}

		$this->load->view('login_user');

	}

	function do_login($param1='')
	{

		$login_data=$this->db->get_where('user',array('user_email'=>$this->input->post('email'),'user_password'=>$this->input->post('password')));
		if($login_data->num_rows()>0){
			foreach ($login_data->result_array() as $row){
				$this->session->set_userdata('login','yes');
				$this->session->set_userdata('user_login','yes');
				$this->session->set_userdata('userid',$row['user_id']);
				$this->session->set_userdata('username',$row['user_name']);


				$this->session->set_userdata('verificationstatus',$row['verification_status']);

			}

			if($row['verification_status']=="0"){ //if verification is not completed

				redirect(base_url().'index.php/user/verification_user','refresh');
			}

			else{ //if verification is already completed

			 	redirect(base_url().'index.php/user','refresh');
			 	
			}

			
		}

		else{
			echo "<script>

            alert('Login failed');

			</script>"; 
			 redirect(base_url().'index.php/loginuser','refresh');
		
		}

	}

	function logout(){
		//$this->session->unset_userdata('login_user');
		$this->session->unset_userdata('user_login');
		$this->session->unset_userdata('userid');
		$this->session->unset_userdata('username');

     $this->session->sess_destroy();
     redirect(base_url().'index.php/loginuser','refresh');


	}

}

?>