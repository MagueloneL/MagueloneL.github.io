<?php
	if($_POST){
		$to = 'maguelone@liabeuf.fr';	//Your email address
		$from_name = $_POST['name'];
		$from_email = $_POST['email'];
		$message = $_POST['message'];
		$header = "From: $from_name <$from_email>";
		mail($to, $message, $header);
	}
?>
