<?php 
session_start();

if(isset($_SESSION['resulti_sale_user'])){
	header("location:index.php");
}

?>
<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>Please login to resulti script</title>
    <link href="assets/css/login.css" rel="stylesheet" type="text/css" media="all">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
</head>

<body style="">
    

    <div class="content">
        <h1>EMPLOYEE LOGIN FORM</h1>
        <!---728x90--->
		
        <form id="login_form" autocomplete="off">
			<div class="ajax_reponse">Sorry! Incorrect username or passsword </div>
            <div class="content1">
                <input type="text" name="user_name" id="user" placeholder="USERNAME" autocomplete="false" >
            </div>
            <div class="content2"> 
                <input type="password" name="password" id="pass" placeholder="PASSWORD" autocomplete="false">
            </div>
            <input type="submit" value="LOGIN" id="submit_btn">
        </form>
    </div>
  
	 <script src="assets/js/jquery-3.3.1.min.js"></script>
	 <script>
		$(document).ready(function(){
			$("#login_form").on('submit',function(event){
				event.preventDefault();
				$('#submit_btn').val('Please Wait...');
				var user = $("#user").val();
				var pass = $("#pass").val();
				$.ajax({
					url: "check_login.php",
					type: "post",
					data: {user_name:user,password:pass},
					dataType  : 'json',
					success: function (response) {
						if(response.msg=='success'){
							location.reload();
						}else{
							$(".ajax_reponse").show();
							$('.ajax_reponse').delay(3000).fadeOut(); 
							$('#submit_btn').val('LOGIN');
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {
						console.log(textStatus, errorThrown);
					}


				});
				
			});
		});
	 
	 </script>
    
</body>

</html>