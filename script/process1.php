<?php
$link = mysqli_connect("localhost" , "root" , "" , "lonee_list");
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}
				
if ($_POST['password']==$_POST['password1']){
    $name=mysqli_real_escape_string($link,$_POST['name']);
    $phone=mysqli_real_escape_string($link,$_POST['phone']);
    $email=mysqli_real_escape_string($link,$_POST['email']);
    $password=mysqli_real_escape_string($link,$_POST['password']);
    $sql = mysqli_query($link,"INSERT INTO  login (name,email,password,phone,perm) VALUES('$name','$email','$password','$phone',1)");
    if($sql==true){
        session_start();
        $_SESSION['msg']="1";
        header("Location:../add_admin.php");
    }else{
        session_start();
        $_SESSION['msg']="2";
        header("Location:../add_admin.php");
    }
}else{
    session_start();
    $_SESSION['msg']="3";
    header("Location:../add_admin.php");
}

?>