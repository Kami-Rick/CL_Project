<?php 
require_once 'db.php';

$uname = trim($_POST['uname']);
$email_reg = trim($_POST['email-reg']);
$pwd = trim($_POST['pwd']);

if (!empty($uname) && !empty($email_reg) && !empty($pwd) ) {

	$pwd = password_hash($pwd, PASSWORD_DEFAULT);

	$sql = 'insert into users(nickname, email, password) values (:uname, email-reg, pwd)';
	$params = ['uname' => $uname, 'email-reg' => $email_reg, 'pwd' => $pwd];

	$stmt = $pdo -> prepare($sql);
	$stmt -> execute($params);

	echo 'Successfully registered';
} else {
	echo 'Fullfil all boxes';
}
