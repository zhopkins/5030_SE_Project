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

    // using sql to create a data entry query
    $sql = "UPDATE product_details SET pname='$pname', price='$pri', category='$cat' where id='$pid'";
  
    // send query to the database to add values and confirm if successful
    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        echo "Successfully edited the product!";
    }
  
    // close connection
    mysqli_close($con);

?>