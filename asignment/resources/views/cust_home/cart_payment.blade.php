<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
</head>
<body>
	<h1>Choose a payment option</h1>
	<br>
	<br>
	<form action="/cart_pm_selected" method="post">
		{{csrf_field()}}
		<select name="type">
			<option>Credit</option>
			<option>Bkash</option>
			<option>Dbbl</option>
		</select>
		<br>
		<br>
		<input type="submit" value="Confirm">
	</form>
	
	
	<br>
	<br>
	<a href="/cust_home">Back</a>
	
	

</body>
</html>