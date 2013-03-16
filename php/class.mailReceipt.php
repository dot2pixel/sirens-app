<?php
// Report all PHP errors (see changelog)
error_reporting(E_ALL);

//Standard Mailer

//print "test";
//$mailto = $studentID."@live.tees.ac.uk";
$mailto = 'band@sirensinthedelta.com' ;

$contact_name = 'a.p.bingham@tees.ac.uk' ;

$subject = "Sirens in the Delta App" ;
//$formurl = "http://www.yarmside.co.uk/contact.php" ;
//$errorurl = "http://www.yarmside.co.uk/form_error.html" ;
//$thankyouurl = "http://www.yarmside.co.uk/formconfirm.html" ;



$senderName = $_POST['senderName'] ;
$senderEmail = $_POST['senderEmail'] ;

$senderMessage = $_POST['senderMessage'] ;

$http_referrer = getenv( "HTTP_REFERER" );




$messageBody = $_POST['senderMessage'] ;

	"This message was sent from:\n" .
	"$http_referrer\n" .
	"Sirens in the Delta Message Test \n\n" .
	
	"Email: $senderEmail                         	\n\n\n\n" .
	"Sender Name: $senderName  	\n\n" .
	
	

	
	
	"                         	\n" .
	
	
	"\n\n END OF MESSAGE \n" ;
	

mail($mailto, $subject, $senderName, $messageBody, "From: \"$senderEmail\" <$senderEmail>\nReply-To: \"$senderName\" <$senderEmail>\nX-Mailer: chfeedback.php 2.0" );

?>