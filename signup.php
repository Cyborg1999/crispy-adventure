<?php
#require 'connection.php';

if(!empty($_POST["submit"])){
    require_once 'connection.php';
    $sql = "INSERT INTO users( full_name,email, address,password,image) VALUES(:full_name,:email,:address,:password,:image)";
    $pdo_stmt = $conn->prepare($sql);

    $result = $pdo_stmt->execute(array(':full_name'=>$_POST['full_name'],':email'=>$_POST['email'],':address'=>$_POST['address'],':image'=>$_POST['image']));
    if (!empty($result)){
        header('location:home.html');
    }


}