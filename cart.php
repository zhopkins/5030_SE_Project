<!DOCTYPE html>
<html>
<head>
<title>Your Shopping Cart</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
</head>

<body>

<div id="site">
	<div id="content">
		<h1>Your Shopping Cart</h1>
			<table class="shopping-cart">
			  <thead>
				<tr>
					<th scope="col">Item Name</th>
					<th scope="col">Price</th>
				</tr>
				<?php
				$conn = mysqli_connect("localhost", "root", "", "pesticide");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT pname, price FROM cart_details";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["pname"]. "</td><td>" . $row["price"] . "</td></tr>";
				}
				echo "</table>";
				}
				$conn->close();
				?>
			  </thead>
			  <tbody>
			  
			  </tbody>
			</table>
			<ul id="shopping-cart-actions">
				<li>
				<form method="POST" action="empty_cart.php">
					<button type="submit" name="delete" id="empty-cart">Empty Cart</button>
				</form>
				</li>
				<li>
				<form method="POST" action="index.php">
					<button type="submit" name="continue" id="continue">Continue Shopping</button>
				</form>
				</li>
				<li>
				<form method="POST" action="checkout.html">
					<button type="submit" name="checkout" id="checkout">Go To Checkout</button>
				</form>
				</li>
			</ul>
	</div>
	
	

</div>

<footer id="site-info">
		PESTICIDE WORLD! 
	</footer>

</body>
</html>	