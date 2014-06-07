<?php

class Referral extends Controller {



	function index(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/referral');
		$template->set('info', $info);
		$template->render();
	
	}


}