<!DOCTYPE html>

<html>
    <head>
        <?php
            extract($_POST);
            $conn = mysqli_connect("localhost", "root", "", "hospitals");
            $res = mysqli_query($conn, "SELECT * FROM hospitals");
            $flag = 0;
            for ($i = 0; $i < mysqli_num_rows($res); $i++){
                $row = mysqli_fetch_assoc($res);
                if ($row['username'] == $username && $row['password'] == $password){
                    $flag = 1;
                    break;
                }
            }
            if ($flag){
                session_start();
                if (!isset($_SESSION['hospital'])){
                    $_SESSION['hospital'] = $username;
                }
                header("location:Donor_List.php");
            }
            else{
                header("location:Login_Unsuccessful.html");
            }
        ?>
    </head>
    <body>
    
    </body>
</html>