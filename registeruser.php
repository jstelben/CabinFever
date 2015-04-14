<!DOCTYPE html>
<html>
  <body>
  	<form action="adduser.php" method="post">
  		Email: <input id="email" type="text" name="newemail"><br>
  		Password: <input id="password" type="text" name="newpassword"><br>
  		<input type="submit">
  	</form>
  </body>
</html>
<script>
	function addUser(){
		var userEmail =  $('input[name=email]').val();
		var userPassword =  $('input[name=password]').val();
		$.post(
			"adduser.php",
			{
				newemail: userPassword,
				newpassword: userEmail
			}
		).done(
			
		);
	};
</script>