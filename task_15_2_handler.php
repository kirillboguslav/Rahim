<?php


for ($i=0; $i < count($_FILES['image']['name']); $i++) { 
	upFile($_FILES['image']['name'][$i], $_FILES['image']['tmp_name'][$i]);
}


function upFile($file, $tmp_name){
	$result = pathinfo($file);
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
		move_uploaded_file($tmp_name, 'uploads/'.$result);
	}
	
}


header("location: /tasks/task_15_2.php");