<?php 

	if( (isset($_POST["txtemail"]) == false) || (strlen($_POST['txtemail']) == 0 ) || (isset($_POST["txtsubject"]) == false) || (strlen($_POST['txtsubject']) == 0 ) || (isset($_POST["txtmsg"]) == false) || (strlen($_POST['txtmsg']) == 0 ) ) {

		echo "INPUT MISSING";
		exit();

	}

	extract($_POST);


	$name= "About Manav";
	
    $FromName="Manav Takolita";

	$FromEmail="flexiconsofttech@gmail.com";
	$ReplyTo=$txtemail;
	$toemail="takoliya.manav777@gmail.com";
	$subject="Techno Smarter Contact form"; 
	$message='Name:-'.$name.'<br>Email :-' .$txtemail.'<br> Message:-'.$txtmsg;
	$headers = "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	$headers .= "From: ".$FromName." <".$FromEmail.">\n";
	$headers .= "Reply-To: ".$ReplyTo."\n";
	$headers .= "X-Sender: <".$FromEmail.">\n";
	$headers .= "X-Mailer: PHP\n";
	$headers .= "X-Priority: 1\n";
	$headers .= "Return-Path: <".$FromEmail.">\n";


	if(mail($toemail, $subject, $message, $headers,'-f'.$FromEmail) ){
    	$hide=1;
         echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
	}else{
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
	} 	
		
?>
