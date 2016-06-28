<?php
    // variables start
	$name = "";
	$email = "";
	$phone = "";
	$service = "";
	$date = "";
	$time = "";
	$message = "";
	
	$name =  trim($_POST['appointment_name']);
	$phone = trim($_POST['appointment_phone']);
	$email =  trim($_POST['appointment_mail']);
	$service =  trim($_POST['appointment_services']);
	$date =  trim($_POST['appointment_date']);
	$time =  trim($_POST['appointment_time']);
	// variables end
	
	// email address starts
	$emailAddress = 'pe4enov@gmail.com';
	// email address ends
	
	$subject = "Сообщение с сайта от $name";	
	$message = "<strong>Имя:</strong> $name <br/><br/> <strong>Телефон:</strong> $phone <br/><br/> <strong>Email:</strong> $email <br/><br/> <strong>Услуга:</strong> $service <br/><br/> <strong>Дата:</strong> $date <br/><br/> <strong>Время:</strong> $time";
	
	$headers .= 'From: '. $name . '<' . $email . '>' . "\r\n";
	$headers .= 'Reply-To: ' . $email . "\r\n";
	
	$headers .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	
	//send email function starts
	
	mail($emailAddress, $subject, $message, $headers);
	//send email function ends
?>