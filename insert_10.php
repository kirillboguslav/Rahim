<?php
session_start();

$mess = $_POST['mess'];

$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");
$sql = "SELECT * FROM `message` WHERE mess=:mess";
$result = $pdo->prepare($sql);
$result->execute(['mess' => $mess]);
$messbd = $result->fetch(PDO::FETCH_ASSOC);

if(!empty($messbd)){
	$_SESSION['alert'] = 'Такая строка уже есть - '.$messbd['mess'];
	header("location: /tasks/task_10.php");
	exit;
}

if(!empty($mess)){
	$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");
	$sql = "INSERT INTO `message` (mess) VALUES (:mess)";
	$result = $pdo->prepare($sql);
	$result->execute(['mess' => $mess]);
	$_SESSION['alert'] = 'Строка добавлена - '.$mess;
	header("location: /tasks/task_10.php");
}
if(empty($mess)){
	$_SESSION['alert'] = 'Вы ничего не ввели!';
	header("location: /tasks/task_10.php");
}
?>