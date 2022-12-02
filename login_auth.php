<?php
if(isset($_POST['submit']))
{
    $username=$_POST['login_txt'];
    $password=$_POST['password_txt'];
}


$strJson = file_get_contents("user_details.json");
$decodedJson = json_decode($strJson, true);
$array = $decodedJson["user"];
    
for ($x = 0; $x < count($array); $x++) {
    if($array[$x]["name"] == $username && $array[$x]["password"] == $password){
        header('location:index.php');
    }
    else if(($x+1) == count($array)){
        echo 'Wrong Credentials';
    }
} 


// $host = "localhost";
// $usern = "root";
// $pass = "";
// $dbname = "pesticide";
// $con = mysqli_connect($host, $usern, $pass, $dbname);
// $user="SELECT * from user_details where name='$username' and password='$password'";
// $result=mysqli_query($con,$user);
// if(mysqli_num_rows($result)==1)
// {
//     header('location:index.php');
// }
// else
// {
// echo 'Wrong Credentials';
// }
?>