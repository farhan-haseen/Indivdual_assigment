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
	<br>
	<a href="/cust_home">Back</a> |
	<a href="/cart_order_all">Order all</a>
	<br>
	<br>

	@foreach($c_list as $cart)
	<div class="c1">
		Name: {{ $cart['bookName'] }} <br>
		Price: {{ $cart['price'] }} <br>
		<form action="/cart_delete" method="post">
			{{csrf_field()}}
			<button type="submit" name="viewBtn" value="{{ $cart['cartId'] }}">
				Delete from cart
			</button>
		</form>
	</div>
	@endforeach

</body>
</html>
