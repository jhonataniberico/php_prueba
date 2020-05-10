 <?php 
$email = $_POST['email_post'];
$password = $_POST['password_post'];

// TRAER DATOS BD

$email1 = "hola@gmail.com";

if($email == $email1){
	header("Location: hola");
}else {
	header("Location: buttons");
}

?>