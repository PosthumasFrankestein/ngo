<?php
$link = mysqli_connect("localhost" , "root" , "" , "lonee_list");
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}
				
if ($_POST['password']==$_POST['password1']){
    $name=mysqli_real_escape_string($link,$_POST['name']);
    $phone=mysqli_real_escape_string($link,$_POST['phone']);
    $street=mysqli_real_escape_string($link,$_POST['street']);
    $city=mysqli_real_escape_string($link,$_POST['city']);
    $state=mysqli_real_escape_string($link,$_POST['state']);
    $zipcode=mysqli_real_escape_string($link,$_POST['zipcode']);
    $email=mysqli_real_escape_string($link,$_POST['email']);
    $password=mysqli_real_escape_string($link,$_POST['password']);
    $password1=mysqli_real_escape_string($link,$_POST['password1']);
    $sql1 = mysqli_query($link,"INSERT INTO  login (name,email,password,perm) VALUES('$name','$email','$password',2)");
    $uid=mysqli_insert_id($link);
    $sql = mysqli_query($link,"INSERT INTO  register (uid,name,phone,email,password,street,city,state,zipcode) VALUES('$uid','$name','$phone','$email','$password','$street','$city','$state','$zipcode')");
    if(($sql1==true) && ($sql==true)){
        session_start();
        echo"Records added successfully";
        $_SESSION['email'] = $email;
        header("Location:user_login.php");
    }else{
        echo"Error : Could not execute $sql." . 
        mysqli_error($link);
        header("Location:../signup.html");
    }
}else{
    echo"password do not match";
    header("Location:../signup.html");
}

?>