<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>Profile</h1>
	
	<form action="/cust_profileUpdate" method="post">

		{{csrf_field()}}
		<table>
			<tr>
				<td>Username</td>
				<td><label  name="username" value="">{{$userInfo['username']}}</label></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password"  name="password" value="{{$userInfo['password']}}"></td>
			</tr>
			<tr>
				<td>Full Name</td>
				<td><input type="text"  name="name" value="{{$userInfo['fullname']}}"></td>
			</tr>
			<tr>
				<td>Phone</td>
				<td><input type="text"  name="Phone" value="{{$userInfo['phone']}}"></td>
			</tr>
			<tr>
				<td>Address</td>
				<td><input type="text"  name="Address" value="{{$userInfo['address']}}"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><button type="submit"  name="submit" value="{{$userInfo['id']}}">Update</button></td>
				<td>
					<a href="/cust_home">Back</a>

				</td>
			</tr>
		</table>

	</form>

	@foreach($errors->all() as $error)
		{{$error}} <br>
	@endforeach

</body>
</html>
