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
		<form action="/orderNow" method="post">
			{{csrf_field()}}
			<button type="submit" name="orderBtn" value="{{ $book['id'] }}">
				Order this
			</button>
			<input type="hidden" name="bn" value="{{ $book['bookName'] }}">
			<input type="hidden" name="bp" value="{{ $book['price'] }}">
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
