<?php 
// var_dump($_GET['id']);
// exit;

if($_GET['id']){
	delFile($_GET['id']);
}

if($_FILES){
	upFile($_FILES['image']);
}


header("location: /tasks/task_15_1.php");




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


function delFile($id){
	$id = $_GET['id'];
	$pdo = new PDO("mysql:host=localhost; dbname=rahimbd", "root", "");

	$sql = "SELECT image FROM `images` WHERE `images`.`id` = (:id)";
	$res1 = $pdo->prepare($sql);
	$res1->execute(['id' => $id]);
	$f = $res1->fetch(PDO::FETCH_ASSOC);
	$f = 'uploads/'.$f['image'];
	
	
	$sql = "DELETE FROM `images` WHERE `images`.`id` = (:id)";
	$res = $pdo->prepare($sql);
	$res->execute(['id' => $id]);

	unlink($f);
}
