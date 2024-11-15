<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dahlia Supermarket</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Poppins', sans-serif;
}

section {
	position: relative;
	width: 100%;
	min-height: 100vh;
	padding: 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
	background: #fff;
}

header {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	padding: 20px 100px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

header .logo {
	position: relative;
	max-width: 200px;
}

.content {
	position: relative;
	width: 100%;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.content .textBox {
	position: relative;
	max-width: 600px;
}

.content .textBox h2 {
	color: #333;
	font-size: 2.5em ;
	line-height: 1.4em;
	font-weight: 500;
}

.content .textBox h2 span {
	color: #869F77;
	font-size: 1em ;
	font-weight: 900;
}

.content .textBox p {
	color: #333;
}

.content .textBox a {
	display: inline-block;
	margin-top: 20px;
	padding: 8px 20px;
	background: #869F77;
	color: #fff;
	border-radius: 40px;
	font-weight: 500;
	letter-spacing: 1px;
	text-decoration: none;
}

.content .imgBox {
	width: 600px;
	display: flex;
	justify-content: flex-end;
	padding-right: 50px;
	margin-top: 50px;
}

.content .imgBox img {
	max-width: 500px ;
}

.circle {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: #869F77;
	clip-path: circle(600px at right 800px);
}
</style>
<body>
	<section>
		<div class = "circle"></div>
			<header>
				<a href="index.php"><img src="img/logo.png" class="logo"></a>
			</header>
			<div class="content">
				<div class="textBox">
					<h2>It's not just a Supermarket<br>It's <span>Dahlia Supermarket</span></h2>
					<p>Dahlia Supermarket is a rapidly growing chain of refreshing supermarket that meets multiracial consumer's needs for groceries and services, offering unbeatable value and absolute convenience.</p>
					<a href="signup.php">Get Started</a>
					<a href="login.php">  Sign In  </a>
				</div>
				<div class="imgBox">
					<img src="img/index logo.png">
				</div>
			</div>
	</section>
</body>
</html>