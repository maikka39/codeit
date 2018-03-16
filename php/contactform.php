<?php

	$errName = "";
	$errEmail = "";
	$errSubject = "";
	$errMessage = "";
	$resultGood = "";
	$resultBad = "";

	if (isset($_POST["submitcontactform"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$subject = $_POST['subject'];
		$ref_num = $_POST['ref_num'];

		if (!$_POST['ref_num']) {
			$ref_num = rand(100000, 999999);
		} else {
			$ref_num = $_POST['ref_num'];
		}

		$to = 'contact@maikka39.tk';
		// $ref = rand(100000, 999999);
		$ref = $ref_num;
		$title = "MAIKKA39 - Contactform REF=#$ref";

		$headers  = 'From:  noreply@maikka39.tk' . "\r\n" .
            'Reply-To: contact@maikka39.tk' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

		$body = "<b>From:</b> $name<br> <b>Email:</b> $email<br> <b>Refferencenumber:</b> #$ref_num<br><b>Subject:</b> $subject<br> <b>Message:</b><br> $message";

		$body2 = "
				<body style='color: 222222;'>
					<header><img src='http://maikka39.tk/favicon.png' height='40px' width='40px' style='margin-right: 10px; vertical-align: middle; line-height: 40px;'><a href='dingen.nl' style='font-size: 30px; color: #cb5b00; font-family: sans-serif; font-weight: 900; text-decoration: none; vertical-align: middle; line-height: 40px;'>DINGEN</a><a href='dingen.nl' style='font-size: 20px; color: #ff9800; font-family: sans-serif; font-weight: 900; text-decoration: none; vertical-align: middle; line-height: 40px;'> maikka39.tk</a></header><br><br>
					You just send a message to us via maikka39.tk. This message has been recieved.<br><br>
					Your message was:<br>
					<b>Name:</b> $name<br>
					<b>Email:</b> $email<br>
					<b>Refferencenumber:</b> #$ref_num<br>
					<b>Subject:</b> $subject<br>
					<b>Message:</b><br>
						<div style='margin-left: 30px'> $message </div><br><br>
					We will contact you as soon as possible.<br><br>
					Greetings,<br>
					Customer Support
				</body>
			";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please fill in your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please fill in a valid email adress';
		}

		//Check if subject has been entered
		if (!$_POST['subject']) {
			$errSubject = 'Please fill in a subject';
		}

		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please fill in a message';
		}

// If there are no errors, send the email
if (!$errName && !$errEmail && !$errSubject && !$errMessage) {
	if (mail ($to, $title, $body, $headers)) {
		$resultGood = 'Thank you! We will contact you as soon as possible';
		mail ($email, 'maikka39', $body2, $headers);
	} else {
		$resultBad = 'Something went wrong, please try again later';
	}
}
	}
?>
