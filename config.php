<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['Username'];
        $pass = $_POST['Password'];
        $rpass = $_POST['psw-repeat'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pesticide";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO user_details (name, password) VALUES ('$name', '$pass')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Successfully Registered!";
        header('location:login.html');
    }
  
    // close connection
    mysqli_close($con);

?>

<!DOCTYPE html>
<html>
    <body>
        <button type="submit" class="signupbtn" name="submit" id="submit"><a href="login.php">Go to Login Page</a></button>
    </body>
</html>

