<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "hospitals");
            $res = mysqli_query($conn, "SELECT * FROM hospitals");
            $insert = "INSERT INTO donors (name, blood, phone, email, age, address) VALUES ('".$name."','".$blood."','".$phone."','".$email."','".$age."','".$address."')";
            mysqli_query($conn, $insert);
            header("location:Registration_Successful.html");
        ?>
    </head>
    <body>
    
    </body>
</html>
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
            
        </style>
    </head>
    <body>
        <div style = "color: #fd5a5a;">
            <center><h1>Hospital Registration</h1></center>
        </div>
        <form name = "register" class = "form" action = "Registration_Verify.php" method = "POST" onsubmit = "return checkPassword()">
            <input class = "input" style = "top:10%;"type = "text" name = "hospname" placeholder = "Hospital Name" required></input> </br>
            <input class = "input" style = "top:15%;"type = "text" name = "username" placeholder = "Username" required></input> </br>
            <input class = "input" style = "top:20%;"type = "password" name = "password" placeholder = "Password" required></input></br>
            <input class = "input" style = "top:25%;"type = "password" name = "cpassword" placeholder = "Confirm Password" required></input></br>
            <input class = "input" style = "top:30%;"type = "email" name = "email" placeholder = "Email" required></input></br>
            <textarea class = "input" style = "top:35%;height:100px;" type = "textarea" rows = "4" cols = "50" name = "address" placeholder = "                            Address" required></textarea></br>
            
            
<input class = "submit" type = "submit" value = "Register"></input>
        </form>
    </body>
    <script>
        function checkPassword() {
            var p1 = document.forms["register"]["password"].value;
            var p2 = document.forms["register"]["cpassword"].value;
            if (p1 != p2) {
                alert("Sorry, the passwords didn't match!");
                return false;
            }
        }
    </script>
</html>