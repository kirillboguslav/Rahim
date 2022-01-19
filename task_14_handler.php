<?php 
session_start();

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$pas = password_hash($_POST['password'], PASSWORD_DEFAULT);

$destroy = $_POST['destroy'];

$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");		//Подкл к базе
$sql = "SELECT email FROM `users` WHERE email = :email"; 				//Проверка на существующий емейл
$result = $pdo->prepare($sql); 											//Подготовить данный запрос sql
$result->execute(
	[
		'email' => $email
	]
);
$emailbd = $result->fetch(PDO::FETCH_ASSOC);


$sql = "SELECT password FROM `users` WHERE email = :email"; 				//Проверка на существующий емейл
$result = $pdo->prepare($sql); 											//Подготовить данный запрос sql
$result->execute(
	[
		'email' => $email
	]
);
$pasbd = $result->fetch(PDO::FETCH_ASSOC);


if($email == $emailbd['email']){
	if(password_verify($_POST['password'],$pasbd['password'])){
		$_SESSION['log'] = 'Вы  ЗалогИниЛИСЬ )) <br><br>Ваш Логин - '.$email;
		header("location: /tasks/task_14.php");
		exit;
	}
	$_SESSION['alert'] = 'Такой логин уже есть - '.$email.' или поля заполнены не корректно';
	header("location: /tasks/task_14.php");
	exit;
}

if($email != $emailbd['email'] and !empty($pas)){
	$sql = "INSERT INTO `users` (email, password) VALUES (:email,:pas)";
	$result = $pdo->prepare($sql);
	$result->execute(
		[
			'email' => $email,
			'pas' => $pas
		]
	);
	$_SESSION['log'] = 'Вы  успешно зарегистрированы <br><br>Ваш Логин - '.$email;
	header("location: /tasks/task_14.php");
}

if($destroy){
	session_unset();
	header("location: /tasks/task_14.php");
}
?>