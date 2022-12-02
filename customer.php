<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $country = $_POST['country'];
        $sname = $_POST['sname'];
        $semail = $_POST['semail'];
        $scity = $_POST['scity'];
        $saddress = $_POST['saddress'];
        $szip = $_POST['szip'];
        $scountry = $_POST['scountry'];
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
    $sql = "INSERT INTO billing_details (name, email, city, address, zip, country) VALUES ('$name', '$email', '$city', '$address', '$zip', '$country')";
    $sql1 = "INSERT INTO shipping_details (name, email, city, address, zip, country) VALUES ('$sname', '$semail', '$scity', '$saddress', '$szip', '$scountry')";
    // send query to the database to add details and confirm if successful
    $rs = mysqli_query($con, $sql);
    $rs1 = mysqli_query($con, $sql1);
    if($rs && $rs1)
    {
        echo "Successfully Stored the Details";
    }
  
    // close connection
    mysqli_close($con);

?>