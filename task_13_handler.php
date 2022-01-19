<?php 
session_start();

if(!empty($_POST['i'])){
    $_SESSION['alert']++;
    header("location: /tasks/task_13.php");
    exit;
}