<?php
session_start();
require_once('config.php');


$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);


?>



<html>
<head>
	<title>Shop - Face</title>
	<link rel="shortcut icon" href="makeup.png" sizes="32x32">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>

<style type="text/css">
body{
	margin: 0;
	background-color: pink;
   	}
#logo{
	padding-top: 0.7%;			
	background-color: #cc0099;
	width: 10%;
	height: 11%;
	float: left;
	position: fixed;
		}
#navbar ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #cc0099;   
    margin-left: 14.3%;
    font-size: 16px;
}

#navbar li {
    float: left;
    display: inline-block;
}

#navbar li a {
    display: block;
    color: white;
    text-align: center;
    padding: 20px 4.5em;
    text-decoration: none;
}

#navbar a:hover:not(.active) {
    background-color: #111;
}

#navbar li a.active {
    background-color:#4CAF50;
}


.content{
	margin-left: 15%;
	margin-top: 1%;	
	
}

.box img{
	width: 100px;
    height:50px;
	padding: 1em;
}

.box{
	margin-top: 5px;
}

p{
	text-align: center;
	font-size: 1.5em;
}

.purchase{	
	width: 40%;	
	margin-left: 30%;
}


.row{
	margin-top: 1%;
    
}

.box{
	border-style: solid;
	border-color: FF33D3;
}

/* FOOTER STARTS */

footer{
	font-size: 12px;
	padding: 20px 0;
}

footer .col-sm-6{
	display: flex;
	justify-content: flex-end;
}

footer ul{
	list-style: none;
}

footer li img{
	width: 32px;
	height: 32px;
}

/* FOOTER ENDS */



.container .row .col-sm-4 .box:hover img {

}

.container .row .col-sm-3 .box:hover img {
	-webkit-transform: scale(1.3);
	transform: scale(1.3);
}

.container h3{
	color: FF33D3;
}
.container h4{
	color:FF33D3;
}
/* BACK TO TOP STARTS */

a.back-to-top{
	width: 60px;
	height: 60px;
	text-indent: -9999px;
	position: fixed;
	z-index: 999;
	right: 20px;
	bottom: 20px;
	background: url("up-arrow.png") no-repeat center 43%;
	-webkit-border-radius: 30px;
	-moz-border-radius: 30px;
	border-radius: 30px;
}

/* BACK TO TOP ENDS */

/* ADD TO CART BUTTON STARTS */
#myButton{
	-moz-box-shadow: 0px 0px 8px 2px #3dc21b;
	-webkit-box-shadow: 0px 0px 8px 2px #3dc21b;
	box-shadow: 0px 0px 8px 2px #3dc21b;
	background-color:#cc0099;
	-moz-border-radius:28px;
	-webkit-border-radius:28px;
	border-radius:28px;
	border:1px solid pink;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Trebuchet MS;
	font-size:17px;
	padding:3px 0px;
	text-decoration:none;
	text-shadow:0px 1px 0px #2f6627;
	margin-bottom:10px;
	width: 35%;
}


#myButton:hover {
	background-color:#5cbf2a;
	position:relative;
	top:5px;
}

/* ADD TO CART BUTTON ENDS */
#sidebar ul {    
    margin: 0;
    padding: 0;
    width: 14%;
    background-color: pink;
    position: fixed;
    height: 100%;    
    font-size: 15px;
    margin-top: 5%;
}

#sidebar li {
    display: block;
    color: #000;
    padding: 8px 8px;
    text-decoration: none;
}

#sidebar li a {
    display: block;
    color: #000;
    padding: 8px 0px;
    text-decoration: none;
}

#sidebar li a.active {
    background-color: pink;
    color: white;
}

#sidebar li a:hover:not(.active) {
    /*background-color: #555;*/
    background-color: #73e567;
    color: white;
}
	</style>
	
</head>

<body>
<div id="sidebar">

<div id="logo">
	<a href="FirstPage.html">
		<img src="makeup.png" width="40%">
	</a>
</div>

	<ul>
		
		<li><a href="#palete"> <table><tr><td><img src="face1.jpg" width="20%" /></td>
		<td>&nbsp;Face Make-up</td></tr></table></a></li>

		<li><a href="#acc"><table><tr><td><img src="9.jpg" width="60%" /></td>
		<td>&nbsp;Accessories</td></tr></table></a></li>
		<li>&nbsp;</li>
	
		<li><a href="#cart"><table><tr><td><img src="cos.png" width="40%"/></td>
			<td>&nbsp;Coș de cumpărături</td></tr></table></a></li>

		<li>&nbsp;</li>		
		
		
	</ul>
</div>


<div id="navbar">
<span>
	<ul>	
		<li style="float:right;">
			<a href="logout.php"> 
			<table><tr><td><img src="out.png" style="width:40px;height:40px;"/></td>
			<td>&nbsp;Logout</td></tr></table></a>
				</span>
		</li>
		
		<li style="float:right;">
		<a href="view_cart.php"><table><tr><td><img src="cos.png"  style="width:40px;height:40px;" /></td>
		<td>&nbsp;Checkout&nbsp;</td></tr></table></a>
			
		</li>
		
		
		
	</ul>
	

</div>



<!-- BACK TO TOP-->
<a href="#" class="back-to-top">Back To Top </a>



<div class="content">
	<section class="container">
	
<div id="cart">
<?php


if(isset($_SESSION["cart_products"]) && count($_SESSION["cart_products"])>0)
{
	
	echo '<h3>Your Shopping Cart</h3>';
	echo '<form method="post" action="cart_update.php">';
	echo '<table width="100%"  cellpadding="6" cellspacing="0">';
	echo '<thead><tr><th>Quantity</th><th>Category</th><th>Name</th><th>Size</th><th>Remove</th></tr></thead>';
	echo '<tbody>';


	$total =0;
	$b = 0;


	foreach ($_SESSION["cart_products"] as $cart_itm)
	{
		$fandom = $cart_itm["fandom"];
		$category = $cart_itm["category"];
		$product_name = $cart_itm["product_name"];
		$product_qty = $cart_itm["product_qty"];
		$product_price = $cart_itm["product_price"];
		$product_code = $cart_itm["product_code"];
		
		$bg_color = ($b++%2==1) ? 'odd' : 'even'; //zebra stripe	

		

		echo '<tr class="'.$bg_color.'">';
		echo '<td><input type="text" size="2" maxlength="2" name="product_qty['.$product_code.']" value="'.$product_qty.'" /></td>';
		echo '<td>'.$category.'</td>';
		echo '<td>'.$product_name.'</td>';
		echo '<td><input type="checkbox" name="remove_code[]" value="'.$product_code.'" /> Remove</td>';
		echo '</tr>';
		$subtotal = ($product_price * $product_qty);
		$total = ($total + $subtotal);
	}

	echo '<tr><td>&nbsp;</td></tr>';
	echo '<tr>';
	
	echo '<td>&nbsp;</td>';
	echo '<td>';
	echo '<button type="submit" id="myButton">Update</button></td>';


	echo '<td><a href="view_cart.php" id="myButton" style="width: 18%; padding-left: 8px;">Checkout</a>';
	echo '</td>';
	echo '</tr>';
	echo '</tbody>';
	echo '</table>';
	
	$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
	echo '</form>';
	

}

?>
</div>

<h3><center>Body Make-up</center></h3>
<div class="row" id="palete">

<?php
function createConnection() {
	$db_user = "root";
	$serverName = "localhost";
    $db_pass = '';
    $db_name = "users";
	
	$conn = mysqli_connect($serverName, $db_user, $db_pass, $db_name);
	
	if( $conn->connect_error ) {
		die("Connection failed: " . $conn->connect_error);
	}
	
	return $conn;
}
if(isset($_POST)){
$conn = createConnection();
$sql="SELECT product_code, product_name, product_img_name, price FROM produse WHERE category='body' AND fandom='body'";
$results = $conn->query($sql);
if($results){ 
$products_item = '<ul style="list-style-type: none;">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
 echo <<< EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<center><img src="{$obj->product_img_name}"style="width:300px;height:400px;"></center>
	<p align="center">{$obj->product_name}</p>
	<p align="center" style="font-size: 1.2em;">{$currency}{$obj->price} </p>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	
	<input type="hidden" name="type" value="add" />
     <input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center">
	<label>Quantity: </label>
	<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;
	<button type="submit" class="add_to_cart" id="myButton">Add to cart</button> 
	</div>
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$conn->close();

}
}
?>    
</div>




<h4><center>Make-up Accessories</center></h4>
<div class="row" id="acc">

<?php
function createConnectionn() {
	$db_user = "root";
	$serverName = "localhost";
    $db_pass = '';
    $db_name = "users";
	
	$con = mysqli_connect($serverName, $db_user, $db_pass, $db_name);
	
	if( $con->connect_error ) {
		die("Connection failed: " . $con->connect_error);
	}
	
	return $con;
}
if(isset($_POST)){
$con = createConnectionn();
$sql="SELECT product_code, product_name, product_img_name, price FROM produse WHERE category='acc' AND fandom='acc'";
$results = $con->query($sql);
if($results){ 
$products_item = '<ul style="list-style-type: none;">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
 echo <<< EOT
	
	<div class="col-sm-4">
	<div class="box">
	<li class="product">
	<form method="post" action="cart_update.php">	
	<center><img src="{$obj->product_img_name}"style="width:300px;height:400px;"></center>
	<p align="center">{$obj->product_name}</p>
	<p align="center" style="font-size: 1.2em;">{$currency}{$obj->price} </p>
	<input type="hidden" name="product_code" value="{$obj->product_code}" />
	<input type="hidden" name="type" value="add" />
	<input type="hidden" name="return_url" value="{$current_url}" />
	<div align="center">
	<label>Quantity: </label>
	<input type="text" size="2" maxlength="2" name="product_qty" value="1"/>&nbsp;&nbsp;
	<button type="submit" class="add_to_cart" id="myButton">Add to cart</button>
	</div>
	</form>
	</li>
	</div>
	</div>
	
EOT;
}
$con->close();

}
}
?>    
</div>
</section>
</div>




<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; <b>Make-up Shop</b>
		</p>

		<ul class="col-sm-6">
			
			<li class="col-sm-1">
				<a href="https://www.facebook.com/MakeupShopRomania/" target="_blank">
					<img src="facebook.png">
				</a>
			<li class="col-sm-1">
				<a href="https://www.instagram.com/makeupshopromania/?hl=ro" target="_blank">
					<img src="instagram.png">
				</a>
			</li>
			<li class="col-sm-1">
			<a href="https://www.youtube.com/watch?v=6S0nMaa_Oyw" target="_blank">
				<img src="youtube.png">
				</a>
			</li>
		</ul>
	</div>
</footer>

</body>
</html>
