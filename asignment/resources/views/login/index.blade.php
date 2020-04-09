<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome to our book store</h1>
	<h3>Login Page</h3>
	<form action="/checkuser" method="post">
		<!-- @csrf -->
		<!--{{ csrf_field()}} -->	
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Username: <input type="text" name="uname" > <br><br>
		Password: <input type="password" name="password" ><br><br>
		<input type="submit" name="submit" value="Sign In" >
	</form>
	<h3>{{session('msg')}}</h3>
</body>
</html>
