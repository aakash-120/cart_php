<?php include 'config.php';
include 'function.php';

// include 'index.php';
// include 'products.php';
//include 'dummy.php';
?>
<?php
      session_start();
      
      $sum=0;
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST['name']=="emptycart")
        {   
           
          emptycart();
          
        }
        else if($_POST['name']=="+")
        {
            
            plusQuantity();
           
        }
        else if($_POST['name']=="-")
        {
            
            minQuantity();
           
        }
        else if($_POST['name']=="add to cart")
        {
            
            plusQuantity();
        }
        else if($_POST['name']=="products")
        {
            
            plusQuantity();
        }


        else
        {
          normaldisplay();
        }
        
        
    
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		cart
	</title>
	<link href="cart.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="cart.php" method="post">
		<input type="submit" name="name" style="font-size:24px" id = "btnsub" value="emptycart"></input>
	   </form>
     <br>
<form action="products.php" method="post">
<input type="submit" name="name" style="font-size:24px" id = "btnsub" value="products"></input>
</form>
<br>

<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Quantity</th>
    <th>Price(in rupee)</th>
    <th>Total(in rupee)</th>
    <th>+quantity</th>
    <th>-quantity</th>
  </tr>

<?php 
     foreach($_SESSION['cart'] as $cartproduct)
    {
    if ($cartproduct["quantity"]!=0)
    {

        $sum=$sum+$cartproduct["price"]*$cartproduct["quantity"];
        echo '<tr>
        <td>'.$cartproduct["id"].'</td>
        <td>'.$cartproduct["name"].'</td>
        <td>'.$cartproduct["quantity"].'</td>
        <td>'.$cartproduct["price"].'</td>
        <td>'.$cartproduct["price"]*$cartproduct["quantity"].'</td>
        <td><form action="cart.php" method="post"><input type="text"  style="display:none" name="id" value="'.$cartproduct["id"].'"><input type="submit" name="name" value="+"></form></td>
        <td><form action="cart.php" method="post"><input type="text"  style="display:none" name="id" value="'.$cartproduct["id"].'"><input type="submit" name="name" value="-"></form></td>
      </tr>';
    }
   
  
  }?>
</table>
<?php
    echo '<h3>Grand total in rupee ='.$sum.'</h3>';
?>



</body>
</html>
    

