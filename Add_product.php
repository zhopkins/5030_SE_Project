<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $pid = $_POST['ProductId'];
        $pname = $_POST['ProductName'];
        $pri = $_POST['Price'];
        $cat = $_POST['Category'];
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

    // using $sql to create a data entry query
    $sql = "INSERT INTO product_details (id, pname, price, category) VALUES ('$pid', '$pname', '$pri', '$cat')";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>