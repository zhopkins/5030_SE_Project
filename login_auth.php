<?php
if(isset($_POST['submit']))
{
    $username=$_POST['login_txt'];
    $password=$_POST['password_txt'];
}
$host = "localhost";
$usern = "root";
$pass = "";
$dbname = "pesticide";
$con = mysqli_connect($host, $usern, $pass, $dbname);
$user="SELECT * from user_details where name='$username' and password='$password'";
$result=mysqli_query($con,$user);
if(mysqli_num_rows($result)==1)
{
    header('location:index.php');
}
else
{
echo 'Wrong Credentials';
}
?>