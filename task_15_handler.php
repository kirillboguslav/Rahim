<?php 

function upFile($file){
	$result = pathinfo($file['name']);
	$result = uniqid() .".".$result['extension'];

	if(!empty($result)){
		$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");
		$sql = "INSERT INTO `images` (image) VALUES (:image)";
		$res = $pdo->prepare($sql);
		$res->execute(
			[
				'image' => $result
			]
		);
		move_uploaded_file($file['tmp_name'], 'uploads/'.$result);
	}
	
}

upFile($_FILES['image']);
header("location: /tasks/task_15.php");