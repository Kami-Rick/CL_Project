<?php
require_once 'db.php';

$email_log = trim($_POST['email-log']);
$password_log = trim($_POST['password-log']);

if (!empty($email_log) && !empty($password_log) ) {

	$sql = 'select email, password from users where email = :email-log';
	$params = [':email-log' => $email_log];

	$stmt = $pdo->prepare($sql);
	$stmt->execute($params);

	$user = $stmt->fetch(PDO::FETCH_OBJ);

	if($user) {
		if(password_verify($password_log, $user->password) ){
			header('Location: site_description.php');
		} else {
			echo 'Incorrect email or password';
		}
	}else {
		echo 'Incorrect email or password';
	}

} else{
	echo 'Please fill all the fields';
}