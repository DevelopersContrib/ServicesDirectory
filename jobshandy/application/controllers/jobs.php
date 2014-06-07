<?php

class Jobs extends Controller {

	function index(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/jobs');
		$template->set('info', $info);
		$template->render();
	
	
	
	}




}