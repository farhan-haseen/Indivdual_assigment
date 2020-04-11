<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
	<h1>User List</h1>

	<a href="/admin_home">Back</a>
	<br>
	<br>

		<table border="2px">
			<tr>
				<th>Username</th>
				<th>Full Name</th>
				<th>Phone</th>
				<th>Address</th>
				<th>Type</th>
				
			</tr>
	
		@foreach($u_list as $userInfo)

			<tr>
				<td>{{$userInfo['username']}}</td>
				<td>{{$userInfo['fullname']}}</td>
				<td>{{$userInfo['phone']}}</td>
				<td>{{$userInfo['address']}}</td>
				<td>{{$userInfo['type']}}</td>
			</tr>

		@endforeach

		</table>

</body>
</html>
