<?php

		$mailFrom = $_POST['mail'];
		$message = $_POST['message'];

		$mailTo = "mreid17k@gmail.com";
		$headers = "Message From: ".$mailFrom;
		$txt = "Your message: ".$message;

		mail($mailTo, $headers, $txt);
		//header("Location: index.php?mailsend");
	//print "test";

?>