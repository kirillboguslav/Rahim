<?php 
session_start();

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$pas = password_hash($_POST['password'], PASSWORD_DEFAULT);



$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");
$sql = "SELECT email FROM `users` WHERE email = :email"; // метка ?
$result = $pdo->prepare($sql); // подготовить данный запрос sql
$result->execute(
	[
		'email' => $email,
	]
);
$emailbd = $result->fetch(PDO::FETCH_ASSOC);


if($email == $emailbd['email']){
	$_SESSION['alert'] = 'Такой Пользыватель уже есть - '.$email;
	header("location: /tasks/task_11.php");
	exit;
}

if($email != $emailbd['email']){
	$sql = "INSERT INTO `users` (email, password) VALUES (:email,:pas)";
	$result = $pdo->prepare($sql);
	$result->execute(
		[
			'email' => $email,
			'pas' => $pas
		]
	);
	$_SESSION['alert'] = 'Успешно зарегистрировался - '.$email;
	header("location: /tasks/task_11.php");
}





// $sql = "SELECT * FROM `users` WHERE email = ?";  // метка
// $result = $pdo->prepare($sql);					// подготовка 
// $result->execute([$email]);					// передаем переменную в масиисве это главное !!!
// print_r($result->fetch(PDO::FETCH_ASSOC));


// $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
?>