<?php
	if(isset($_POST['submit'])){
		$rating= $_POST['rating'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$comment = $_POST['comment'];

		$subject="Message from Careerhub Feedback Form";
		$mailto = "shreya_gupta@phdigitech.com";
		$headers = "abc";
		$mes = "Name: ".$name."\nE-mail: ".$email."\nSubject: ".$phone."\nMessage: ".$comment."\nRating: ".$rating;
		
		mail($mailto,$subject,$mes,$headers);
		header("Location: feedback.html?mailsend");
	}
?>