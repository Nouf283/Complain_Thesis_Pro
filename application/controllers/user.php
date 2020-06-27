<?php 
if(!defined('BASEPATH')) 
	exit('No direct script access allowed');

class User extends CI_Controller 
{

public function index()
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	$this->load->view('index_user.php');
}

public function login()
{
	$this->load->view('login_user');
}

//to show graph for Problem wise complaints percentage
public function process_graph_problem()
{
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
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


public function add_complain_user() //this is controller name
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}

	$data["dept"]=$this->model->get_deptcat();
	$data["problem"]=$this->model->get_probcat();
	$data["division"]=$this->model->get_division();
	$data["district"]=$this->model->get_district();
	$data["thana"]=$this->model->get_thana();
	$data["memarea"]=$this->model->get_memarea();
	//$data["user_id"]=$this->session->userdata('userid');

	$this->load->view('add_complain_user',$data); //add_complain_user is view name (design php)

}



public function show_complain_user() //this is controller name
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	$data['complains']=$this->model->get_complain_user();
	//echo json_encode($data);

	$this->load->view('show_complain_user',$data);

}

public function add_complain() //only user can use this
{
	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
  $this->model->add_complain();
  redirect(base_url().'index.php/user/show_complain_user','refresh'); //show_complain_user is the controller name (not the view name)
}




public function show_progress_user()
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	$data['progresses']=$this->model->get_progress_user();
	//json_encode($data);

	$this->load->view('show_progress_user',$data);

}

public function show_user_user()
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	$data['users']=$this->model->get_user_user();
	//json_encode($data);

	$this->load->view('show_user_user',$data);

}

public function show_similar_complain() //this is controller name
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	$data['complains']=$this->model->get_similar_complain();
	//echo json_encode($data);
	$data['complains']['votes']=$this->model->count_num_of_vote_for_each_complain();
	//$this->load->view('show_similar_complain',$data);

	
	echo json_encode($data);

}




public function user_vote($complainid, $userid)
{

	if($this->session->userdata('user_login')!='yes'){
			redirect(base_url().'index.php/loginuser','refresh');
		}
	
	//$data['users']=$this->model->get_user_vote();
	//$this->load->view('show_user_user',$data);
  
 $data['votes']=$this->model->check_user_vote($complainid, $userid);

 $i=0;
 foreach ($data['votes'] as $vote) {
 	$i++;
 	$number_of_vote=$vote->number_of_vote;
 
 }
if($number_of_vote>0)
{
	?>
	<script type="text/javascript">
     alert("you have voted once");


	</script>
	<?php 
	
}
else{

$this->model->get_user_vote($complainid, $userid);
//change the name of "Vote" button to "Voted" here + disable the buuton

}

redirect(base_url().'index.php/user/show_similar_complain','refresh');
 
//  echo $has_vote;
 // if($has_vote>0)
 // {
 //  echo "You can not vote twice";
 // }
 // else{
 // 	$this->model->get_user_vote($complainid, $userid);
 //  redirect(base_url().'index.php/user/show_similar_complain','refresh');
 // }
  //$this->model->get_user_vote($complainid, $userid);
  //redirect(base_url().'index.php/user/show_similar_complain','refresh');


}


public function add_user_user() //this is controller name
{

    // no session code here because it is registration page
    //no foreign key is used here on user table so no code for that
	$this->load->view('registration_user');

}


public function add_user() //only user can use this //this is process
{

    // no session code here because it is registration page
    //no foreign key is used here on user table so no code for that

  $data=$this->model->add_user();
  echo json_encode($data);

 // echo json_encode($data);
 // redirect(base_url().'index.php/loginuser','refresh');
  
 //show_complain_user is the controller name (not the view name)
/*?>

<script type="text/javascript">
$.ajax({
  url: "http://localhost/complain/index.php/loginuser/do_login",
   method:'POST',
   data:$('#log_form').serialize();
  
}).done(function(data) {


});
</script>

<?php */
}

public function check_verification_user() //this is controller name
{

	// if($this->session->userdata('user_login')!='yes'){
	// 		redirect(base_url().'index.php/loginuser','refresh');
	// 	}
	
	$data['verifications']=$this->model->check_verification_user();
    //echo json_encode($data);

	//$this->load->view('add_verification_user',$data);

	$i=0;
    foreach ($data['verifications'] as $verification) {
 	$i++;
    $is_verified=$verification->isVerified;	
 
    }
 	if($is_verified>0)
 	{
 		$this->model->set_verified();

 		?>
 		
 		<script type="text/javascript">
     	alert("Thank you for verifying your Mobile Number!");
		</script>
 		
 		<?php

 		redirect(base_url().'index.php/user/add_complain_user','refresh');
 	}
 	else{
 		
 		?>
 		
 		<script type="text/javascript">
     	alert("Verification failed! Please enter correct Verification Code.");
		</script>
 		
 		<?php
 	
       redirect(base_url().'index.php/user/add_verification_user','refresh');
 	
 	}

}
public function add_verification_user() //this is controller name
{

	// if($this->session->userdata('user_login')!='yes'){
	// 		redirect(base_url().'index.php/loginuser','refresh');
	// 	}
	
	$data['verifications']=$this->model->get_verification_user();
//	echo json_encode($data);

	$this->load->view('add_verification_user',$data);


 
}

public function verification_user() //this is controller name
{

    // no session code here because it is registration page
    //no foreign key is used here on user table so no code for that
    $data['verifications']=$this->model->get_verification_user();
    //echo json_encode($data);
	$this->load->view('verification_user',$data);

}

public function check_validation()
{
	$validation=array();

	
	$data["mail"]=$this->model->check_mail();
	$data["user"]=$this->model->check_username();
    $data["phone"]=$this->model->check_phone();

	foreach ($data["mail"] as $mails) {
		$validation['mail']=$mails->duplicate; //duplicate is count(user_email)  //see check_mail() model
	}

	foreach ($data["user"] as $users) {
		$validation['user']=$users->duplicate; //duplicate is count(user_name) // see check_username() model	
	}
	
	foreach ($data["phone"] as $phones) {
		$validation['phone']=$phones->duplicate; //duplicate is count(user_phone) //see check_phone() model
		
	}

	echo json_encode($validation);
}

public function check_username()
{
	$data=$this->model->check_username();
	echo json_encode($data);
}

public function check_phone()
{
	$data=$this->model->check_phone();
	echo json_encode($data);
}


public function add_contact() //controller
{

  $this->load->view('add_contact'); //view

}


public function add_contact_process() //process
{

  $data=$this->model->add_contact(); //model for process
  
  ?>
  <script type="text/javascript"> alert("আপনার প্রশ্ন সফলভাবে প্রেরিত হয়েছে"); </script>
  <?php

 redirect(base_url().'index.php/user/index','refresh');

}



}
?>
