
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login Admin</title>
<link rel="stylesheet" type="text/css" href="../css/login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="proses_login.php" method="post">
			<h1>Login Admin</h1>
			<div>
				<input type="text" placeholder="Username" id="username" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" id="password" name="password" />
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>