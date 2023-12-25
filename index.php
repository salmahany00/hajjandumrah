<?php
$username=$_REQUEST['username'];
$email=$_REQUEST['email']
$password=$_REQUEST['password']



if(isset($_POST['login']))

{


$host="localhost";
$user="root";
$password="";
$db="bis_level4"



$conn= mysqil_connest($host,$root,$password,$db);


$insert="insert into students_bis values('$username',$'email',$'password')";

mysqil_query($conn,$insert);

if($conn){
    echo("<h1 style='color:green'>your registration is done!</h1>");
else
{echo("<h1 style='color:red'>your registration is failed!</h1>");}
}



?>