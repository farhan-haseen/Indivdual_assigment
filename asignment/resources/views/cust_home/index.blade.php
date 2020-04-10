<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
	<style>
		.c1
		{
			background-color: black;
			color: white;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<h1>Welcome Customer!</h1>
	<br>
	<a href="/logout">Logout</a> |
	<a href="/cust_profile">Check Profile</a> |
	<a href="/cart_payment">Payment</a> 


	<br>
	<br>

	@foreach($b_list as $book)
	<div class="c1">
		Name: {{ $book['bookName'] }} <br>
		Price: <br>
		<form action="/view" method="post">
			{{csrf_field()}}
			<button type="submit" name="viewBtn" value="{{ $book['id'] }}">
				View
			</button>
		</form>
		<form action="/addtocart" method="post">
			{{csrf_field()}}
			<button type="submit" name="cartBtn" value="{{ $book['id'] }}">
				Cart
			</button>
		</form>
	</div>
	@endforeach

</body>
</html>
