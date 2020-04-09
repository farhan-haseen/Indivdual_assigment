<!DOCTYPE html>
<html>
<head>
	<title>Customer Page</title>
	<style>
		.c1{
			width: 50%;
		}
	</style>
</head>
<body>
	<h1>Book Details!</h1>
	<br>
	<a href="/cust_home">Back</a>
	<br>
	<br>

	@foreach($b_list as $book)
	<div class="c1">
		Name: {{ $book['bookName'] }} <br>
		Price: {{ $book['price'] }} <br>
		Category: {{ $book['category'] }} <br>
		authorName: {{ $book['authorName'] }} <br>
		authorInfo: {{ $book['authorInfo'] }} <br>
		<form action="/view" method="post">
			{{csrf_field()}}
			<button type="submit" name="viewBtn" value="{{ $book['id'] }}">
				Order this
			</button>
		</form>
		<form action="/addtocart" method="post">
			{{csrf_field()}}
			<button type="submit" name="cartBtn" value="{{ $book['id'] }}">
				Add to Cart
			</button>
		</form>
	</div>
	@endforeach

</body>
</html>
