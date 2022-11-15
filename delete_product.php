<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $pid = $_POST['Id'];
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
    $sql = "DELETE FROM product_details where id=$pid";
  
    //send query to the database to delete values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Product Deleted!";
    }
  
    // close connection
    mysqli_close($con);

?>