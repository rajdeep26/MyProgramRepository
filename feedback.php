<?php
$to = "admin@rajdeep-program-repository.net76.net";
$subject = "Feedback";
$name = $_POST['name'];
$message = "Name: ".$name."\nMessage: ".$_POST['message'];
$headers.= "From: Rajdeep-Program-Repository <admin@rajdeep-program-repository.net76.net>\r\n";
$headers.= "Reply-To: Rajdeep-Program-Repository <admin@rajdeep-program-repository.net76.net>\r\n";
$result=mail($to,$subject,$message,$headers);
if ($result) 
	header("Location: ./ShowPrograms.php");
else
	echo "Sending Failed";
?>