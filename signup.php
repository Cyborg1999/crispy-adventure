<?php
include 'connection.php';
$con =new DBConnector;

if(isset($_POST["submit"])){
    $sql = "INSERT INTO registration( full_name,email,address,pass,image) VALUES(:full_name,:email,:address,:pass,:image)";
    $pdo_stmt =$con->prepare($sql);
    $result = $pdo_stmt->execute(array(':full_name'=>$_POST['full_name'],':email'=>$_POST['email'],':address'=>$_POST['address'],':pass'=>$_POST['pass'],':image'=>$_POST['image']));
    if (!empty($result)){
        header('location:home.html');
    }


}