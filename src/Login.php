<!DOCTYPE html>

<html>
    <head>
        <style>
            .form{
                display: block;
                background-color: #fd5a5a;
                width: 800px;
                height: 400px;
                margin: 0 auto;
                border-radius: 50px;
                text-align: center;
            }
            
            .input{
                position: relative;
                height: 40px;
                width: 40%;
                border-radius: 10px;
                text-align: center;
                font-size: 20px;
            }
            
            .submit {
                position: relative;
                background-color: white; /* Green */
                border: 2px solid #fd5a5a;
                color: #fd5a5a;
                width: 30%;
                top: 40%;
                padding-top: 1.5%;
                padding-bottom: 1.5%;
                text-align: center;
                text-decoration: none;
                font-size: 30px;
                font-weight: bold;
                border-radius: 10px;
                transition-duration: 1s;
            }
            
            .submit:hover{
                border: 2px solid white;
                background-color: #fd5a5a;
                color: white;
            }
            
            a {
                color: #fd5a5a;
            }
            
        </style>
    </head>
    <body>
        <div style = "color: #fd5a5a;">
            <center><h1>Hospital Login</h1></center>
        </div>
        <form class = "form" action = "Login_Verify.php" method = "POST">
            <input class = "input" style = "top:20%;"type = "text" name = "username" placeholder = "Username" required></input> </br>
            <input class = "input" style = "top:27%;"type = "password" name = "password" placeholder = "Password" required></input> </br>
			<input class = "submit" type = "submit" value = "Login"></input> </br>
        </form>
		</br>
        <center style = "color: black">Register your hospital <a href = "Register.php">here</a> </center>
		<center style = "color: black">Go to the <a href = "Home.html">home page.</a> </center>
	</body>
</html>