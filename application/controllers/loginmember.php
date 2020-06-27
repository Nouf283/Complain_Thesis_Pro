<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Loginmember extends CI_Controller 
{


	public function index()
	{

		if($this->session->userdata('member_login')=='yes'){
			redirect(base_url().'index.php/member','refresh');
		}

		$this->load->view('login_member');

	}

	function do_login($param1='')
	{

		$login_data=$this->db->get_where('member',array('member_email'=>$this->input->post('email'),'member_password'=>$this->input->post('password')));
		if($login_data->num_rows()>0){
			foreach ($login_data->result_array() as $row){
				$this->session->set_userdata('login','yes');
				$this->session->set_userdata('member_login','yes');
				$this->session->set_userdata('memberid',$row['member_id']);
				$this->session->set_userdata('membername',$row['member_name']);





				$this->session->set_userdata('memareaid',$row['memarea_id']); //created to use on model get_complain_member()
				



			}

			redirect(base_url().'index.php/member','refresh');
		}

		else{
			echo "<script>

            alert('Login failed');

			</script>"; 
			 redirect(base_url().'index.php/loginmember','refresh');
		
		}

	}

	function logout(){
		$this->session->unset_userdata('member_login');
		$this->session->unset_userdata('memberid');
		$this->session->unset_userdata('membername');

     $this->session->sess_destroy();
     redirect(base_url().'index.php/loginmember','refresh');


	}

}

?>