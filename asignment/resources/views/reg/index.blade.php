<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<h1>Registration</h1>
	
	<form action="/newAccount" method="post">

		{{csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text"  name="username" value="{{old('username')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"  name="password" value="{{old('password')}}"></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><input type="text"  name="name" value="{{old('name')}}"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text"  name="Phone" value="{{old('Phone')}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text"  name="Address" value="{{old('Address')}}"></td>
			</tr>
			<tr>
				<td>Type</td>
				<td>
					<select name="type">
						<option>customer</option>
						<option>admin</option>
					</select>
				</td>
				<!-- <td><input type="text"  name="type" value="{{old('type')}}"></td> -->
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit"  name="submit" value="Confirm"></td>
				<td>
					<a href="/login">Back</a>

				</td>
			</tr>
		</table>

	</form>

	@foreach($errors->all() as $error)
		{{$error}} <br>
	@endforeach

</body>
</html>
