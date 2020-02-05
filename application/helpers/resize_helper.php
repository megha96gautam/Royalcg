<?php
 function resize_image($image_data,$thumbpath,$width,$height) {
	  $ci=& get_instance();
	  $ci->load->library("image_lib");
$img = substr($image_data['full_path'], 51);
$config['image_library'] = 'gd2';
$config['source_image'] = $image_data['full_path'];
$config['new_image'] = $thumbpath;//'./uploads/new_' . $img;
$config['width'] = $width;
$config['height'] = $height;

//send config array to image_lib's  initialize function
$ci->image_lib->initialize($config);
$src = $config['new_image'];
$data['new_image'] = substr($src, 2);
$data['img_src'] = base_url() . $data['new_image'];
// Call resize function in image library.
$ci->image_lib->resize();
// Return new image contains above properties and also store in "upload" folder.
return $data;

}

 
 function sendNotification($target, $title, $description,$id,$image='',$type=3,$device_id){
 $ci =& get_instance();
 		  $insert = array(
		     "title"=>$title,
		     "description"=>$description,
			 "other_id"=>$id,
			 "type"=>$type,
			 "device_id"=>$device_id,
			 "image"=>$image,
			 "notification_date"=>date("Y-m-d h:i:s"),
		 
		 );
		 $ci->db->insert("notification_history",$insert); 
		  $query = $ci->db->select('*')
		                  ->from("push_notification")
		                  ->where("device_id",$device_id) 
		                  ->get();
		 $iphone = $query->result();
		  
		 
		 if($iphone[0]->phone_type==1){
			  
		          ios($device_id, $title, $description,$id,$image,$type=3,$device_id);	 
		 }else{
 
		 
		//FCM API end-point
		$url = 'https://fcm.googleapis.com/fcm/send';
		//api_key available in Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key
		$server_key = 'AAAA4zlVpjU:APA91bEeJx52QHytWhDEUc3XGZtMal-WhenVsYKmXSWEtMwkLtWV-CmcIaZ6cz8Wlh63mu46pUoV33tL4VlaaNCA9fJldvwS6G0N49iHtxiPywfCR4N0Bx8Y3GC3HOsKR-_uWOtFqg6q';
		$data = array("via"=>"UAET10", "title"=>$title, "message"=>$description,'type'=>$type);
		if($id !=''){
		   $data['id'] = $id;
		}
		if($image !=''){
		   $data['image'] = $image;
		}
		 
		$fields = array();
		$fields['data'] = $data;	
		if(is_array($target)){
			$fields['registration_ids'] = $target;
		}else{
			$fields['to'] = $target;
		}
		//header with content_type api key
		$headers = array(
		'Content-Type:application/json',
		   'Authorization:key='.$server_key
		);
		//CURL request to route notification to FCM connection server (provided by Google)	
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
		$result = curl_exec($ch);
		if ($result === FALSE) {
			return false;
		}
		curl_close($ch);
			$jsn =json_decode($result);
		if($jsn->success){
			return true;
		}
		else{
			return true;
		}
	  }
	}
	
	
	 function ios($target, $title, $description,$id,$image='',$type=3,$device_id) {
           
		$deviceToken = $target;
        
		$ctx = stream_context_create();
		// ck.pem is your certificate file
		$ckpm =  $_SERVER['DOCUMENT_ROOT'].'/ck.pem'; 
		stream_context_set_option($ctx, 'ssl', 'local_cert', $ckpm  );
		stream_context_set_option($ctx, 'ssl', 'passphrase',123456); 

		// Open a connection to the APNS server
		$fp = stream_socket_client(
			'ssl://gateway.sandbox.push.apple.com:2195', $err,
			$errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);

		if (!$fp)
			exit("Failed to connect: $err $errstr" . PHP_EOL);
             $data = array(
				"via"=>"UAET10",
				"title"=>$title,
				"message"=>$description,
				'type'=>$type,
				'id'=>$id
			  );
 
		if($image !=''){
		   $data['image'] = $image;
		}			  
			  
		// Create the payload body
		$body['aps'] = array(
			'alert' => $data,
			'sound' => 'default'
		);
        
		// Encode the payload as JSON
		$payload = json_encode($body);

		// Build the binary notification
		$msg = chr(0) . pack('n', 32) . pack('H*', $deviceToken) . pack('n', strlen($payload)) . $payload;

		// Send it to the server
		$result = fwrite($fp, $msg, strlen($msg));
		 
		// Close the connection to the server
		fclose($fp);

		if (!$result)
			echo 'Message not delivered' . PHP_EOL;
		else
			echo 'Message successfully delivered' . PHP_EOL;

	}
?>