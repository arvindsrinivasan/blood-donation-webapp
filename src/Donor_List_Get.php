<?php
    session_start();
    if (!isset($_SESSION['hospital'])){
        header('Location:Login.php');
    }
    extract($_POST);

    $query = "SELECT * FROM donors WHERE blood='".$blood."'";

    $conn = mysqli_connect("localhost", "root", "", "hospitals");
    $res = mysqli_query($conn, $query);
    header('Content-Type: application/csv');
    header('Content-Disposition: attachment; filename="DonorList.csv";');
    $f = fopen('php://output', 'w');

    for ($i = 0; $i < mysqli_num_rows($res); $i++){
        $row = mysqli_fetch_assoc($res);
        fputcsv($f, $row, ",");
    }
    
?>