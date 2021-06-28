<?php
if (!isset($_SESSION['isLogged_in']))
{
	
include ("dbconnect.php");
mysqli_select_db($conn,'voirlytic');	
$_SESSION['isLogged_in'] = FALSE;
$_SESSION['email'] = 'guest';
}
?>

<?php
	session_start();
	
	if(isset($_SESSION['email']))
	{
		include ("dbconnect.php");
	mysqli_select_db($conn,'voirlytic');
		$email = $_SESSION['email'];
		
		$query = "SELECT * FROM account
						 where email = '$email'";
		$result = mysqli_query($conn, $query) or die ('SQL error');
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	}
	
?>
<?php
//include 'track.php'
?>
<!DOCTYPE html>
<html>
<title>Change Password</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
  crossorigin="anonymous">
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
        height: 600px;
        /* this will help us center it*/
        margin: 50px;
		margin-left: 125px;
        background-color: var(--form_bg);
        border-radius: 50px;
        /* make it a grid container*/
        display: grid;
        /* with two columns of same width*/
        grid-template-columns: 1fr 1fr;
        /* with a small gap in between them*/
        grid-gap: 5vw;
        /* add some padding around */
        padding: 5vh 15px;
    }

.input_container {
        background-color: var(--input_bg);
        /* vertically align icon and text inside the div*/
        display: flex;
        align-items: center;
        padding-left: 20px;
    }

.input_container:hover {
        background-color: var(--input_hover);
    }
	
.input_container,
    #input_submit {
        height: 60px;
        /* make the borders more round */
        border-radius: 30px;
        width: 95%;
    }
	
#form_left {
        /* center the image */
        display: flex;
        justify-content: center;
        align-items: center;
    }

#form_left img {
        width: 350px;
        height: 350px;
    }

#form_right {
        display: grid;
        /* single column layout */
        grid-template-columns: 1fr;
        /* have some gap in between elements*/
        grid-gap: -10px;
        padding: 10% 3%;
		margin-top: 0px;
		font-size: 20px;
		margin-bottom: 10px;
		position: center;
    }
	
#input_submit {
        height: 50px;
        /* make the borders more round */
        border-radius: 30px;
        width: 99%;
		margin-top: 0px;
		align-items: center;
		text-decoration: none;
    }
	
.input_field {
        /* customize the input tag with lighter font and some padding*/
        color: var(--icon_color);
        background-color: inherit;
        width: 90%;
        border: none;
        font-size: 1.3rem;
        font-weight: 400;
        padding-left: 50px;
    }
	
.input_field:hover,
    .input_field:focus {
        /* remove the outline */
        outline: none;
    }

#input_submit {
        /* submit button has a different color and different padding */
        background-color: var(--submit_bg);
        padding-left: 110px;
		padding-top: 15px;
		padding-right: 110px;
		padding-bottom: 15px;
        color: white;
		
    }
	
#input_submit:hover {
        background-color: var(--submit_hover);
        /* simple color transition on hover */
        transition: background-color, 1s;
        cursor: pointer;
    }

h1{
        text-align: center;
    }

/* shift it a bit lower */
#create_account {
        display: block;
        position: relative;
        top: 30px;
    }

a {
        /* remove default underline */
        text-decoration: none;
        color: var(--submit_bg);
        
    }
	
a:hover {
        color: var(--submit_hover);
    }

i {
        color: var(--icon_color);
    }
</style>
<body action="track.php">
	<div class="hero">
		<div class="navbar">
			<img src="voirlytic.png" width="350px" height="200px" onclick="home.php">
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
		<form method="post" action="editpassword.php">
		<div id="form_wrapper">
            <div id="form_left">
                <img src="signup.jpg" alt="computer icon">
            </div>
            <div id="form_right">
                <h1>Change Password</h1>
				<div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Old Password" type="text" name="oldpw" id="oldpw" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input placeholder="New Password" type="text" name="newpw" id="newpw" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-redo-alt"></i>
                    <input  placeholder="Confirm New Password" type="text" name="newpw2" id="newpw2" class='input_field' required>
                </div>
                <input type="submit" value="Submit" name="add" id='input_submit' class='input_field'>
				<input type="submit" value="Back" onclick="history.back()" name="add" id='input_submit' class='input_field'>
            </div>
        </div>
		</form>		
	</div>


</body>
</html>
