<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Admin extends CI_Controller 
{

public function index() //add this code on function index() of welcome.php
{
		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}


//here, prob is not an array. prob is a dataset which is given a key e.g. no_problem_cat

$prob["no_problem_cat"]=$this->model->count_num("problem"); //here, $this->model->count_num("problem") will return the total number of row of problem table i.e. it will return a single value. So if there are 20 data on prblem table, then $prob["no_problem_cat"]=20
$prob["no_admin"]=$this->model->count_num("admin"); 
$prob["no_user"]=$this->model->count_num("user"); 
$prob["no_division"]=$this->model->count_num("division"); 
$prob["no_district"]=$this->model->count_num("district"); 
$prob["no_thana"]=$this->model->count_num("thana"); 
$prob["no_dept"]=$this->model->count_num("dept"); 
$prob["no_depthead"]=$this->model->count_num("depthead"); 
$prob["no_deptemp"]=$this->model->count_num("deptemp"); 
$prob["no_complain"]=$this->model->count_num("complain"); 
$prob["no_progress"]=$this->model->count_num("progress"); 
$prob["no_memarea"]=$this->model->count_num("memarea"); 
$prob["no_member"]=$this->model->count_num("member"); 


$this->load->view('index.php',$prob); //?????????

}

public function login()
{
	//$this->load->view('header');
	$this->load->view('login');
	//$this->load->view('footer');
}


public function add_admin()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	//$this->load->view('header');
	$this->load->view('add_admin');
	//$this->load->view('footer');
}

public function show_admin()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}

	$data["admins"]=$this->model->get_admin();
//echo	json_encode($data);
	$this->load->view('show_admin',$data);

}

public function show_admin_profile() //controller
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}

	$data["admins"]=$this->model->get_admin_profile(); //model
//echo	json_encode($data);
	$this->load->view('show_admin',$data); //view

}

public function admin_delete($param1="")
{
	$this->model->admin_delete($param1);
	redirect(base_url().'index.php/admin/show_admin','refresh');
}

public function admin_edit($param1="")
{
	$data["admins"]=$this->model->admin_edit($param1);
	$this->load->view('admin_edit',$data);

}

public function add_user()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	$this->load->view('add_user');

}

public function show_user()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	
		$data["users"]=$this->model->get_user();
//echo	json_encode($data);
	$this->load->view('show_user',$data);

}

//user
public function user_delete($param1="")
{
	$this->model->user_delete($param1);
	redirect(base_url().'index.php/admin/show_user','refresh');
}

public function user_edit($param1="")
{
	$data["users"]=$this->model->user_edit($param1);
	$this->load->view('user_edit',$data);

}

public function add_division()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
	$this->load->view('add_division');

}

public function show_division()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
	$data['divisions']=$this->model->get_division();
	//echo json_encode($data);
	$this->load->view('show_division',$data);



}


//division
public function division_delete($param1="")
{
	$this->model->division_delete($param1);
	redirect(base_url().'index.php/admin/show_division','refresh');
}


public function division_edit($param1="")
{
	$data["divisions"]=$this->model->division_edit($param1);
	$this->load->view('division_edit',$data);

}

public function add_district()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	$this->load->view('add_district');

}


public function get_districts_api($param1) //code to fetch only those districts of the selected division
{
	echo json_encode($this->model->get_district_api($param1));
}

public function get_thanas_api($param2) //code to fetch only those thana of the selected district
{
	echo json_encode($this->model->get_thana_api($param2));
}

// public function sample_show() //code to fetch only those districts of the selected division
// {
// 	$this->load->view('sample');
// }


public function show_district()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
		$data['districts']=$this->model->get_district();
	//echo json_encode($data);
	$this->load->view('show_district',$data);

}

//district
public function district_delete($param1="")
{
	$this->model->district_delete($param1);
	redirect(base_url().'index.php/admin/show_district','refresh');
}

public function district_edit($param1="")
{
	$data["districts"]=$this->model->district_edit($param1);
	$this->load->view('district_edit',$data);

}


public function add_thana()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	$this->load->view('add_thana');

}

public function show_thana()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		$data['thanas']=$this->model->get_thana();
	//echo json_encode($data);
	$this->load->view('show_thana',$data);

}


//thana
public function thana_delete($param1="")
{
	$this->model->thana_delete($param1);
	redirect(base_url().'index.php/admin/show_thana','refresh');
}

public function thana_edit($param1="")
{
	$data["thanas"]=$this->model->thana_edit($param1);
	$this->load->view('thana_edit',$data);

}


public function add_probcat()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	$data["dept"]=$this->model->get_deptcat();
	$this->load->view('add_probcat',$data);

}


public function show_probcat()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		$data['probcats']=$this->model->get_probcat();
	//echo json_encode($data);
	$this->load->view('show_probcat',$data);

}

public function probcat_delete($param1="")
{
	$this->model->probcat_delete($param1);
	redirect(base_url().'index.php/admin/show_probcat','refresh');
}

public function probcat_edit($param1="")
{
	$data["probcats"]=$this->model->probcat_edit($param1);
	$data['dept']=$this->model->get_deptcat();
	$this->load->view('probcat_edit',$data);

}

public function add_deptcat()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	$data["dept"]=$this->model->get_deptcat();
	$this->load->view('add_deptcat',$data);

}

public function show_deptcat()
{
	
		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}

	$data['deptcats']=$this->model->get_deptcat();
	//echo json_encode($data);
	$this->load->view('show_deptcat',$data);

}


public function deptcat_delete($param1="")
{
	$this->model->deptcat_delete($param1);
	redirect(base_url().'index.php/admin/show_deptcat','refresh');
}

public function deptcat_edit($param1="")
{
	$data["deptcats"]=$this->model->deptcat_edit($param1);
	$this->load->view('deptcat_edit',$data);

}


public function add_memarea()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		//$data["district"]=$this->model->get_district();
		//$data["thana"]=$this->model->get_thana();

	$this->load->view('add_memarea');


}

public function show_memarea()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		$data['memareas']=$this->model->get_memarea();
	//echo json_encode($data);
	$this->load->view('show_memarea',$data);

}

public function memarea_delete($param1="")
{
	$this->model->memarea_delete($param1);
	redirect(base_url().'index.php/admin/show_memarea','refresh');
}


public function memarea_edit($param1="")
{
	$data["memareas"]=$this->model->memarea_edit($param1);
	//$data['district']=$this->model->get_districts($param1);
	//$data['thana']=$this->model->get_thanas($param1);
	$this->load->view('memarea_edit',$data);

}

public function add_depthead()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
	$data["dept"]=$this->model->get_deptcat();
	$this->load->view('add_depthead',$data);

}

public function show_depthead()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
		$data['deptheads']=$this->model->get_depthead();
	//echo json_encode($data);
	$this->load->view('show_depthead',$data);

}

public function depthead_delete($param1="")
{
	$this->model->depthead_delete($param1);
	redirect(base_url().'index.php/admin/show_depthead','refresh');
}

public function depthead_edit($param1="")
{
	$data["deptheads"]=$this->model->depthead_edit($param1);
	$data['dept']=$this->model->get_deptcat();
	$this->load->view('depthead_edit',$data);

}

public function add_deptemp()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	$data["dept"]=$this->model->get_deptcat();
	$data["division"]=$this->model->get_division();
	$data["district"]=$this->model->get_district();
	$data["thana"]=$this->model->get_thana();

	$this->load->view('add_deptemp',$data);

}

public function show_deptemp()
{
	
		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}

	$data['deptemps']=$this->model->get_deptemp();
	
	$this->load->view('show_deptemp',$data);

}

public function deptemp_delete($param1="")
{
	$this->model->deptemp_delete($param1);
	redirect(base_url().'index.php/admin/show_deptemp','refresh');
}

public function deptemp_edit($param1="")
{
	$data["deptemps"]=$this->model->deptemp_edit($param1);
	$data['dept']=$this->model->get_deptcat(); //will pick it from session of dept head
	$data['division']=$this->model->get_division();
	$data['district']=$this->model->get_district();
	$data['thana']=$this->model->get_thana();
	$this->load->view('deptemp_edit',$data);

}

public function show_complain()
{

			if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
	
	$data['complains']=$this->model->get_complain();
	
	$this->load->view('show_complain',$data);

}

public function complain_delete($param1="")
{
	$this->model->complain_delete($param1);
	redirect(base_url().'index.php/admin/show_complain','refresh');
}

public function complain_edit($param1="")
{
	$data["complains"]=$this->model->complain_edit($param1);
	//$data['dept']=$this->model->get_deptcat(); //will pick it from session of dept head
	$data['dept']=$this->model->get_deptcat();
	$data['problem']=$this->model->get_probcat();
	$data['division']=$this->model->get_division();
	$data['district']=$this->model->get_district();
	$data['thana']=$this->model->get_thana();

	$data['memarea']=$this->model->get_memarea();
	
	$this->load->view('complain_edit',$data);

}

 public function add_member()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		$data["memarea"]=$this->model->get_memarea();

	$this->load->view('add_member',$data);

}


 public function show_member()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
	$data['members']=$this->model->get_member();
	
	$this->load->view('show_member',$data);

}

public function member_delete($param1="")
{
	$this->model->member_delete($param1);
	redirect(base_url().'index.php/admin/show_member','refresh');
}

public function member_edit($param1="")
{
	$data["members"]=$this->model->member_edit($param1); //here, data is a user defined name
	//$data['dept']=$this->model->get_deptcat(); //will pick it from session of dept head
	$data['memarea']=$this->model->get_memarea();
	$this->load->view('member_edit',$data); //$data is added as second parameter to hold the information of foreign key

}

public function show_progress()
{

		if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}	
	
		$data['progresses']=$this->model->get_progress();
	//echo json_encode($data);
	$this->load->view('show_progress',$data);

}

public function progress_delete($param1="")
{
	$this->model->progress_delete($param1);
	redirect(base_url().'index.php/admin/show_progress','refresh');
}


public function progress_edit($param1="")
{
	$data["progresses"]=$this->model->progress_edit($param1);
	//$data['complain']=$this->model->get_complain($param1);
	//$data['complain']=$this->model->get_complain($param1);
	$this->load->view('progress_edit',$data);

}

}

?>