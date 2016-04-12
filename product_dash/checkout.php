<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
</head>
<body>
			<p style='padding:50px;'>
			Hi <?=$_POST['name']?>! Thanks for purchasing <?=$_POST['quantity']?> <?=$_POST['item']?>(s).<br/>
			An email will be sent to <?=$_POST['email']?>.
			</p>
</body>
</html>