<?php
// getting all values from the HTML form
if(isset($_POST['submit']))
{
    $username=$_POST['login_txt'];
    $password=$_POST['password_txt'];
}

// database details
$host = "localhost";
$usern = "root";
$pass = "";
$dbname = "pesticide";

// creating a connection
$con = mysqli_connect($host, $usern, $pass, $dbname);

// Table details  where name and password columns
$user="SELECT * from admin_details where name='$username' and password='$password'";
$result=mysqli_query($con,$user);

// on correct username and password  it diverts to the admin homepage
if(mysqli_num_rows($result)==1)
{
    header('location:Admin_Page.html');
}
// on wrong username and password gets wrong credentails on the page
else
{
echo 'Wrong Credentials';
}
?>