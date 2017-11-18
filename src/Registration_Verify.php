<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "hospitals");
            $res = mysqli_query($conn, "SELECT * FROM hospitals");
            $flag = 1;
            for ($i = 0; $i < mysqli_num_rows($res); $i++){
                $row = mysqli_fetch_assoc($res);
                if ($row['username'] == $username){
                    $flag = 0;
                    break;
                }
            }
            if ($flag){
                $insert = "INSERT INTO hospitals (username, password, name, email, address) VALUES ('".$username."','".$password."','".$hospname."','".$email."','".$address."')";
                mysqli_query($conn, $insert);
                header("location:Registration_Successful.html");
            }
            else{
                header("location:Registration_Unsuccessful.html");
            }
        ?>
    </head>
    <body>
    
    </body>
</html>