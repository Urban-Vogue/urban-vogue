<?php

session_start();

?>

<!DOCTYPE html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Rancho&display=swap" rel="stylesheet">
<link href="bootstrap.min.css" rel="stylesheet">
<script src="jquery-1.8.2.min.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="ship.css">
<html>

<head>
	<title>Proceed to Buy</title>
</head>

<body>
	<div class="Main">
		<h1 class="Ship">Shipping Details</h1>
		<div class="Details">
			<div class="det">
				<h2><?php echo $_SESSION['username']; ?></h2>
				<h2><?php echo $_SESSION['address']; ?></h2>
				<h2><?php echo $_SESSION['email']; ?></h2>
				<h2><?php echo $_SESSION['mobile']; ?></h2>
			</div>
			<div class="but">
				<a href="../Profile/profile.php" style="text-decoration: none; color: white;"><input type="submit" name="submit" class="submit" value="Change details"></a>
			</div>
		</div>
	</div>

	<h1 class="Ship">Product Details</h1>

	<div class="Main-2">
		<div class="det">
			<h2><?php echo $_SESSION['brand']; ?></h2>
			<h2><?php echo $_SESSION['color']; ?></h2>
			<h2><?php echo $_SESSION['description']; ?></h2>
			<h2>Rs.<?php echo $_SESSION['price']; ?></h2>
			<h2>Non-refundable</h2>
			<h2>Non-returnable</h2>
			<h2>No extra delivery charges</h2>
			<h2>Only Cash on Delivery right now</h2>
		</div>

		<div class="image">
			<img src="<?php echo $_SESSION['link']; ?>">
		</div>
	</div>
	<div class="bill">
		<h1>Total Amount</h1>
		<h2>Rs.<?php echo $_SESSION['price']; ?></h2>
	</div>
	<label style="font-size: 25px;">Have you opted for the custom clothing? </label>
	<input type="checkbox" id="huck" onclick="price();" style="width: 20px; height:20px">
	<div class="bill">
		<h1>Updated Amount</h1>
		<h2 id="val">Rs. </h2>
	</div>

	<input data-bs-target="#pop" data-bs-toggle="modal" type="submit" name="submit" class="submit" value="Place Order">

	<div class="modal fade" id="pop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Congratulations!</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Your order has been placed successfully and will be reach you within 5-6 working days.
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
					<button type="button" class="btn btn-primary"><a href="../Main_page/MainPage.php" style="color: white; text-decoration:none;">Continue Shopping</a></button>
				</div>
			</div>
		</div>
	</div>



</body>
<script>
	function price() {
		if (document.getElementById('huck').checked == true) {
			var amt = <?php echo $_SESSION['price'] ?> + 400;
			document.getElementById('val').innerHTML = 'Rs.' + amt;
		} else {
			var amt = <?php echo $_SESSION['price'] ?>;
			document.getElementById('val').innerHTML = 'Rs.' + amt;
		}
	}
</script>

</html>