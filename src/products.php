<?php include 'config.php'?>
<?php include 'function.php'?>
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style.css" type="text/css" rel="stylesheet">

</head>
<body>
   <?php include('header.php');?>
	<div id="main">
	
		<div id="products">
		<?php //product listing 
		productlisting($products);
		?>
		</div>
		<div id="cart">
			
		<form action="cart.php" method="post">
		<input type="submit" name="name" style="font-size:24px" id = "btnsub" value="viewcart"></input>
	   </form>
       </div>


		</div>
	</div>
	<?php include('footer.php');?>
</body>
</html>