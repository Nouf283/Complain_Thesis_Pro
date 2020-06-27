<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class Depthead extends CI_Controller 
{

public function index() //add this code on function index() of welcome.php
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}	

$this->load->view('index_depthead.php');

}

public function login()
{
	$this->load->view('login_depthead');
}


//to show graph for Problem wise complaints percentage
public function process_graph_problem()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_complain=$this->model->count_total_num_of_complain(); 

$i=0;
foreach ($no_complain as $prob_no) {
    $i++;
	$num_of_complains=$prob_no->num_of_complain;	
}

$prob=$this->model->count_num_of_complain_for_each_problem($num_of_complains); 

echo json_encode($prob); //need this line for graph data

}


//to show graph for Area wise complaints percentage
public function process_graph_thana()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_complain=$this->model->count_total_num_of_complain(); 

$i=0;
foreach ($no_complain as $prob_no) {
    $i++;
	$num_of_complains=$prob_no->num_of_complain;	//num_of_complain is the name of count(complain_id) [see count_total_num_of_complain_depthead model]
}

$prob=$this->model->count_num_of_complain_for_each_thana($num_of_complains); //$num_of_complains is the total number of complaints

echo json_encode($prob); //need this line for graph data

}

//to show graph for District wise complaints percentage
public function process_graph_district()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_complain=$this->model->count_total_num_of_complain(); 

$i=0;
foreach ($no_complain as $prob_no) {
    $i++;
	$num_of_complains=$prob_no->num_of_complain;	
}

$prob=$this->model->count_num_of_complain_for_each_district($num_of_complains); 

echo json_encode($prob); //need this line for graph data

}



//to show graph for Division wise complaints percentage
public function process_graph_division()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_complain=$this->model->count_total_num_of_complain(); 

$i=0;
foreach ($no_complain as $prob_no) {
    $i++;
	$num_of_complains=$prob_no->num_of_complain;	
}

$prob=$this->model->count_num_of_complain_for_each_division($num_of_complains); 

echo json_encode($prob); //need this line for graph data

}

//to show graph for Parliamentary Constituency wise complaints percentage
public function process_graph_memarea()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_complain=$this->model->count_total_num_of_complain(); 

$i=0;
foreach ($no_complain as $prob_no) {
    $i++;
	$num_of_complains=$prob_no->num_of_complain;	
}

$prob=$this->model->count_num_of_complain_for_each_memarea($num_of_complains); 

echo json_encode($prob); //need this line for graph data

}


//to show graph for Current Progress wise complaints percentage
public function process_graph_progress()
{
	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}

$no_progress=$this->model->count_total_num_of_progress(); 

$i=0;
foreach ($no_progress as $progress_no) {
    $i++;
	$num_of_progresses=$progress_no->num_of_progress;	
}

$prob=$this->model->count_num_of_progress_status_for_each_type_of_progress($num_of_progresses);

echo json_encode($prob); //need this line for graph data

}



public function show_complain_depthead()
{

	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}
	
	$data['complains']=$this->model->get_complain_depthead();
	//json_encode($data);

	$this->load->view('show_complain_depthead',$data);

}

public function show_depthead_depthead() //controller
{

	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}
	
	
		$data['deptheads']=$this->model->get_depthead_depthead();
	//echo json_encode($data);
	$this->load->view('show_depthead_depthead',$data);

}

public function show_progress_depthead() //have to show only logged in dept head info ??????????????????
{

	if($this->session->userdata('depthead_login')!='yes'){
			redirect(base_url().'index.php/logindepthead','refresh');
		}
	
	$data['progresses']=$this->model->get_progress_depthead();
	//json_encode($data);

	$this->load->view('show_progress_depthead',$data);

}

// public function progress_edit($param1="")
// {
// 	$data["progresses"]=$this->model->progress_edit($param1);
// 	$this->load->view('progress_edit',$data);

// }



// public function up_progress_depthead($param1="") //update deptcat
// {
// 	if($this->session->userdata('depthead_login')!='yes'){
// 			redirect(base_url().'index.php/logindepthead','refresh');
// 		}
//   $this->model->up_progress_depthead($param1);
//   redirect(base_url().'index.php/depthead/show_progress_depthead','refresh');
// }












}