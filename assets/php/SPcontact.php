<?php

	// Mail settings
	$to = "nutrientsinc@nutrientsinc.com";
	$subject = "Nutrients Inc Website Inquiry";

	if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {

		$content  = "Name: "     . $_POST["name"]    . "\r\n";
		$content .= "Email: "    . $_POST["email"]   . "\r\n";
		$content .= "Message: "  . "\r\n" . $_POST["message"];

		if (mail($to, $subject, $content, $_POST["email"])) {

			$result = array(
				"message" => "Gracias por contactarnos.",
				"sendstatus" => 1
			);

			echo json_encode($result);

		} else {

			$result = array(
				"message" => "Perdón, algo salió mal.",
				"sendstatus" => 0
			);

			echo json_encode($result);

		}

	}

?>