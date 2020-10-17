<?php
//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
$subject = $_REQUEST['Subject'];

//Check Input Fields
if(empty($name) || empty($email)||empty(message)|| empty($subject))
{
	echo "Please fill all the fields";
}
else
{
	//mail function in PHP
	mail("contact@indiapavilion.net","IP Message", $message  "From: $name<$email>");
	echo "<script type='text/javascript'>alert('Your message sent successfully');
		window.history.log(-1);
	</script>";
}
?>