<?php

class Home extends Controller {
	
	function index()
	{
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$projecttypes = $api->getprojecttypes();
		$template = $this->loadView('handyman/home');
		$template->set('info', $info);
		$template->set('projecttypes',$projecttypes);
		$template->render();
	}
	
	function terms(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/terms');
		$template->set('info', $info);
		$template->render();
	
	}
	
	function about(){
	
		$api = $this->loadModel('ApiModel');
		$helper = $this->loadHelper('Url_helper');
		$info = $api->getdomaininfo();
		$template = $this->loadView('handyman/about');
		$template->set('title', $title);
		$template->set('info', $info);
		$template->render();
	
	}
    
}

?>