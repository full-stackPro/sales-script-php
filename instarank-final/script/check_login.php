<?php 
	session_start();
	if(isset($_POST['user_name'])){
		$json_string = file_get_contents(__DIR__ ."/users.json");
		$users 		 = json_decode($json_string, true);
		
		$user        = $_POST['user_name'];
		$pass        = $_POST['password'];

		foreach($users as $user_name => $password){
			
			if($user_name == $user && $password == $pass){
				$_SESSION['insta_sale_user'] = $user_name;
				echo json_encode(array("msg"=>"success"));
				die;
			}else{
				echo json_encode(array("msg"=>"faild"));
				die;
			}
		}
		
	}
?>