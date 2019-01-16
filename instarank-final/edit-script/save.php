<?php 

	if(isset($_POST['html'])){
		$html = '<?php
					session_start();

					if(!isset($_SESSION["insta_user"])){
						header("location:login.php");
					}

					?>'.$_POST['html'];
		if($_POST['type'] == 'intro'){
			$file = __DIR__ . '/index.php';
		}else if($_POST['type'] == 'explaination'){
			$file = __DIR__ . '/explanation.php';
		}else if($_POST['type'] == 'senior'){
			$file = __DIR__ . '/senior.php';
		}else if($_POST['type'] == 'signup'){
			$file = __DIR__ . '/signup.php';
		}
		
		$html = str_ireplace('display: block;', 'display: none;', $html);
		 $cUrl = curl_init();
        curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($cUrl, CURLOPT_POST, TRUE);
        curl_setopt($cUrl, CURLOPT_FOLLOWLOCATION, 0);
        curl_setopt($cUrl, CURLOPT_HEADER, 0);
        curl_setopt($cUrl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.71 Safari/537.36');
        curl_setopt($cUrl, CURLOPT_ENCODING, 'gzip');
        curl_setopt($cUrl, CURLOPT_URL, 'http://www.freeformatter.com/html-formatter.html');
        curl_setopt($cUrl, CURLOPT_REFERER, 'http://www.freeformatter.com/html-formatter.html');
        curl_setopt($cUrl, CURLOPT_HTTPHEADER, [
            'Origin: http://www.freeformatter.com',
            'Accept-Language: cs,en-US;q=0.8,en;q=0.6',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
        ]);
        curl_setopt($cUrl, CURLOPT_POSTFIELDS, array(
            'htmlString' => $html,
            'indentation' => 'TWO_SPACES',
            'forceInNewWindow' => 'true',
            'encoding' => 'UTF-8',
        ));
        $returnValue = curl_exec($cUrl);
        $httpStatus = curl_getinfo($cUrl, CURLINFO_HTTP_CODE);
        curl_close($cUrl);
        if ($httpStatus != 200) {
            throw new cUrlException(strip_tags($returnValue), $httpStatus);
        }
       // var_dump($returnValue);die;
		$res =  file_put_contents($file,$returnValue);
		if($res){
			echo json_encode(array("msg"=>"success"));
		}else{
			echo json_encode(array("msg"=>"error"));
		}
	}
?>