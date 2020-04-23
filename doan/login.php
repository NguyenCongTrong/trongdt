
<!DOCTYPE html>
<html lang="vi-en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
	<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Login</title>
</head>
<body>

	<form class="login-form" action="xuly_login.php" method="post">
		<h1>Login</h1>
		<div class="txtb">
			<input type="text" name="username">
			<span data-placeholder="Username"></span>
		</div>
		<div class="txtb">
			<input type="text" name="password">
			<span data-placeholder="Password"></span>
		</div>
		<input class="logbtn" type="submit" value="Login" name="login">

		<div class="bottom-text">
			Don't have account? <a href="page_signup.php">Sign up</a>
		</div>
	</form>
	<script type="text/javascript">
		$(".txtb input").on("focus",function(){
			$(this).addClass("focus");
		});
		$(".txtb input").on("blur",function(){
			if($(this).val() == ""){
				$(this).removeClass("focus");

			}
		});
	</script>

</body>
</html>
