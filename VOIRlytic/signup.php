<?php   
		//TO ADD DATA
		if (isset($_POST['add'])) {
			//$id = addslashes($_POST['id']);
			$name = addslashes($_POST['name']);
			$email = addslashes($_POST['email']);
			$pass = addslashes($_POST['pass']);
			$pass1 = addslashes($_POST['pass1']);
			
			
			include 'dbconnect.php';
			mysqli_select_db($conn,'voirlytic');
			
			$query = "INSERT INTO account (name, email, pass , pass1) VALUES ('$name', '$email', '$pass', '$pass1')";
			$result = mysqli_query($conn,$query);
			if ($result)
				echo "<script type='text/javascript'>alert('Add Success!')</script>";
			else
				echo "<script type='text/javascript'>alert('Add Failed!')</script>";
				
		}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis&display=swap">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" 
	crossorigin="anonymous">
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

* {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

body {
        /* make the body full height*/
        height: 100vh;
        /* set our custom font */
        font-family: 'Roboto',
        sans-serif;
        /* create a linear gradient*/
        background-image: linear-gradient(to right, var(--body_gradient_left), var(--body_gradient_right));
        display:flex;
    }

#form_wrapper {
        width: 1000px;
        height: 600px;
        /* this will help us center it*/
        margin: 60px;
		margin-left: 270px;
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
        grid-gap: 15px;
        padding: 10% 3%;
		margin-top: 0px;
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
        width: 100%;
    }

.input_field {
        /* customize the input tag with lighter font and some padding*/
        color: var(--icon_color);
        background-color: inherit;
        width: 90%;
        border: none;
        font-size: 1.3rem;
        font-weight: 400;
        padding-left: 30px;
    }
	
.input_field:hover,
    .input_field:focus {
        /* remove the outline */
        outline: none;
    }

#input_submit {
        /* submit button has a different color and different padding */
        background-color: var(--submit_bg);
        padding-left: 0;
        font-weight: bold;
        color: white;
        text-transform: uppercase;
    }
	
#input_submit:hover {
        background-color: var(--submit_hover);
        /* simple color transition on hover */
        transition: background-color,
            1s;
        cursor: pointer;
    }
	
h1, span {
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
        font-weight: bold;
    }
	
a:hover {
        color: var(--submit_hover);
    }

i {
        color: var(--icon_color);
    }
</style>
</head>
<body>
	<form method="post" action="signup.php">
        <div id="form_wrapper">
            <div id="form_left">
                <img src="1.gif" alt="computer icon">
            </div>
            <div id="form_right">
                <h1>Sign Up</h1>
				
                <input type="hidden" name="id" id="id">
                
				<div class="input_container">
                    <i class="fas fa-address-card"></i>
                    <input  placeholder="Name" type="text" name="name" id="name" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-envelope"></i>
                    <input placeholder="Email" type="email" name="email" id="email" class='input_field' required>
                </div>
                <div class="input_container">
                    <i class="fas fa-lock"></i>
                    <input  placeholder="Password" type="password" name="pass" id="field_password" class='input_field' required>
                </div>
				<div class="input_container">
                    <i class="fas fa-redo-alt"></i>
                    <input  placeholder="Re-enter Password" type="password" name="pass1" id="re_password" class='input_field' required>
                </div>
                <input type="submit" value="submit" name="add" id='input_submit' class='input_field'>
                <span id='create_account'>
                    <a href="login.php">Already have account ➡ </a>
                </span>
            </div>
        </div>
	</form>
</body>
</html>