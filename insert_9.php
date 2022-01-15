<?php
	$mess = $_POST['mess'];
	
	if($mess != ''){
		$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");
		$sql = "INSERT INTO `message` (mess) VALUES (:mess)";
		$result = $pdo->prepare($sql);
		$result->execute(['mess' => $mess]);
		echo "Строка добавлена";
		header("location: /tasks/task_9.php");
	}

	
	echo "Строка пуста";
	header("location: /tasks/task_9.php");
?>