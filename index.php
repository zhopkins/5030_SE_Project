<!DOCTYPE html>
<html>
<head>
<title>Online Store</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
	table {
	border-collapse: collapse;
	width: 50%;
	color: #588c7e;
	font-family: monospace;
	font-size: 25px;
	text-align: left;
	}
	th {
	background-color: #588c7e;
	color: white;
	}
	tr:nth-child(even) {background-color: #f2f2f2}

</style>
</head>

<body>

<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light">
  		
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="topnav">
  		<a style="color:black;" class="active" href="#home">Home</a>
		</div> 
  		<div class="collapse navbar-collapse" id="navbarNav">
  		
    		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="Account_info.html">Account Info</a>
      		</li>
    		 
    		 <li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#featured-categories">Products</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#masthread">Cart</a>
			
      		</li>
      		
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#about">About Us</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#services">Our Services</a>
      		</li>
      		
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#team" tabindex="-1" aria-disabled="true">Our Team</a>
      		</li>
      		<li class="nav-item">
        		<a style="color:black;" class="nav-link" href="#contact">Contact</a>
      		</li>
      		
      		
    		</ul>
  		</div>
		</nav>
		<center>
		<h2>Pesticide World!</h2>
        <b>Search the Available Products: 
          <input id="gfg" type="text" 
                 placeholder="Search here">
        </b><br><br>
		<form method="POST" action="">
		<b>Add Product Id to Cart: 
          <input type="text" name="ProductId" placeholder="Product Id">
			<button type="submit" name="add_cart">Add to Cart</button>
		</b>
		</form>
		<?php
				if(array_key_exists('add_cart', $_POST)){
					$strJson = file_get_contents("product_details.json");
					$decodedJson = json_decode($strJson, true);
					$array = $decodedJson["products"];
					$userInput = $_POST["ProductId"];
					
					for ($x = 0; $x < count($array); $x++) {
						if($array[$x]["id"] == $userInput){
							echo "Added to Cart: " . $array[$x]["pname"];
							//$json_obj = $array[$x]
							//$strJson = file_get_contents("user_cart.json");
							//$decodedJson = json_decode($strJson, true);
							//$user_cart 
						}
					}

					
				}
			?>
        <br>
			<table>
			<tbody id="products">
				<tr>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>Category</th>
				</tr>
				<?php
				// $conn = mysqli_connect("localhost", "root", "", "pesticide");
				// // Check connection
				// if ($conn->connect_error) {
				// die("Connection failed: " . $conn->connect_error);
				// }
				// $sql = "SELECT id, pname, price, category FROM product_details";
				// $result = $conn->query($sql);
				// if ($result->num_rows > 0) {
				// //output data of each row
				// while($row = $result->fetch_assoc()) {
				// echo "<tr><td>" . $row["id"]. "</td><td>" . $row["pname"] . "</td><td>" . $row["price"] . "</td><td>"
				// . $row["category"]. "</td></tr>";
				// }
				// echo "</table>";
				// } else { echo "0 results"; }
				// $conn->close();

				//Grab products array from json
				$strJson = file_get_contents("product_details.json");
				$decodedJson = json_decode($strJson, true);
				$array = $decodedJson["products"];
				for ($x = 0; $x < count($array); $x++) {
					echo "<tr><td>" . $array[$x]["id"]. "</td><td>" . $array[$x]["pname"] . "</td><td>" . $array[$x]["price"] . "</td><td>" . $array[$x]["category"]. "</td></tr>";
				}
				echo "</table>";
				?>
			</tbody>
			</table>
			<script>
            $(document).ready(function() {
                $("#gfg").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#products tr").filter(function() {
                        $(this).toggle($(this).text()
                        .toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        	</script> 
			</center>


<!------About Section------->	
	<section id="about">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
			<h2>About Us</h2>
				<div class="about-content">
			PSD Project.


				</div>
			<button type="button" class="btn btn-primary">Read More>>
			
			</button>
			
			</div>
			<div class="col-md-6 skills-bar">
			<p>Delivery Rate</p>
			<div class="progress">
			<div class="progress-bar" style="width:85%;">85%</div>
			</div>
			
			<p>Customer Growth</p>
			<div class="progress">
			<div class="progress-bar" style="width:75%;">75%</div>
			</div>
			
			<p>Happy Employee</p>
			<div class="progress">
			<div class="progress-bar" style="width:90%;">90%</div>
			</div>
			
			</div>
		</div>
		
	</div>	
		
<!------Services Section------->		
	<section id="services">
	
		<div class="container">
			<h1>Our Services</h1>
			<div class="row services" >
				<div class= "col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-phone"></i>
					</div>
					<h3> 24/7 Support</h3>
					<p>on order related queries</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-shopping-cart"></i>
					</div>
					<h3> Return within 30 days</h3>
					<p>of receiving your order</p>
				</div>
			
				<div class="col-md-4 text-center">
					<div class="icon">
					<i class="fa fa-truck"></i>
					</div>
					<h3>Get free delivery</h3>
					<p>on orders above 99Usd</p>
				</div>
			</div>
		</div>
	
	</section>
	


<!-----Team------->
<section id="team">
	
	<div class="container">
		<h1>Our Team</h1>
		<div class="row">
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Ramakanth Reddy</h2>
				<h3>Team Member</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Zack Hopkins</h2>
				<h3>Team Member</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Harsha Vardhan Reddy</h2>
				<h3>Team Member</h3>
				
			</div>
			
			<div class="col-md-3 profile-pic text-center">
				<div class="img-box">
				<ul>
					<a href="https://www.facebook.com/"><li><i class="fa fa-facebook"></i></li></a>
					<a href="https://twitter.com/login"><li><i class="fa fa-twitter"></i></li></a>
					<a href="https://www.linkedin.com/home"><li><i class="fa fa-linkedin"></i></li></a>
				</ul>
				</div>
				<h2>Karthik Gujjalapudi</h2>
				<h3>Team Member</h3>
				
			</div>
		</div>	
	</div>
	
</section>

<!------COntact------------>	
<section id="contact">	
	
	<div class="container">
		<h1>Get In Touch</h1>
		<div class="row">
			<div class="col-md-6">
				<form class="contact-form">
				<div class="form-group">
				<input type="text" class="form-control" placeholder="Your Name..">
				</div>
				<div class="form-group">
				<input type="number" class="form-control" placeholder="Phone no.">
				</div>
				<div class="form-group">
				<input type="email" class="form-control" placeholder="Email..">
				</div>
				<div class="form-group">
				<textarea class="form-control" rows="4" placeholder="Message.."></textarea>
				</div>
			
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-6 contact-info">
				<div class="follow"><b><i class="fa fa-map-marker"></i>  </b>Saint Louis University</div>
				<div class="follow"><b><i class="fa fa-mobile"></i>  </b>(+1) 123-456-7890</div>
				<div class="follow"><b><i class="fa fa-envelope"></i>  </b>sample@slu.edu</div>
				
				
				<div class="follow"><label><b>Get Social </b></label>
				<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
				<a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a>
				<a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
				<a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a>
				
				</div>
			</div>
			
		</div>

	</div>

</section>

</body>
</html>	