<?php
session_start();
$link = mysqli_connect("localhost" , "root" , "" , "lonee_list");
$uid=$_SESSION['uid'];
if($link == false){
    die("Error : could not connect." .mysqli_connect_error());
}
$sql = "update register set email='$_POST[email]',name='$_POST[name]',phone='$_POST[phone]',city='$_POST[city]',street='$_POST[street]',state='$_POST[state]',zipcode='$_POST[zipcode]',url='$_POST[url]' where uid='$uid'";
if(mysqli_query($link,$sql)==true){
    $_SESSION['msg'] = "1";
    echo"Records added successfully";
    header("Location:../user_login.php");
}else{
    $_SESSION['msg'] = "2";
    echo"Error : Could not execute $sql." . 
    mysqli_error($link);
    header("Location:../user_login.php");
}
?>