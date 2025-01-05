<?php
session_start();

//koneksi database
$conn = mysqli_connect("localhost","root","","apk_olahraga");

// if($conn){
//     echo 'berhasil';
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST['email'];
//     $password = $_POST['password'];

//     // Mencegah SQL Injection (penting untuk keamanan)
//     $email = mysqli_real_escape_string($conn, $email);
//     $password = mysqli_real_escape_string($conn, $password);

//     // Query untuk mencari user di database
//     $query = "SELECT * FROM login WHERE email='$email' AND password='$password'";
//     $result = mysqli_query($conn, $query);

//     if (mysqli_num_rows($result) > 0) {
//         // Login berhasil
//         $_SESSION['email'] = $email; // Menyimpan username dalam session
//         header("Location: index.php"); // Redirect ke menu utama
//         exit();
//     } else {
//         // Login gagal
//         echo "email atau password salah.";
//     }
// }

// mysqli_close($conn);
?>
