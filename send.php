<?php 

session_start();

$errors = array(); 

if(!array_key_exists('contactName', $_POST) || $_POST['contactName'] == '') {
  $errors ['contactName'] = "vous n'avez pas renseigné votre nom";
}
if(!array_key_exists('contactEmail', $_POST) || $_POST['contactEmail'] == '') {
  $errors ['contactEmail'] = "vous n'avez pas renseigné votre mail";
}
if(!array_key_exists('contactSubject', $_POST) || $_POST['contactSubject'] == '') {
  $errors ['contactSubject'] = "vous n'avez pas renseigné le sujet";
}
if(!array_key_exists('contactMessage', $_POST) || $_POST['contactMessage'] == '') {
  $errors ['contactMessage'] = "vous n'avez pas renseigné de message";
}

if(!empty($errors)){ 
  	$_SESSION['errors'] = $errors;
/*  	$_SESSION['inputs'] = $_POST;*/  	
	header('Location: index.php#contact');
} else {
	/*$_SESSION['success'] = 1;*/
	$name    = htmlspecialchars($_POST['contactName']); 
	$mail    = htmlspecialchars($_POST['contactEmail']); 
	$subject = htmlspecialchars($_POST['contactSubject']); 
	$message = htmlspecialchars($_POST['contactMessage']); 

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n"; 
	$headers .= "From: $name <$mail>\r\nReply-to : $name <$mail>\nX-Mailer:PHP"; 

	$destinataire="jnroudet@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
	$body="$message"; 

	if (mail($destinataire,$subject,$body,$headers)) { 
		$_SESSION['success'] = 1;
	} else { 
		$_SESSION['errors'] = array("Une erreur s'est produite");
	} 

	header('Location: index.php#contact');
}
?>