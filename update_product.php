<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $pid = $_POST['Id'];
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

    // using sql to delete a product
    $sql = "UPDATE product_details SET pname=$pname, price=$pri, category=$cat where id=$pid";
  
    //send query to the database to delete values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Product detaiils updated!";
    }
  
  
    // close connection
    mysqli_close($con);

?>