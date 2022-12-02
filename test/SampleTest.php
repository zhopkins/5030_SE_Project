<?php

class SampleTest extends \PHPUnit\Framework\TestCase{
    //Function to test admin credentials validation feature
    public function testcase1() {
        $cal=new App\Test_php;
        $host = "localhost";
        $usern = "root";
        $pass = "";
        $dbname = "pesticide";
        $con = mysqli_connect($host, $usern, $pass, $dbname);
        $user="SELECT * from admin_details where name='admin' and password='password'";
        $result=$cal->validate($con,$user);
        $this->assertEquals(1, $result);
    }
    //Function to test product search feature
    public function testcase2(){
        $cal=new App\Test_php;
        $host = "localhost";
        $usern = "root";
        $pass = "";
        $dbname = "pesticide";
        $con = mysqli_connect($host, $usern, $pass, $dbname);
        $user="SELECT * from product_details where id='100'";
        $result=$cal->products($con,$user);
        $this->assertEquals(1, $result);
    }
    //Function to test add products features
    public function testcase3(){
        $cal=new App\Test_php;
        $host = "localhost";
        $usern = "root";
        $pass = "";
        $dbname = "pesticide";
        $con = mysqli_connect($host, $usern, $pass, $dbname);
        $result=$cal->addproduct($con);
        $this->assertEquals(1, $result);
    }
    //Function to test delete product features
    public function testcase4(){
        $cal=new App\Test_php;
        $host = "localhost";
        $usern = "root";
        $pass = "";
        $dbname = "pesticide";
        $con = mysqli_connect($host, $usern, $pass, $dbname);
        $result=$cal->emptycart($con);
        $this->assertEquals(1, $result);
    }

}