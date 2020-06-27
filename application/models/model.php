<?php

if(!defined('BASEPATH'))

	exit('No direct script access allowed');

class Model extends CI_Model{




public function add_admin()
{
$data['admin_name']=$this->input->post('admin_name');
$data['admin_password']=$this->input->post('admin_password');
$data['admin_email']=$this->input->post('admin_email');
$data['admin_phone']=$this->input->post('admin_phone');

$this->db->insert('admin',$data);

}

public function up_admin($id)
{
$data['admin_name']=$this->input->post('admin_name'); 
$data['admin_password']=$this->input->post('admin_password'); 
$data['admin_email']=$this->input->post('admin_email'); 
$data['admin_phone']=$this->input->post('admin_phone'); 
$this->db->where('admin_id',$id); //division_id is primary key
$this->db->update('admin',$data); //division is table name
}

public function admin_edit($id)
{
	$this->db->select('*');
	$this->db->from('admin');
	$this->db->where('admin_id',$id);
	return $this->db->get()->result();
}

public function get_admin()
{
	$this->db->select('*');
	$this->db->from('admin');
	return $this->db->get()->result();
}

public function get_admin_profile()
{

	$admin_id=$this->session->userdata('id'); //code to fetch info only for logged-in admin

	$this->db->select('*');
	$this->db->from('admin');
	
	$this->db->where('admin_id',$admin_id); //code to fetch info only for logged-in admin
	
	return $this->db->get()->result();
}

public function admin_delete($id)
{
	$this->db->where('admin_id',$id);
	$this->db->delete('admin');
}

public function add_user()
{

$data['user_name']=$this->input->post('user_name');
$data['user_password']=$this->input->post('user_password');
$data['user_email']=$this->input->post('user_email');
$data['user_phone']=$this->input->post('user_phone');
$data['verification_status']="0";	

$this->db->insert('user',$data);

$id=$this->db->insert_id(); //$id is last user_id of user table

//data insert for verification table
$data1['verification_code']=$id.rand(1000,9999);
$data1['user_id']=$id;
$this->db->insert('verification',$data1);
return 1;
}


public function up_user($id)
{
$data['user_name']=$this->input->post('user_name'); 
$data['user_password']=$this->input->post('user_password'); 
$data['user_email']=$this->input->post('user_email'); 
$data['user_phone']=$this->input->post('user_phone'); 
$this->db->where('user_id',$id);
$this->db->update('user',$data); //division is table name
}

public function user_edit($id)
{
	$this->db->select('*');
	$this->db->from('user');
	$this->db->where('user_id',$id);
	return $this->db->get()->result();
}


public function get_user()
{
	$this->db->select('*');
	$this->db->from('user');
	return $this->db->get()->result();
}

public function get_user_user()
{

	$user_id=$this->session->userdata('userid'); //code to fetch info only for logged-in user

	$this->db->select('*');
	$this->db->from('user');

    $this->db->where('user_id',$user_id); //code to fetch info only for logged-in user

	return $this->db->get()->result();
}

//user delete
public function user_delete($id)
{
	$this->db->where('user_id',$id);
	$this->db->delete('user');
}

public function add_division()
{
$data['division_name']=$this->input->post('division_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->insert('division',$data); //division is table name

}

public function up_division($id)
{
$data['division_name']=$this->input->post('division_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->where('division_id',$id); //division_id is primary key
$this->db->update('division',$data); //division is table name
}

public function division_edit($id)
{
	$this->db->select('*');
	$this->db->from('division');
	$this->db->where('division_id',$id);
	return $this->db->get()->result();
}


public function get_division()
{
	$this->db->select('*');
	$this->db->from('division');
	$this->db->join('admin','admin.admin_id=division.admin_id');
	return $this->db->get()->result();
}

public function get_divisions($param1) //another model to solve update dropdown menu problem
{
	$this->db->select('*');
	$this->db->from('division');
	$this->db->join('admin','admin.admin_id=division.admin_id');
	$this->db->where ('division_id!=',$param1);
	return $this->db->get()->result();
}

//divsion delete
public function division_delete($id)
{
	$this->db->where('division_id',$id);
	$this->db->delete('division');
}

public function add_district()
{
$data['district_name']=$this->input->post('district_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->insert('district',$data); //division is table name

}

public function up_district($id)
{
$data['district_name']=$this->input->post('district_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->where('district_id',$id);
$this->db->update('district',$data); //division is table name
}

public function district_edit($id)
{
	$this->db->select('*');
	$this->db->from('district');
	$this->db->where('district_id',$id);
	return $this->db->get()->result();
}


public function get_district()
{
	$this->db->select('*');
	$this->db->from('district');
	$this->db->join('admin','admin.admin_id=district.admin_id');
	return $this->db->get()->result();
}


public function get_districts($param1) //another model to solve update dropdown menu problem
{
	$this->db->select('*');
	$this->db->from('district');
	$this->db->join('admin','admin.admin_id=district.admin_id');
	$this->db->where ('district_id!=',$param1);
	return $this->db->get()->result();

}

public function get_district_api($division_id) //code to fetch only those districts of the selected division
{
	$this->db->select('*')->from('district');
	$this->db->where('division_id',$division_id);
	return $this->db->get()->result();
}

public function get_thana_api($district_id) //code to fetch only those thana of the selected district
{
	$this->db->select('*')->from('thana');
	$this->db->where('district_id',$district_id);
	return $this->db->get()->result();
}


public function district_delete($id)
{
	$this->db->where('district_id',$id);
	$this->db->delete('district');
}


public function add_thana()
{
$data['thana_name']=$this->input->post('thana_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->insert('thana',$data); //division is table name

}

public function up_thana($id)
{
$data['thana_name']=$this->input->post('thana_name'); //$data['division_name'] here, division_name is attribute name
$data['admin_id']=$this->session->userdata('id');
$this->db->where('thana_id',$id);
$this->db->update('thana',$data); //division is table name
}



public function thana_edit($id)
{
	$this->db->select('*');
	$this->db->from('thana');
	$this->db->where('thana_id',$id);
	return $this->db->get()->result();
}

public function get_thana()
{
	$this->db->select('*');
	$this->db->from('thana');
	$this->db->join('admin','admin.admin_id=thana.admin_id');
	return $this->db->get()->result();
}

public function get_thanas($param1) //another model to solve update dropdown menu problem
{
	$this->db->select('*');
	$this->db->from('thana');
	$this->db->join('admin','admin.admin_id=thana.admin_id');
	$this->db->where ('thana_id!=',$param1);
	return $this->db->get()->result();
}

public function thana_delete($id)
{
	$this->db->where('thana_id',$id);
	$this->db->delete('thana');
}


public function add_probcat()
{
$data['problem_name']=$this->input->post('problem_name'); //$data['division_name'] here, division_name is attribute name
$data['dept_id']=$this->input->post('dept_id'); //fk??????????????
$data['admin_id']=$this->session->userdata('id');
$this->db->insert('problem',$data); //division is table name

}


public function up_probcat($id)
{
$data['problem_name']=$this->input->post('problem_name'); //$data['division_name'] here, division_name is attribute name
$data['dept_id']=$this->input->post('dept_id');
$data['admin_id']=$this->session->userdata('id');
$this->db->where('problem_id',$id);
$this->db->update('problem',$data); //division is table name
}

public function probcat_edit($id)
{
	$this->db->select('*');
	$this->db->from('problem');
	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->where('problem_id',$id);
	return $this->db->get()->result();
}


public function get_probcat()
{
	$this->db->select('*');
	$this->db->from('problem');
	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->join('admin','admin.admin_id=problem.admin_id');
	return $this->db->get()->result();
}

public function probcat_delete($id)
{
	$this->db->where('problem_id',$id);
	$this->db->delete('problem');
}

public function count_num($table) //to calculate info for statistics on admin panel dashboard
{


$this->db->select('count('.$table.'_id) as number_of_id' ); //I give the name of every primary key of my table like tablename_id. e.g. if table name is division then I give the name of primary key like division_id. Similarly, if table name is district then I give the name of primary key like district_id. so generally if the table name is stored in $table variable then we can say the primary key will be $table._id. Here, dot (.) is used to concatenate the strings like we use plus (+) in java.
$this->db->from($table);
return $this->db->get()->result();


}


public function count_total_num_of_complain() //to calculate info for statistics on admin panel dashboard
{

$this->db->select('count(complain_id) as num_of_complain');
$this->db->from('complain');
return $this->db->get()->result();

}


public function count_num_of_complain_for_each_thana($complain_num) //to calculate info for statistics on admin panel dashboard
{ //here, we will store the total number of complaints on $complain_num variable
  //this model is called from depthead controller's process_graph_thana() function [see that for details]
	
	
	$this->db->select('thana_name as name,count(complain_id)*100/'.$complain_num.' as y');
	//here, count(complain_id) won't give the total number of complaints. Rather, it will give us thana wise number of complaints.
	//Because, we write $this->db->group_by('thana.thana_id') later. So it will give us the number of complaints for each thana.
	//Here, $complain_num is the total number of complaints
	//We know, Percentage= [particular data/total data]*100
	//So, [count(complain_id)/$complain_num]*100
	//Or, [count(complain_id)*100]/$complain_num
	$this->db->from('complain');
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	$this->db->group_by('thana.thana_id');
	return $this->db->get()->result_array();

}


public function count_num_of_complain_for_each_district($complain_num) //to calculate info for statistics on admin panel dashboard
{

	
	$this->db->select('district_name as name,count(complain_id)*100/'.$complain_num.' as y');
	$this->db->from('complain');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->group_by('district.district_id');
	return $this->db->get()->result_array();

}

public function count_num_of_complain_for_each_problem($complain_num) //to calculate info for statistics on admin panel dashboard
{

	
	$this->db->select('problem_name as name,count(complain_id)*100/'.$complain_num.' as y');
	$this->db->from('complain');
	$this->db->join('problem','problem.problem_id=complain.problem_id');
	$this->db->group_by('problem.problem_id');
	return $this->db->get()->result_array();

}

public function count_num_of_complain_for_each_division($complain_num) //to calculate info for statistics on admin panel dashboard
{

	
	$this->db->select('division_name as name,count(complain_id)*100/'.$complain_num.' as y');
	$this->db->from('complain');
	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->group_by('division.division_id');
	return $this->db->get()->result_array();

}

public function count_num_of_complain_for_each_memarea($complain_num) //to calculate info for statistics on admin panel dashboard
{

	
	$this->db->select('memarea_name as name,count(complain_id)*100/'.$complain_num.' as y');
	$this->db->from('complain');
	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	$this->db->group_by('memarea.memarea_id');
	return $this->db->get()->result_array();

}

public function count_total_num_of_progress() //to calculate info for statistics on admin panel dashboard
{


$this->db->select('count(progress_id) as num_of_progress');
$this->db->from('progress');
return $this->db->get()->result();

}

public function count_num_of_progress_status_for_each_type_of_progress($progress_num) //to calculate info for statistics on admin panel dashboard
{

	//here, progress_num is the total number of progresses
	//count(progress_id) is the number of progress status for each type of progress
	//Because later we write, $this->db->group_by('progress.progress_status') so it will show progress status wise number of progresses
	$this->db->select('progress_status as name,count(progress_id)*100/'.$progress_num.' as y');
	$this->db->from('progress');
	$this->db->group_by('progress.progress_status');
	return $this->db->get()->result_array();

}


//count vote for each complaint


public function count_num_of_vote_for_each_complain() //to calculate info for statistics on admin panel dashboard
{ 
	
	$this->db->select('count(voting_id)');
	$this->db->from('voting');
	$this->db->join('complain','complain.complain_id=voting.complain_id');
	$this->db->group_by('complain.complain_id');
	return $this->db->get()->result_array();

}


public function add_deptcat()
{
$data['dept_name']=$this->input->post('dept_name');


$data['admin_id']=$this->session->userdata('id');
$this->db->insert('dept',$data); //dept is table name

}


public function up_deptcat($id)
{
$data['dept_name']=$this->input->post('dept_name');	


$data['admin_id']=$this->session->userdata('id');
$this->db->where('dept_id',$id); //dept_id is primary key
$this->db->update('dept',$data); //dept is table name
}

public function deptcat_edit($id)
{
	$this->db->select('*');
	$this->db->from('dept');
	//$this->db->join('problem','problem.problem_id=dept.problem_id');
	$this->db->where('dept_id',$id);
	return $this->db->get()->result();
}

public function get_deptcat()
{


	$this->db->select('*');
	$this->db->from('dept');
	$this->db->join('admin','admin.admin_id=dept.admin_id');
	//$this->db->join('problem','problem.problem_id=dept.problem_id');

	return $this->db->get()->result();
}

public function get_deptcat_depthead()
{


	$this->db->select('*');
	$this->db->from('dept');
	$this->db->join('admin','admin.admin_id=dept.admin_id');
	//$this->db->join('problem','problem.problem_id=dept.problem_id');

	return $this->db->get()->result();
}

public function deptcat_delete($id)
{
	$this->db->where('dept_id',$id);
	$this->db->delete('dept');
}


public function add_memarea()
{
$data['memarea_name']=$this->input->post('memarea_name');
//$data['district_id']=$this->input->post('district_id');
//$data['thana_id']=$this->input->post('thana_id');
$data['admin_id']=$this->session->userdata('id');
$this->db->insert('memarea',$data); //memarea is table name

}


public function up_memarea($id)
{
$data['memarea_name']=$this->input->post('memarea_name');	
//$data['district_id']=$this->input->post('district_id');
//$data['thana_id']=$this->input->post('thana_id');
$data['admin_id']=$this->session->userdata('id');
$this->db->where('memarea_id',$id); //memarea_id is primary key
$this->db->update('memarea',$data); //memarea is table name
}

public function memarea_edit($id)
{
	$this->db->select('*');
	$this->db->from('memarea');
	//$this->db->join('district','district.district_id=memarea.district_id');
	//$this->db->join('thana','thana.thana_id=memarea.thana_id');
	$this->db->where('memarea_id',$id);
	return $this->db->get()->result();
}


public function get_memarea()
{


	$this->db->select('*');
	$this->db->from('memarea');
	$this->db->join('admin','admin.admin_id=memarea.admin_id');
	//$this->db->join('district','district.district_id=memarea.district_id');
	//$this->db->join('thana','thana.thana_id=memarea.thana_id');

	return $this->db->get()->result();
}

public function memarea_delete($id)
{
	$this->db->where('memarea_id',$id);
	$this->db->delete('memarea');
}

public function add_depthead()
{
$data['depthead_name']=$this->input->post('depthead_name');

$data['dept_id']=$this->input->post('dept_id');

$data['depthead_address']=$this->input->post('depthead_address');
$data['depthead_email']=$this->input->post('depthead_email');
$data['depthead_phone']=$this->input->post('depthead_phone');
$data['depthead_username']=$this->input->post('depthead_username');
$data['depthead_password']=$this->input->post('depthead_password');
$this->db->insert('depthead',$data); //dept is table name

}


public function up_depthead($id)
{


$data['depthead_name']=$this->input->post('depthead_name');

$data['dept_id']=$this->input->post('dept_id');

$data['depthead_address']=$this->input->post('depthead_address');
$data['depthead_email']=$this->input->post('depthead_email');
$data['depthead_phone']=$this->input->post('depthead_phone');
$data['depthead_username']=$this->input->post('depthead_username');
$data['depthead_password']=$this->input->post('depthead_password');

$this->db->where('depthead_id',$id); //dept_id is primary key
$this->db->update('depthead',$data); //dept is table name


}


public function depthead_edit($id)
{
	$this->db->select('*');
	$this->db->from('depthead');
	$this->db->join('dept','dept.dept_id=depthead.dept_id');
	$this->db->where('depthead_id',$id);
	return $this->db->get()->result();
}

public function get_depthead()
{

	$this->db->select('*');
	$this->db->from('depthead');
	$this->db->join('dept','dept.dept_id=depthead.dept_id');

	return $this->db->get()->result();

}

public function get_depthead_depthead()
{

	$depthead_id=$this->session->userdata('deptheadid'); //line 1: code to fetch only logged in dept head info


	$this->db->select('*');
	$this->db->from('depthead');

	$this->db->join('dept','dept.dept_id=depthead.dept_id'); //join to fetch dept name


	$this->db->where('depthead.depthead_id',$depthead_id); //line 2: code to fetch only logged in dept head info


	return $this->db->get()->result();

}


public function depthead_delete($id)
{
	$this->db->where('depthead_id',$id);
	$this->db->delete('depthead');
}

public function add_deptemp()
{
$data['deptemp_name']=$this->input->post('deptemp_name');
$data['deptemp_address']=$this->input->post('deptemp_address');
$data['deptemp_email']=$this->input->post('deptemp_email');
$data['deptemp_phone']=$this->input->post('deptemp_phone');
$data['deptemp_des']=$this->input->post('deptemp_des');

$data['dept_id']=$this->input->post('dept_id');

$data['division_id']=$this->input->post('division_id');
$data['district_id']=$this->input->post('district_id');
$data['thana_id']=$this->input->post('thana_id');
$data['deptemp_username']=$this->input->post('deptemp_username');
$data['deptemp_password']=$this->input->post('deptemp_password');
$this->db->insert('deptemp',$data); //memarea is table name

}


public function up_deptemp($id)
{
$data['deptemp_name']=$this->input->post('deptemp_name');
$data['deptemp_address']=$this->input->post('deptemp_address');
$data['deptemp_email']=$this->input->post('deptemp_email');
$data['deptemp_phone']=$this->input->post('deptemp_phone');
$data['deptemp_des']=$this->input->post('deptemp_des');

$data['dept_id']=$this->input->post('dept_id');

$data['division_id']=$this->input->post('division_id');	
$data['district_id']=$this->input->post('district_id');
$data['thana_id']=$this->input->post('thana_id');
$data['deptemp_username']=$this->input->post('deptemp_username');
$data['deptemp_password']=$this->input->post('deptemp_password');
$this->db->where('deptemp_id',$id); //deptemp_id is primary key
$this->db->update('deptemp',$data); //deptemp is table name
}


public function deptemp_edit($id)
{
	$this->db->select('*');
	$this->db->from('deptemp');

	$this->db->join('dept','dept.dept_id=deptemp.dept_id');

	$this->db->join('division','division.division_id=deptemp.division_id');
	$this->db->join('district','district.district_id=deptemp.district_id');
	$this->db->join('thana','thana.thana_id=deptemp.thana_id');
	$this->db->where('deptemp_id',$id);
	return $this->db->get()->result();
}


public function get_deptemp()
{


    $this->db->select('*');
	$this->db->from('deptemp');
	
	$this->db->join('dept','dept.dept_id=deptemp.dept_id');

	$this->db->join('division','division.division_id=deptemp.division_id');
	$this->db->join('district','district.district_id=deptemp.district_id');
	$this->db->join('thana','thana.thana_id=deptemp.thana_id');

	return $this->db->get()->result();
}

public function get_deptemp_deptemp()
{


    $deptemp_id=$this->session->userdata('deptempid'); //line 1: code to fetch only logged in dept head info

    $this->db->select('*');
	$this->db->from('deptemp');

	$this->db->join('dept','dept.dept_id=deptemp.dept_id');
	
	$this->db->join('division','division.division_id=deptemp.division_id');
	$this->db->join('district','district.district_id=deptemp.district_id');
	$this->db->join('thana','thana.thana_id=deptemp.thana_id');

    $this->db->where('deptemp.deptemp_id',$deptemp_id); //line 2: code to fetch only logged in dept head info

	return $this->db->get()->result();
}

public function deptemp_delete($id)
{
	$this->db->where('deptemp_id',$id);
	$this->db->delete('deptemp');
}

public function add_member()
{
$data['member_name']=$this->input->post('member_name');
$data['memarea_id']=$this->input->post('memarea_id');
$data['member_email']=$this->input->post('member_email');
$data['member_phone']=$this->input->post('member_phone');
$data['member_username']=$this->input->post('member_username');
$data['member_password']=$this->input->post('member_password');
$this->db->insert('member',$data); //memarea is table name
}



public function up_member($id)
{
$data['member_name']=$this->input->post('member_name');
$data['memarea_id']=$this->input->post('memarea_id');
$data['member_email']=$this->input->post('member_email');
$data['member_phone']=$this->input->post('member_phone');
$data['member_username']=$this->input->post('member_username');
$data['member_password']=$this->input->post('member_password');
$this->db->where('member_id',$id); //deptemp_id is primary key
$this->db->update('member',$data); //deptemp is table name
}


public function member_edit($id)
{
	$this->db->select('*');
	$this->db->from('member');
	$this->db->join('memarea','memarea.memarea_id=member.memarea_id');
	$this->db->where('member_id',$id);
	return $this->db->get()->result();
}



public function get_member()
{


    $this->db->select('*');
	$this->db->from('member');
	$this->db->join('memarea','memarea.memarea_id=member.memarea_id');
	return $this->db->get()->result();
}

public function get_member_member()
{


    $member_id=$this->session->userdata('memberid'); //line 1: code to fetch only logged in member info

    $this->db->select('*');
	$this->db->from('member');

	$this->db->join('memarea','memarea.memarea_id=member.memarea_id');

    $this->db->where('member.member_id',$member_id); //line 2: code to fetch only logged in member info

	return $this->db->get()->result();
}


public function member_delete($id)
{
	$this->db->where('member_id',$id);
	$this->db->delete('member');
}


public function add_complain() //only user can use this 
{

$data['problem_id']=$this->input->post('problem_id');
//$data['dept_id']=$this->input->post('dept_id');
$data['division_id']=$this->input->post('division_id');
$data['district_id']=$this->input->post('district_id');
$data['thana_id']=$this->input->post('thana_id');

$data['memarea_id']=$this->input->post('memarea_id');

$data['location']=$this->input->post('location');
$data['complain_des']=$this->input->post('complain_des');


$data['complain_video']=$this->input->post('complain_video');
$data['complain_status']=$this->input->post('complain_status');

date_default_timezone_set('Asia/Dhaka');
$date = date('Y-m-d');
$data['current_date']=$date;

$data['user_id']=$this->session->userdata('userid');

$this->db->insert('complain',$data); //complain is table name

//generate complain number for progress table
date_default_timezone_set('Asia/Dhaka');
$currentdate = date("YmdHis"); //e.g. YmdHis is Year month day Hour minute second  // e.g. for 1st May, 2017 at 09.30:50 PM , YmdHis is 20170501093050 

$id=$this->db->insert_id(); //$id is last complain_id of complain table
move_uploaded_file($_FILES["complain_image"]["tmp_name"], 'evidence/evidence_'.$id.'.jpg');
$complainnum=$currentdate.$id;

//data insert for progress table
$data1['complain_id']=$id; //here, we used $data1 because $data is already used for compplain table data insert
$data1['complaint_num']=$complainnum;
$data1['progress_status']="Complaint is received";
$data1['user_id']=$this->session->userdata('userid');
$this->db->insert('progress',$data1);

}

public function up_complain($id) //user need not edit dept_id from compalin table. they can only view dept_id 
{
$data['problem_id']=$this->input->post('problem_id');
//$data['dept_id']=$this->input->post('dept_id');
$data['division_id']=$this->input->post('division_id');
$data['district_id']=$this->input->post('district_id');
$data['thana_id']=$this->input->post('thana_id');
$data['memarea_id']=$this->input->post('memarea_id');
$data['location']=$this->input->post('location');
$data['complain_des']=$this->input->post('complain_des');
$data['complain_video']=$this->input->post('complain_video');
$data['complain_status']=$this->input->post('complain_status');
$this->db->where('complain_id',$id); //deptemp_id is primary key
$this->db->update('complain',$data); //deptemp is table name
}



public function complain_edit($id) //user need not edit dept_id from compalin table. they can only view dept_id 
{
	$this->db->select('*');
	$this->db->from('complain');
	//$this->db->join('dept','dept.dept_id=complain.dept_id');
	$this->db->join('problem','problem.problem_id=complain.problem_id');
	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	$this->db->where('complain_id',$id);
	return $this->db->get()->result();
}



public function get_complain()
{


    $this->db->select('*');
	$this->db->from('complain');
	
  

	$this->db->join('problem','problem.problem_id=complain.problem_id');

	$this->db->join('dept','dept.dept_id=problem.dept_id');
	
	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	 $this->db->join('user','user.user_id=complain.user_id');

	return $this->db->get()->result();
}


public function get_complain_user()
{
    $user_id=$this->session->userdata('userid');

    $this->db->select('*');
	$this->db->from('complain');

	$this->db->join('problem','problem.problem_id=complain.problem_id');

	$this->db->join('dept','dept.dept_id=problem.dept_id');
	
	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->join('thana','thana.thana_id=complain.thana_id');

	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');

	// $this->db->join('user','user.user_id=complain.user_id');
	
	$this->db->where('complain.user_id',$user_id);

	return $this->db->get()->result();
}


public function get_similar_complain()
{
    $user_id=$this->session->userdata('userid');

    $this->db->select('*');
	$this->db->from('complain');

	$this->db->join('problem','problem.problem_id=complain.problem_id');

	$this->db->join('dept','dept.dept_id=problem.dept_id');
	
	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->join('thana','thana.thana_id=complain.thana_id');

	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	// $this->db->join('user','user.user_id=complain.user_id');
	
	$this->db->where('complain_status','Public'); //because we don't want to private complaints
	$this->db->where('complain.user_id!=',$user_id); //because we don't want to show here logged in user's public complaints again

	return $this->db->get()->result();

}




public function get_user_vote($complainid, $userid) //insert data on voting table
{
    //$user_id=$this->session->userdata('userid');

$data['complain_id']=$complainid;

$data['user_id']=$userid;

$this->db->insert('voting',$data); //voting is table name

}

public function check_user_vote($complainid, $userid){ //count how many votes

$this->db->select("count('voting_id') as number_of_vote");
$this->db->from("voting");
$this->db->where("complain_id",$complainid);
$this->db->where("user_id",$userid);
return $this->db->get()->result();

//$this->db->query("select count(voting_id) as num_voting from voting where complain_id=".$complainid." and user_id=".$userid);
//return $this->db->get()->result();
}


public function get_complain_depthead()
{
    $deptid=$this->session->userdata('deptid');  //Line:1: show those dept which matches with the dept of logged in dept head //deptid is created on logindepthead
    
    $this->db->select('*');
	$this->db->from('complain');

	$this->db->join('problem','problem.problem_id=complain.problem_id');


	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept head

	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->join('district','district.district_id=complain.district_id');
	$this->db->join('thana','thana.thana_id=complain.thana_id');

	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');

	 $this->db->join('user','user.user_id=complain.user_id');

	return $this->db->get()->result();
}


public function get_complain_deptemp()
{


    $deptid=$this->session->userdata('deptid');  //Line:1: show those dept which matches with the dept of logged in dept emp
    

    $divisionid=$this->session->userdata('divisionid'); //Line:1: show those division which matches with the division of logged in dept emp
    $districtid=$this->session->userdata('districtid'); //Line:1: show those district which matches with the district of logged in dept emp
    $thanaid=$this->session->userdata('thanaid'); //Line:1: show those thana which matches with the thana of logged in dept emp


    $this->db->select('*');
	$this->db->from('complain');

	$this->db->join('problem','problem.problem_id=complain.problem_id');


	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept emp

	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->where('division.division_id',$divisionid); //Line:2 : show those division which matches with the division of logged in dept emp
	$this->db->join('district','district.district_id=complain.district_id'); 
	$this->db->where('district.district_id',$districtid); //Line:2 : show those district which matches with the district of logged in dept emp
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	$this->db->where('thana.thana_id',$thanaid); //Line:2 : show those thana which matches with the thana of logged in dept emp

	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');

    $this->db->join('user','user.user_id=complain.user_id');

	return $this->db->get()->result();

}

public function get_complain_member()
{


    $memberid=$this->session->userdata('memberid');  //Line:1: show those dept which matches with the dept of logged in dept emp
    

    //$divisionid=$this->session->userdata('divisionid'); //Line:1: show those division which matches with the division of logged in dept emp
    //$districtid=$this->session->userdata('districtid'); //Line:1: show those district which matches with the district of logged in dept emp
    $memareaid=$this->session->userdata('memareaid'); //Line:1: show those thana which matches with the thana of logged in dept emp

    $this->db->select('*');
	$this->db->from('complain');

	$this->db->join('problem','problem.problem_id=complain.problem_id');
	$this->db->join('dept','dept.dept_id=problem.dept_id');
	//$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept emp

	$this->db->join('division','division.division_id=complain.division_id');
	//$this->db->where('division.division_id',$divisionid); //Line:2 : show those division which matches with the division of logged in dept emp
	$this->db->join('district','district.district_id=complain.district_id'); 
	//$this->db->where('district.district_id',$districtid); //Line:2 : show those district which matches with the district of logged in dept emp
	
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	//$this->db->where('thana.thana_id',$thanaid); //Line:2 : show those thana which matches with the thana of logged in dept emp


	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	$this->db->where('memarea.memarea_id',$memareaid); //Line:2 : show those thana which matches with the thana of logged in dept emp



    $this->db->join('user','user.user_id=complain.user_id');

	return $this->db->get()->result();

}

public function complain_delete($id)
{
	$this->db->where('complain_id',$id);
	$this->db->delete('complain');
}




// public function add_progress()
// {

// $data['complain_id']=$this->input->post('complain_id');
// $data['complaint_num']=$this->input->post('complaint_num');
// $data['progress_status']=$this->input->post('progress_status');
// $data['user_id']=$this->input->post('user_id');

// $this->db->insert('progress',$data); //memarea is table name

// }


public function up_progress($id)
{
//$data['complain_id']=$this->input->post('complain_id');
//$data['complaint_num']=$this->input->post('complaint_num');
$data['progress_status']=$this->input->post('progress_status');
//$data['user_id']=$this->input->post('user_id');
$this->db->where('progress_id',$id); //memarea_id is primary key
$this->db->update('progress',$data); //memarea is table name
}

// public function up_progress_depthead($id)
// {
// //$data['complain_id']=$this->input->post('complain_id');
// //$data['complaint_num']=$this->input->post('complaint_num');
// $data['progress_status']=$this->input->post('progress_status');
// //$data['user_id']=$this->input->post('user_id');
// $this->db->where('progress_id',$id); //memarea_id is primary key
// $this->db->update('progress',$data); //memarea is table name
// }

public function progress_edit($id)
{
	$this->db->select('*');
	$this->db->from('progress');
	//$this->db->join('complain','complain.complain_id=progress.complain_id');
	//$this->db->join('complain','complain.complaint_num=progress.complaint_num');
	$this->db->where('progress_id',$id);
	return $this->db->get()->result();
}

// public function progress_edit_depthead($id)
// {
// 	$this->db->select('*');
// 	$this->db->from('progress');
// 	//$this->db->join('complain','complain.complain_id=progress.complain_id');
// 	//$this->db->join('complain','complain.complaint_num=progress.complaint_num');
// 	$this->db->where('progress_id',$id);
// 	return $this->db->get()->result();
// }


public function get_progress()
{


	$this->db->select('*');
	$this->db->from('progress');
	
	//$this->db->join('complain','complain.complain_id=progress.complain_id');
	//$this->db->join('complain','complain.complaint_num=progress.complaint_num');

 $this->db->join('user','user.user_id=progress.user_id');

	return $this->db->get()->result();
}


public function get_progress_user()
{

    $user_id=$this->session->userdata('userid');

	$this->db->select('*');
	$this->db->from('progress');
	//$this->db->join('complain','complain.complain_id=progress.complain_id');
	//$this->db->join('complain','complain.complaint_num=progress.complaint_num');

	$this->db->where('user_id',$user_id);

	return $this->db->get()->result();
}


public function get_progress_depthead()
{

    //$depthead_id=$this->session->userdata('deptheadid'); //line 1: code to fetch only logged in dept head info

	//$this->db->select('*');
	//$this->db->from('progress');
 $deptid=$this->session->userdata('deptid');  //Line:1: show those dept which matches with the dept of logged in dept head //deptid is created on logindepthead
    
    $this->db->select('*');
	$this->db->from('progress');
	$this->db->join('complain','complain.complain_id=progress.complain_id');

	$this->db->join('problem','problem.problem_id=complain.problem_id');


	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept head



	 $this->db->join('user','user.user_id=complain.user_id');


	return $this->db->get()->result();


	// $this->db->join('progress','progress.complain_id=complain.complain_id');
 //    $this->db->join('complain','complain.dept_id=depthead.dept_id');
 //    $this->db->join('dept','dept.dept_id=depthead.dept_id'); //join to fetch dept name


	//$this->db->where('complain.depthead_id',$depthead_id); //line 2: code to fetch only logged in dept head info


 //$this->db->join('user','user.user_id=progress.user_id');

	//return $this->db->get()->result();
}


public function get_progress_deptemp()
{

    //$depthead_id=$this->session->userdata('deptheadid'); //line 1: code to fetch only logged in dept head info

	$this->db->select('*');
	$this->db->from('progress');
	$this->db->join('complain','complain.complain_id=progress.complain_id');

    $deptid=$this->session->userdata('deptid');  //Line:1: show those dept which matches with the dept of logged in dept emp
    

    $divisionid=$this->session->userdata('divisionid'); //Line:1: show those division which matches with the division of logged in dept emp
    $districtid=$this->session->userdata('districtid'); //Line:1: show those district which matches with the district of logged in dept emp
    $thanaid=$this->session->userdata('thanaid'); //Line:1: show those thana which matches with the thana of logged in dept emp

	$this->db->join('problem','problem.problem_id=complain.problem_id');


	$this->db->join('dept','dept.dept_id=problem.dept_id');
	$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept emp

	$this->db->join('division','division.division_id=complain.division_id');
	$this->db->where('division.division_id',$divisionid); //Line:2 : show those division which matches with the division of logged in dept emp
	$this->db->join('district','district.district_id=complain.district_id'); 
	$this->db->where('district.district_id',$districtid); //Line:2 : show those district which matches with the district of logged in dept emp
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	$this->db->where('thana.thana_id',$thanaid); //Line:2 : show those thana which matches with the thana of logged in dept emp

    //$this->db->join('user','user.user_id=complain.user_id');
     $this->db->join('user','user.user_id=progress.user_id');

	return $this->db->get()->result();

}


public function get_progress_member()
{

    //$depthead_id=$this->session->userdata('deptheadid'); //line 1: code to fetch only logged in dept head info

	$this->db->select('*');
	$this->db->from('progress');
	$this->db->join('complain','complain.complain_id=progress.complain_id');

    $memareaid=$this->session->userdata('memareaid');  //Line:1: show those dept which matches with the dept of logged in dept emp
    

    $divisionid=$this->session->userdata('divisionid'); //Line:1: show those division which matches with the division of logged in dept emp
    $districtid=$this->session->userdata('districtid'); //Line:1: show those district which matches with the district of logged in dept emp
    $thanaid=$this->session->userdata('thanaid'); //Line:1: show those thana which matches with the thana of logged in dept emp

	$this->db->join('problem','problem.problem_id=complain.problem_id');


	$this->db->join('dept','dept.dept_id=problem.dept_id');
	//$this->db->where('dept.dept_id',$deptid); //Line:2 : show those dept which matches with the dept of logged in dept emp

	$this->db->join('division','division.division_id=complain.division_id');
	//$this->db->where('division.division_id',$divisionid); //Line:2 : show those division which matches with the division of logged in dept emp
	$this->db->join('district','district.district_id=complain.district_id'); 
	//$this->db->where('district.district_id',$districtid); //Line:2 : show those district which matches with the district of logged in dept emp
	$this->db->join('thana','thana.thana_id=complain.thana_id');
	//$this->db->where('thana.thana_id',$thanaid); //Line:2 : show those thana which matches with the thana of logged in dept emp

	$this->db->join('memarea','memarea.memarea_id=complain.memarea_id');
	$this->db->where('memarea.memarea_id',$memareaid); //Line:2 : show those thana which matches with the thana of logged in dept emp

    //$this->db->join('user','user.user_id=complain.user_id');
     $this->db->join('user','user.user_id=progress.user_id');

	return $this->db->get()->result();

}

public function progress_delete($id)
{
	$this->db->where('progress_id',$id);
	$this->db->delete('progress');
}

public function get_verification_user()
{

    $user_id=$this->session->userdata('userid');

	$this->db->select('*');
	$this->db->from('verification');

	$this->db->join('user','user.user_id=verification.user_id');

	$this->db->where('user.user_id',$user_id);

	return $this->db->get()->result();
}

public function check_verification_user()
{

    $verification=$this->input->post('verification_code');

	$this->db->select('count(verification_id) as isVerified');
	$this->db->from('verification');
	$this->db->where('verification_code',$verification);
	
	return $this->db->get()->result();

}

public function set_verified()
{

	$user_id=$this->session->userdata('userid');

	$data['verification_status']="1";
	$this->db->where('user_id',$user_id); //division_id is primary key
	$this->db->update('user',$data); //division is table name

}
public function check_mail()
{
	$mail=$this->input->post('mail');
	$result=$this->db->select("count(user_email) as duplicate")
	->from("user")
    ->where("user_email",$mail);
    return $this->db->get()->result();
}

public function check_username()
{
	$mail=$this->input->post('username');
	$this->db->select("count(user_name) as duplicate");
	$this->db->from("user");
    $this->db->where("user_name",$mail);
    return $this->db->get()->result();
}

public function check_phone()
{
	$mail=$this->input->post('phone');
	$this->db->select("count(user_phone) as duplicate");
	$this->db->from("user");
    $this->db->where("user_phone",$mail);
    return $this->db->get()->result();
}


public function add_contact() //model for process
{
$data['contact_name']=$this->input->post('contact_name');
$data['contact_email']=$this->input->post('contact_email');
$data['contact_phone']=$this->input->post('contact_phone');
$data['contact_msg']=$this->input->post('contact_msg');

$this->db->insert('contact',$data);


}


}