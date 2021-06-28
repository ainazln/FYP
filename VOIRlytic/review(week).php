<?php
session_start();
if (!isset($_SESSION['isLogged_in']))
{
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['email'] = '0';
}

?>
<?php
//include 'track.php'
?>
<!DOCTYPE html>
<html>
<title>Review Analysis</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
<style>
:root {
		background-image: url(1.jpg);
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
	background-position: center;
	background-size: cover;
	padding-left: 5%;
	padding-right: 5%;
	box-sizing: border-box;
	position: relative;
	
}

.levi{
	text-align: right;
	margin-top: -75px;
}
.navbar{
	margin: 0px auto;
	display: flex;
	align-items: center; 
}

ul{
	flex: 1;
	text-align: right;
}

ul li{
	display: inline-block;
	list-style: none;
	margin: 0 25px;
}

ul li a{
	text-decoration: none;
	color: #000;
	padding: 0 10px;
	position: relative;
}

ul li a::after{
	content: '';
	width: 0%;
	height: 10px;
	background: #c56cf0;
	position: absolute;
	left: 50%;
	transform: translateX(-50%);
	top: -55%;
	transition: 0.5s;
}

ul li a:hover::after{
	width: 100%;
}

a.button{
	display: inline-block;
	padding: 0.3em 1.2em;
	margin: 0 0.3em 0.3em 0;
	border-radius: 2em;
	box-sizing: border-box;
	text-decoration: none;
	font-family: 'Roboto',sans-serif;
	font-weight: 300;
	color: #FFFFFF;
	background-color: #c56cf0;
	text-align: center;
	transition: all 0.2s;
}

a.button:hover{
	background-color: #cd84f1;
}

#form_wrapper {
        width: 1100px;
        height: 5500px;
        /* this will help us center it*/
        margin: 50px;
		margin-left: 125px;
        background-color: var(--form_bg);
        border-radius: 50px;
        align: center;
    }
	
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 90%;
  }

.center1 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 16%;
  }

.center2 {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 88%;
  }
</style>
<body>
	<div class="hero">
		<div class="navbar">
			<img src="voirlytic.png" width="350px" height="200px">
			<ul>
				<li><a href="voirlytic.php">Home</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="review.php">Review Analysis</a></li>
				<li><a href="logout.php" class="button">Logout</a></li>
			</ul>			
		</div>
		<div class="levi">
		<?php 
					echo 'Hi, '.$_SESSION['email'].'!';
		?>
		</div>
		<div id="form_wrapper">
		<ul style="align-items:center; margin:25px; padding:20px">
			<li><a href="review.php" class="button">Year</a></li>
			<li><a href="review(month).php" class="button">Month</a></li>
			<li><a href="review(week).php" class="button">Week</a></li>
		</ul><br>
		<div class="center">
		
		<?php 

		include 'lineweek1.html';

		?>
		</div>
		<div class="center1">
		<h2>Last Updated DATE</h2>
		</div><br><br>
		<div class="center2">
		<h2>Review for Sentiment based on the Week</h2>
		<?php 

		include 'listweek.php';

		?>
		</div>
		</div>
	</div>


</body>
</html>
