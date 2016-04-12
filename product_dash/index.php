<!DOCTYPE html>
<html>
<head>
	<title>Product Dashboard</title>
</head>
<body>


		<h1>Product Demo</h1>
		<form action='checkout.php' method='post'>
			Your Name: 	<input type='text' name='name'/>
			<br>Email: 		<input type='text' name='email'/>
			<br>Purchasing: <select name='item'>
							<option value='Coding Dojo Shirt'>Coding Dojo Shirt</option>
							<option value='Coding Dojo Cup'>Coding Dojo Cup</option>
						</select>
		 	<br>Quantity: 	<input type='text' name='quantity'/>
		 				<br><input type='submit' value='Purchase' />	
		</form>

</body>
</html>