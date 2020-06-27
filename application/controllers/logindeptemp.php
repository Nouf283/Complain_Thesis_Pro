<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Logindeptemp extends CI_Controller 
{


	public function index()
	{

		if($this->session->userdata('deptemplogin')=='yes'){
			redirect(base_url().'index.php/user','refresh');
		}

		$this->load->view('login_deptemp');

	}

	function do_login($param1='')
	{

		$login_data=$this->db->get_where('deptemp',array('deptemp_email'=>$this->input->post('email'),'deptemp_password'=>$this->input->post('password')));
		if($login_data->num_rows()>0){
			foreach ($login_data->result_array() as $row){
				$this->session->set_userdata('login','yes');
				$this->session->set_userdata('deptemp_login','yes');
				$this->session->set_userdata('deptempid',$row['deptemp_id']);
				$this->session->set_userdata('deptempname',$row['deptemp_name']);


				$this->session->set_userdata('deptid',$row['dept_id']); //created to use on model


				$this->session->set_userdata('divisionid',$row['division_id']); //created to use on model get_complain_deptemp()
				$this->session->set_userdata('districtid',$row['district_id']); //created to use on model get_complain_deptemp()
				$this->session->set_userdata('thanaid',$row['thana_id']); //created to use on model get_complain_deptemp()

			}

			redirect(base_url().'index.php/deptemp','refresh');
		}

		else{
			echo "<script>

            alert('Login failed');

			</script>"; 
			 redirect(base_url().'index.php/logindeptemp','refresh');
		
		}

	}

	function logout(){
		//$this->session->unset_userdata('login_user');
		$this->session->unset_userdata('deptemp_login');
		$this->session->unset_userdata('deptempid');
		$this->session->unset_userdata('deptempname');

     $this->session->sess_destroy();
     redirect(base_url().'index.php/logindeptemp','refresh');


	}

}

?>