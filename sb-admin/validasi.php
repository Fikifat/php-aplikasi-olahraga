<?php

require 'function.php'; 

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //cocokan dengan datbase
    $cekdatabase = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' and password='$password'");

    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);
    if($hitung>0){

        $_SESSION['log'] = 'True';
       header('location:index.php');
    } else {
        header('location:login.php');
    };
};

// if(isset($_SESSION['log'])){
//     header('location:login.php');
// } else {
    
    
// }


?>