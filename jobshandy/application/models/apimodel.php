<?php
include("php_fast_cache.php");

class ApiModel extends Model {
	
	private $api_url = "http://api2.contrib.com/jobs/";
	private $headers = array('Accept: application/json');
	
      function createApiCall($url, $method, $headers, $data = array(),$user=null,$pass=null)
    {
        if (($method == 'PUT') || ($method=='DELETE'))
        {
            $headers[] = 'X-HTTP-Method-Override: '.$method;
        }

        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $url);
        curl_setopt($handle, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
        if ($user){
         curl_setopt($handle, CURLOPT_USERPWD, $user.':'.$pass);
        } 

        switch($method)
        {
            case 'GET':
                break;
            case 'POST':
                curl_setopt($handle, CURLOPT_POST, true);
                curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case 'PUT':
                curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'PUT');
                curl_setopt($handle, CURLOPT_POSTFIELDS, http_build_query($data));
                break;
            case 'DELETE':
                curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'DELETE');
                break;
        }
        $response = curl_exec($handle);
        return $response;
    }
	
	 function getdomain(){
	 	if(defined('ENV')){
	 	    $domain = "handyman.com";	
	 	}else {
			$domain = $_SERVER["HTTP_HOST"]."".$_SERVER['REQUEST_URI'];//input sitename without www
	        $domain = $_SERVER["HTTP_HOST"];
	        $domain = str_replace("http://","",$domain);
	    	$domain = str_replace("www.","",$domain);
	 	}
    	return $domain;
	}

	function getkey(){
		return md5($this->getdomain());
	}
	
	function getdomaininfo(){
		
        $cache = new phpFastCache();    
	    $info = $cache->get("index_domain_info_".$this->getdomain());
        
	    if($info == null) {
		    $info = array();
			$url = $this->api_url.'getdomaininfo?domain='.$this->getdomain().'&key='.$this->getkey();
		    $result = $this->createApiCall($url, 'GET', $this->headers, array());
		    $data_domain = json_decode($result,true);
	        
		    if ($data_domain['success']){	
			  	$info['domainid'] = $data_domain['data']['DomainId'];
		    	$info['domain'] = $data_domain['data']['DomainName'];
		    	$info['memberid'] = $data_domain['data']['MemberId'];
		    	$info['title'] = $data_domain['data']['Title'];
		    	$info['logo'] = $data_domain['data']['Logo'];
		    	$info['description'] = $data_domain['data']['Description'];
		    	$info['account_ga'] = $data_domain['data']['AccountGA'];
		    	$info['description'] = stripslashes(str_replace('\n','<br>',$info['description']));
			}
	        $cache->set("index_domain_info_".$this->getdomain(), $info, 3600*24);
        }
        
		return $info;
   }
   
   function getprojecttypes(){
   
		$response = $this->createApiCall('http://handyman.com/api/getprojecttypes', 'GET', $this->headers);
	    $response = json_decode($response, true);
	    return $response;
   
   
   }
   
   function saveproject($data){
   
   
		$response = $this->createApiCall('http://handyman.com/api/saveproject', 'POST', $this->headers,$data);
	    $response = json_decode($response, true);
	    return $response;
   
   
   }
   
   function checkexist($field,$value){
   
		$response = $this->createApiCall('http://handyman.com/api/checkexists?field='.$field.'&value='.$value.'', 'GET', $this->headers);
	    $response = json_decode($response, true);
	    return $response;
   }
   
   
   
  
   
}
?>
