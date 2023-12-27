<?php 
session_start(); 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('connect.php');
$username=$_POST['username'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$standard=$_POST['standard'];

$sql="Select * from `votesdata` where username='$username' and
mobile='$mobile' and password='$password' and standard='$standard'"; 

$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
        $sql="Select username,photo,votes,id from `votesdata` where
        standard='group'";
        $resultgroup=mysqli_query($con,$sql);
        if(mysqli_num_rows($resultgroup)>0){
            $groups=mysqli_fetch_all($resultgroup,MYSQLI_ASSOC);
            $_SESSION['groups']=$groups;
        }
        $data=mysqli_fetch_array($result);
        $_SESSION['id']=$data['id'];
        $_SESSION['status']=$data['status'];
        $_SESSION['data']=$data;
    
        header('location: ../partials/dashboard.php');
        exit();
}else{
    header('location: ../index.php');
    exit();
}
?>