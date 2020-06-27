<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Process extends CI_Controller 
{

public function index()
{
//	echo "hello world";
}


public function add_admin()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_admin();
  redirect(base_url().'index.php/admin/show_admin','refresh');
}

public function up_admin($param1="") //update admin
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_admin($param1);
  redirect(base_url().'index.php/admin/show_admin','refresh');
}

public function add_user()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_user();
  redirect(base_url().'index.php/admin/show_user','refresh');
}

public function up_user($param1="") //update user
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_user($param1);
  redirect(base_url().'index.php/admin/show_user','refresh');
}

public function add_division()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_division();
  redirect(base_url().'index.php/admin/show_division','refresh');
}

public function up_division($param1="") //update division
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_division($param1);
  redirect(base_url().'index.php/admin/show_division','refresh');
}


public function add_district()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_district();
  redirect(base_url().'index.php/admin/show_district','refresh');
}


public function up_district($param1="") //update district
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_district($param1);
  redirect(base_url().'index.php/admin/show_district','refresh');
}

public function add_thana()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_thana();
  redirect(base_url().'index.php/admin/show_thana','refresh');
}

public function up_thana($param1="") //update thana
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_thana($param1);
  redirect(base_url().'index.php/admin/show_thana','refresh');
}

public function add_probcat()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_probcat();
  redirect(base_url().'index.php/admin/show_probcat','refresh');
}

public function up_probcat($param1="") //update probcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_probcat($param1);
  redirect(base_url().'index.php/admin/show_probcat','refresh');
}

public function add_deptcat()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_deptcat();
  redirect(base_url().'index.php/admin/show_deptcat','refresh');
}

public function up_deptcat($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_deptcat($param1);
  redirect(base_url().'index.php/admin/show_deptcat','refresh');
}

public function add_memarea()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_memarea();
  redirect(base_url().'index.php/admin/show_memarea','refresh');
}

public function up_memarea($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_memarea($param1);
  redirect(base_url().'index.php/admin/show_memarea','refresh');
}

public function add_depthead()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_depthead();
  redirect(base_url().'index.php/admin/show_depthead','refresh');
}

public function up_depthead($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_depthead($param1);
  redirect(base_url().'index.php/admin/show_depthead','refresh');
}

public function add_deptemp()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_deptemp();
  redirect(base_url().'index.php/admin/show_deptemp','refresh');
}

public function up_deptemp($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_deptemp($param1);
  redirect(base_url().'index.php/admin/show_deptemp','refresh');
}


public function add_member()
{
	if($this->session->userdata('member_login')!='yes'){
			redirect(base_url().'index.php/loginmember','refresh');
		}

  $this->model->add_member();
  redirect(base_url().'index.php/admin/show_member','refresh');
}


public function up_member($param1="") //update deptcat
{
	if($this->session->userdata('member_login')!='yes'){
			redirect(base_url().'index.php/loginmember','refresh');
		}
		
  $this->model->up_member($param1);
  redirect(base_url().'index.php/admin/show_member','refresh');
}

public function add_complain() //only user
{
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
  $this->model->add_complain();
  redirect(base_url().'index.php/user/show_complain','refresh'); //show_complain is the controller name (not the page name)
}

public function up_complain($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_complain($param1);
  redirect(base_url().'index.php/admin/show_complain','refresh');
}




public function add_progress()
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->add_progress();
  redirect(base_url().'index.php/admin/show_progress','refresh');
}

public function up_progress($param1="") //update deptcat
{
	if($this->session->userdata('admin_login')!='yes'){
			redirect(base_url().'index.php/admin/login','refresh');
		}
  $this->model->up_progress($param1);
  redirect(base_url().'index.php/admin/show_progress','refresh');
}





}