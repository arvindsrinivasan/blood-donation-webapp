<!DOCTYPE html>

<html>
    <head>
        <?php
            session_start();
        
            if (!isset($_SESSION['hospital'])){
                header('location:Login.php');
            }
        
        ?>
    </head>
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
                vertical-align: middle;
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
            
        </style>
    <body>
        
        <div style = "color: #fd5a5a;">
            <center><h1>Donor List</h1></center>
        </div>
        <form name = "register" class = "form" action = "Donor_List_Get.php" method = "POST">
            <select class = "input" style = "top:20%;" name = "blood">
                <option value = "A+">A+</option>
                <option value = "A-">A-</option>
                <option value = "B+">B+</option>
                <option value = "B-">B-</option>
                <option value = "AB+">AB+</option>
                <option value = "AB-">AB-</option>
                <option value = "O+">O+</option>
                <option value = "O-">O-</option>
            </select> </br>
            
            
<input class = "submit" type = "submit" value = "Download"></input>
        </form>
        
    </body>
</html>