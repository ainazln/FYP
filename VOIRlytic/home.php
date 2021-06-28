<!DOCTYPE html>
<html>
<title>VOIRlytic</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
<style>
:root {
		background-image: url(bg.jpg);
        --form_bg: #ffffff;
        --input_bg: #E5E5E5;
        --input_hover:#eaeaea;
        --submit_bg: #be2edd;
        --submit_hover: #D980FA;
        --icon_color:#6b6b6b;
    }
	
*{
	margin: 0;
	padding: 0;
	font-family: 'Dosis', sans-serif;
}

.hero{
	width: 100%;
	height: 100vh;
	background-image: url(bg.jpg);
	background-position: center;
	background-size: cover;
	padding-left: 5%;
	padding-right: 5%;
	box-sizing: border-box;
	position: relative;
}

.navbar{
	margin: 0 auto;
	display: flex;
	text-align: center; 
	justify-content: space-around;
}

.banner{
	display: flex;
	margin-top: 50px;
	margin-left: 200px;
}

.left-column{
	flex-basis: 50%;
	position: center;
}

.right-column{
	flex-basis: 50%;
	position: center;
	margin-left: 70px;
}

.left-column h1{
	font-size: 70px;
	font-family: 'Dosis', sans-serif;
}

.left-column h3{
	font-size: 25px;
	margin-bottom: 50px;
	font-family: 'Dosis', sans-serif;
}

span{
	color: #be2edd;
	font-family: 'Dosis', sans-serif;
}

.btn a{
	margin: 50px;
	padding: 20px 50px;
	margin-right: 25px;
	outline: none;
	border: 1px solid #be2edd;
	border-radius: 30px;
	cursor: pointer;
	color: #be2edd;
	background: transparent;
	text-decoration: none;
}

.btn .primary-btn{
	background: linear-gradient(#be2edd, #be2edd);
	box-shadow: 0 2px 15px rgba(248, 38, 103, 0.26);
	color: #fff;
}
</style>
<body>
	<div class="hero">
		<div class="navbar">
			<img src="voirlytic.png" width="450px" height="250px">
		</div>
		<div class="banner">
			<div class="left-column">
				<h1>VOIR <span>PRODUCT REVIEW</span><h1>
				<h3>This website will give the <span>sentiment analysis</span> for the <span>product review</span> based on the VOIR brand</h3>
			<div class="btn">
				<a type="submit" href="login.php" class="primary-btn">Login</a>
				<a type="submit" href="signup.php" >Register</a>
			</div>
			</div>
			<div class="right-column">
				<img src="7.gif" width="80%" height="90%">
			</div>
		</div>
	</div>


</body>
</html>
