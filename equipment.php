<?php
session_start();
$connect = mysqli_connect('localhost', 'root', '', 'agricul_farm');

if (isset($_POST["add_to_cart"])) {
	if (isset($_SESSION["shopping_cart"])) {
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if (!in_array($_GET["id"], $item_array_id)) {
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'item_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		} else {
			echo '<script>alert("Item Already Added")</script>';
		}
	} else {
		$item_array = array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if (isset($_GET["action"])) {
	if ($_GET["action"] == "delete") {
		foreach ($_SESSION["shopping_cart"] as $keys => $values) {
			if ($values["item_id"] == $_GET["id"]) {
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="equipment.php"</script>';
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Agricul Farm</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<style>
	body {
		padding: 0px;
		margin: 0px;
	}

	ul {

		list-style-type: none;
		background-color: #0f8d39;
		width: 100%;
		height: 50px;
		margin-top: 0px;

	}

	li {
		float: left;
		margin-left: 30px;
		margin-top: 15px;
	}

	li:hover {
		opacity: 0.8;
	}

	a {
		text-decoration: none;
		color: white;
		font-size: 20px;
		font-weight: bold;
	}

	.button {
		background-color: #0f8d39;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: block;
		font-size: 16px;
		width: 40%;
		margin: 30px 20px;
	}

	/*footer*/
	.footer {
		min-height: 25vh;
		width: 100%;
		background-color: #0f8d39;
		margin-top: 20px;
		color: white;
	}

	.footer p {
		color: #fff;
		text-align: left;
	}

	.footer-row {
		display: flex;
		position: relative;
		justify-content: space-between;
		margin-top: 20px;
	}

	.footer-col {
		width: 80%;
		margin-top: 40px;
		margin-left: 1%;
		position: relative;
		overflow: hidden;
	}

	.footer-row img {
		margin-top: 1.5%;
		margin-left: 10%;
		display: flex;
		width: 5%;
		height: 5%;
		border-radius: 200px;
	}
</style>

<body>
<?php include 'header2.php' ?>

<br />
<div class="container">
	<br />
	<br />
	<br />
	<h3 align="center">Agriculture Equipment | Agricultural Machine</h3><br />
	<br /><br />
	<?php
	$query = "SELECT * FROM tbl_product ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if (mysqli_num_rows($result) > 0) {
		while ($row = mysqli_fetch_array($result)) {
			?>
			<div class="col-md-4">
				<form method="post" action="equipment.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;"
						align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info">
							<?php echo $row["name"]; ?>
						</h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success"
							value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
		}
	}
	?>

	<div style="clear:both"></div>
	<br />
	<h3>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Order Details</h3>
	<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th width="40%">Item Name</th>
				<th width="10%">Quantity</th>
				<th width="20%">Price</th>
				<th width="15%">Total</th>
				<th width="5%">Action</th>
			</tr>
			<?php
			if (!empty($_SESSION["shopping_cart"])) {
				$total = 0;
				foreach ($_SESSION["shopping_cart"] as $keys => $values) {
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td>
							<?php echo $values["item_quantity"]; ?>
						</td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
						<td><a href="equipment.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span
									class="text-danger">Remove</span></a></td>
					</tr>
					<?php
					$total = $total + ($values["item_quantity"] * $values["item_price"]);
				}
				?>
				<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$ <?php echo number_format($total, 2); ?></td>
					<td></td>
				</tr>
				<?php
			}
			?>

		</table>
		<a href="paypaltask/index.php" class="button">Pay Now</a>
	</div>

</div>

</div>
<br />
<!--footer-->

<section class="footer">

	<div class="footer-row">
		<img src="images/logo1.jpg" alt="">
		<div class="footer-col">
			<h1>Agricul Farm</h1>
			<p>Ius case noluisse iracundia ne, mei no possim- <br> offendit explicari. Vel ea nulla doming recteque.
			</p>
		</div>

		<div class="footer-col">
			<h2>Contact Us</h2>
			<p>Address: 5611 Wellington Road,<br> Suite 115, Gainesville, VA 20155</p>
			<p>Tell: 800 853 6429</p>
			<p>email@example.com</p>


		</div>

		<div class="footer-col">
			<h2>Usefull Links</h2>
			<p>About Us</p>
			<p>Services</p>
			<p>News</p>
			<p>Career</p>
		</div>

		<div class="footer-col">
			<h2>Social Media</h2>
			<p>Twitter</p>
			<p>Facebook</p>
			<p>Instragram</p>
		</div>


	</div>



</section>


</body>

</html>

<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
$output = array();
foreach($array as $keys => $values)
{
$output[] = $values[$column_name];
}
return $output;
}*/
?>