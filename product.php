<?php
				$conn = mysqli_connect("localhost", "root", "", "pesticide");
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT product_id, product_name, price, category FROM product_details";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
				// output data of each row
				while($row = $result->fetch_assoc()) {
				echo "<tr><td>" . $row["product_id"]. "</td><td>" . $row["product_name"] . "</td><td>" . $row["price"] . "</td><td>"
				. $row["category"]. "</td></tr>";
				}
				echo "</table>";
				} else { echo "0 results"; }
				$conn->close();
?>