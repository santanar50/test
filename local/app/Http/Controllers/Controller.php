<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Admin;
use App\Language;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    function sendPush($title,$description,$uid = 0)
	{
		$content = ["en" => $description];
		$head 	 = ["en" => $title];		

		$daTags = [];

		if($uid > 0)
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "=", "value" => $uid];
		}
		else
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "!=", "value" => 'NAN'];
		}
		
		$fields = array(
		'app_id' => "dc5bdd0d-b87c-4c08-bb6e-255d43ab7d29",
		'included_segments' => array('All'),	
		'filters' => [$daTags],
		'data' => array("foo" => "bar"),
		'contents' => $content,
		'headings' => $head,
		);
        
     
		$fields = json_encode($fields);
        
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		'Authorization: Basic MDQ3NThlMjUtZmY2Ni00OGUyLWI1OGItYzA5NjkxMjEwYzAy'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
       
	    return $response;
	}

	function sendPushD($title,$description,$uid = 0)
	{
		$content = ["en" => $description];
		$head 	 = ["en" => $title];		

		$daTags = [];

		if($uid > 0)
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "=", "value" => $uid];
		}
		else
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "!=", "value" => 'NAN'];
		}
		
		$fields = array(
		'app_id' => "27ca042c-2d21-4065-91a1-319580f6fd46",
		'included_segments' => array('All'),	
		'filters' => [$daTags],
		'data' => array("foo" => "bar"),
		'contents' => $content,
		'headings' => $head,
		);
        
     
		$fields = json_encode($fields);
        
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		'Authorization: Basic OWIyNmRkMDktNjY3Ny00ZDU0LWIwODYtZDM2ODk0MDhlYzg3'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
       
	    return $response;
	}

	function sendPushS($title,$description,$uid = 0)
	{
		$content = ["en" => $description];
		$head 	 = ["en" => $title];		

		$daTags = [];

		if($uid > 0)
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "=", "value" => $uid];
		}
		else
		{
			$daTags = ["field" => "tag", "key" => "user_id", "relation" => "!=", "value" => 'NAN'];
		}
		
		$fields = array(
		'app_id' => "7ebd04b2-9d31-4062-bdb5-4fe00c55c348",
		'included_segments' => array('All'),	
		'filters' => [$daTags],
		'data' => array("foo" => "bar"),
		'contents' => $content,
		'headings' => $head,
		);
        
     
		$fields = json_encode($fields);
        
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
		'Authorization: Basic ZTVkY2JmNTktMGNhMC00OTRiLThlZjAtODU3Mjg1OTAzZmM0'));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POST, TRUE);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

		$response = curl_exec($ch);
		curl_close($ch);
       
	    return $response;
	}

    public function currency()
    {
    	$admin = Admin::find(1);

    	if($admin->currency)
    	{
    		return $admin->currency;
    	}
    	else
    	{
    		return "Rs.";
    	}
    }

    public static function sendSms($num,$msg)
	{
		$fullApi = Admin::find(1)->sms_api;
		$msg 	 = urlencode($msg);
		
		if($fullApi)
		{
			$api     = str_replace(['{msg}','{num}'],[$msg,$num],$fullApi);
		
			$url = $api;
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec ($ch);
			$info = curl_getinfo($ch);
			$http_result = $info ['http_code'];
			curl_close ($ch);
		}
	}

	public function getLang()
	{
		$res = new Language;
		
		return $res->getAll();
	}
}
