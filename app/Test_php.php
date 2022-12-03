<?php

namespace App;

class Test_php{
    //Function to validate admin credentials
    public function validate($con,$user) {
        $result=mysqli_query($con,$user);
        $num1=1;
        if(mysqli_num_rows($result)==1)
        {
        return $num1;
        }
    }
    //Function to search for the particular product from the database
    public function products($con, $user) {
        $result=mysqli_query($con,$user);
        $num1=1;
        if(mysqli_num_rows($result)==1)
        {
        return $num1;
        }
    }
    //Function to add products to the database
    public function addproduct($con) {
        $sql="INSERT INTO product_details (id, pname, price, category) VALUES ('101', 'Product-101', '$10', 'Category-1')";
        $result=mysqli_query($con,$sql);
        $num1=1;
        if($result)
        {
        return $num1;
        }
    }
    // Function to empty the products in the cart
    public function emptycart($con) {
        $user="DELETE from cart_details";
        $result=mysqli_query($con,$user);
        $num1=1;
        if($result)
        {
        return $num1;
        }
    }
    //Function to update the product details
    public function update($con) {
        $user="UPDATE product_details SET pname='Product-2', price='$6', category='Category-2' where id='1'";
        $result=mysqli_query($con,$user);
        $num1=1;
        if($result)
        {
        return $num1;
        }
    }
    //Function to authenticate user
    public function userLogin($con,$user) {
        $result=mysqli_query($con,$user);
        $num1=1;
        if(mysqli_num_rows($result)==1)
        {
        return $num1;
        }
    }
}