<!DOCTYPE html>
<html>
<head>
	<title>Payment</title>
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
	<h1>Searching Page</h1>
	<a href="/cust_home">Back</a>
	<br>
	<br>
	<form action="/Search_con" method="post">
		{{csrf_field()}}
		<input type="text" placeholder="Search..." name="sc" class="s1">
		<br>
		<input type="submit" value="Go!" class="s1">
	</form>
	
	<br>
	<br>
	
	@foreach($b_list as $book)
	<div class="c1">
		Name: {{ $book['bookName'] }} <br>
		Price: {{ $book['price'] }} <br>
		Author: {{ $book['authorName'] }} <br>
		Category: {{ $book['category'] }} <br>
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
