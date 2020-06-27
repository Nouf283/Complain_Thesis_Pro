<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Login extends CI_Controller 
{


	public function index()
	{

		if($this->session->userdata('admin_login')=='yes'){
			redirect(base_url().'index.php/admin','refresh');
		}

		$this->load->view('login');

	}

	function do_login($param1='')
	{

		$login_data=$this->db->get_where('admin',array('admin_email'=>$this->input->post('email'),'admin_password'=>$this->input->post('password')));
		if($login_data->num_rows()>0){
			foreach ($login_data->result_array() as $row){
				$this->session->set_userdata('login','yes');
				$this->session->set_userdata('admin_login','yes');
				$this->session->set_userdata('id',$row['admin_id']);
				$this->session->set_userdata('name',$row['admin_name']);
			}

			redirect(base_url().'index.php/admin','refresh');
		}

		else{
			echo "<script>

            alert('Login failed');

			</script>"; 
			 redirect(base_url().'index.php/admin/login','refresh');
		
		}

	}

	function logout(){
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('admin_login');
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');

     $this->session->sess_destroy();
     redirect(base_url().'index.php/admin/login','refresh');


	}

}

?>