<!DOCTYPE html>
<html lang="vi-en" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/style.css">
	<script type="text/javascript" charset="utf-8" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title>Sign up members</title>
</head>
<body>

	<form class="signup-form" action="xuly_signup.php" method="post">
		<h1>Sign up members</h1>
		<div class="txtb">
			<input type="text"  name="fname">
			<span data-placeholder="First name"></span>
		</div>
		<div class="txtb">
			<input type="text" name="lname">
			<span data-placeholder="Email"></span>
		</div>
		<div class="txtb">
			<input type="text" name="uname">
			<span data-placeholder="password"></span>
		</div>
		<div class="txtb">
			<input type="text" name="pass">
			<span data-placeholder="Enter the password"></span>
		</div>
		<div class="txtb">
			<input type="text" name="phone">
			<span data-placeholder="Phone number"></span>
		</div>
		<div class="txtb">
			<input type="text" name="add">
			<span data-placeholder="Address"></span>
		</div>
		<input class="logbtn" type="submit" value="Sign up">
		<a href="alo.php">
			<button class="logbtn">
			Sign in
			</button>
		</a>


	</form>
	<script type="text/javascript">
		$(".txtb input").on("focus",function(){
			$(this).addClass("focus");
		});
		$(".txtb input").on("blur",function(){
			if($(this).val() == "")
			$(this).removeClass("focus");
		});
	</script>

</body>
</html>