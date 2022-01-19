<?php 
session_start();

$sms = $_POST['sms'];

if(!empty($sms)){
    $_SESSION['alert'] = $sms;
    header("location: /tasks/task_12.php");
    exit;
}else{
    $_SESSION['alert'] = 'Напишите что то))';
    header("location: /tasks/task_12.php");
    exit;
}