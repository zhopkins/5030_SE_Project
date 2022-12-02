<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['Username'];
        $pass = $_POST['Password'];
        $rpass = $_POST['psw-repeat'];
    }
    //checks if the users inputed the same password twice
    if($pass == $rpass){
        //grab data
        $strJson = file_get_contents("user_details.json");
	    $decodedJson = json_decode($strJson, true);
	    $array = $decodedJson["user"];
        //puts the new users data into a json obj
        $new_user = new stdClass();
	    $new_user -> name = $name;
        $new_user -> password = $pass;
        //adds that obj to the list
        array_push($array, $new_user);
        //saves the list back off
        $decodedJson["user"] = $array;
        $json_res = json_encode($decodedJson);
        file_put_contents('user_details.json', $json_res);
    //tells the user the passwords don't match
    }else{
        echo "Passwords didn't match!";
        header('location:PSD-Sign-up_page.html');
    }
	

    // // database details
    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "pesticide";

    // // creating a connection
    // $con = mysqli_connect($host, $username, $password, $dbname);

    // // to ensure that the connection is made
    // if (!$con)
    // {
    //     die("Connection failed!" . mysqli_connect_error());
    // }

    // // using sql to create a data entry query
    // $sql = "INSERT INTO user_details (name, password) VALUES ('$name', '$pass')";
  
    // // send query to the database to add values and confirm if successful
    // $rs = mysqli_query($con, $sql);
    // if($rs)
    // {
    //     echo "Successfully Registered!";
    //     header('location:login.html');
    // }
  
    // // close connection
    // mysqli_close($con);

?>

<!DOCTYPE html>
<html>
    <body>
        <button type="submit" class="signupbtn" name="submit" id="submit"><a href="login.html">Go to Login Page</a></button>
    </body>
</html>

