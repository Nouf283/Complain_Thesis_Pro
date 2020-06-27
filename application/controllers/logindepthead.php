<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Logindepthead extends CI_Controller 
{


	public function index()
	{

		if($this->session->userdata('depthead_login')=='yes'){
			redirect(base_url().'index.php/user','refresh');
		}

		$this->load->view('login_depthead');

	}

	function do_login($param1='')
	{

		$login_data=$this->db->get_where('depthead',array('depthead_email'=>$this->input->post('email'),'depthead_password'=>$this->input->post('password')));
		if($login_data->num_rows()>0){
			foreach ($login_data->result_array() as $row){
				$this->session->set_userdata('login','yes');
				$this->session->set_userdata('depthead_login','yes');
				
				$this->session->set_userdata('deptheadid',$row['depthead_id']);
				$this->session->set_userdata('deptheadname',$row['depthead_name']);

				$this->session->set_userdata('deptid',$row['dept_id']); ////created to use on model
				// $this->session->set_userdata('deptheadaddress',$row['depthead_address']);
				// $this->session->set_userdata('deptheademail',$row['depthead_email']);
				// $this->session->set_userdata('deptheadphone',$row['depthead_phone']);
				// $this->session->set_userdata('deptheadusername',$row['depthead_username']);
				// $this->session->set_userdata('deptheadpassword',$row['depthead_password']);


			}

			redirect(base_url().'index.php/depthead','refresh');
		}

		else{
			echo "<script>

            alert('Login failed');

			</script>"; 
			 redirect(base_url().'index.php/logindepthead','refresh');
		
		}

	}

	function logout(){
		//$this->session->unset_userdata('login_user');
		$this->session->unset_userdata('depthead_login');
		$this->session->unset_userdata('deptheadid');
		$this->session->unset_userdata('deptheadname');

     $this->session->sess_destroy();
     redirect(base_url().'index.php/logindepthead','refresh');


	}

}

?>