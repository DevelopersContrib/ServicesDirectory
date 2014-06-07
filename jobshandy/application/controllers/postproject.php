<?php

class Postproject extends Controller {



	function index(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$zip = 0;
		$projecttype_id = 0;
		$projecttypes = $api->getprojecttypes();
		$template = $this->loadView('handyman/postproject');
		$template->set('projecttypes',$projecttypes);
		$template->set('zip',$zip);
		$template->set('projecttype_id',$projecttype_id);
		$template->set('info', $info);
		$template->render();
	
	}
	
	function find(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$zip =  $helper->segment(4);
		$projecttype_id = $helper->segment(5);
		//var_dump($projecttype_id);
		$info = $api->getdomaininfo();
		$projecttypes = $api->getprojecttypes();
		$template = $this->loadView('handyman/postproject');
		$template->set('projecttypes',$projecttypes);
		$template->set('zip',$zip);
		$template->set('projecttype_id',$projecttype_id);
		$template->set('info', $info);
		$template->render();
	
	}
	
	function addproject(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$input = $this->loadHelper('Input_helper');
	
		$projecttype = $input->post('projecttype');
		$proj_desc = $input->post('proj_desc');
		$idealstartdate = $input->post('idealstartdate');
		$projectstats = $input->post('projectstats');
		$timeframe = $input->post('timeframe');
		$address = $input->post('address');
		$state = $input->post('state');
		$city = $input->post('city');
		$zipcode = $input->post('zipcode');
		$budget = $input->post('budget');
		$homeown_fname = $input->post('homeown_fname');
		$homeown_lname = $input->post('homeown_lname');
		$homeown_number = $input->post('homeown_number');
		$homeown_uname = $input->post('homeown_uname');
		$homeown_email = $input->post('homeown_email');
		$owned = $input->post('owned');
		$val = intval($owned);
		$code = base64_encode($homeown_email);
		
		
		$email = $api->checkexist('email',$homeown_email);
		$username = $api->checkexist('username',$homeown_uname);
		
		//var_dump($info['data']['exists']);
		//echo $info['data']['exists'];
		if($email['data']['exists'] == TRUE){
			$response['exist'] = "Email already exists";
			
			
		}else if($username['data']['exists'] == TRUE){
			$response['exist'] = "Username already exists";
			
		}else{
		
		
			
			
			 $info = array
				 ('email'=>$homeown_email,
				  'username'=>$homeown_uname,
				  'firstname'=>$homeown_fname,
				  'lastname'=>$homeown_lname,
				  'phone_number'=>$homeown_number,
				  'projecttype'=>$projecttype,
				  'projectdesc'=>$proj_desc,
				  'projectstart'=>$idealstartdate,
				  'projectstatus'=>$projectstats,
				  'projecttimeframe'=>$timeframe,
				  'won_pro'=>$val,
				  'projectaddress'=>$address,
				  'projectstate'=>$state,
				  'city'=>$city,
				  'zip_code'=>$zipcode,
				  'projectbudget'=>$budget,
				 );
			$save_project = $api->saveproject($info);
			
		
			
			
			
			$response['emailencode'] =  base64_encode($homeown_email);
			$response['success'] = "success";
			
			
		}
		
		 echo json_encode($response);
		
		
		
		
	
	}


}