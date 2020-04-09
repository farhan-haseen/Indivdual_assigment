<!DOCTYPE html>
<html>
<head>
	<title>Adding New Book</title>
</head>
<body>
	<br>
	<br>
	
	<form action="/newbook_2" method="post">

		{{csrf_field()}}
		<table>
			<tr>
				<td>Book Name:</td>
				<td><input type="text"  name="Bookname" value=""></td>
			</tr>
			<tr>
				<td>Price:</td>
				<td><input type="text"  name="Price" value=""></td>
			</tr>
			<tr>
				<td>Category:</td>
				<td><input type="text"  name="Category" value=""></td>
			</tr>
			<tr>
				<td>Author Name:</td>
				<td><input type="text"  name="Authorname" value=""></td>
			</tr>
			<tr>
				<td>Author Info:</td>
				<td><textarea  name="Authorinfo" value=""></textarea></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Confirm"></td>
				<td>
					<a href="/admin_home">Back</a>

				</td>
			</tr>
		</table>

	</form>

	@foreach($errors->all() as $error)
		{{$error}} <br>
	@endforeach

</body>
</html>
