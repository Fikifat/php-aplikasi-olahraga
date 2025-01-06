<?php

require 'function.php';

// session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek kredensial (misalnya, dari database)
    if ($email == "admin" && $password == "password") {
        $_SESSION['loggedin'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Email atau password salah.";
    }
}



// session_start();
// if (!isset($_SESSION['loggedin'])) {
//     header("Location: login.php");
//     exit();
// }


//cek login terdaftar atau tidak
// if(isset($_POST['login'])) {
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     //cocokan dengan datbase
//     $cekdatabase = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' and password='$password'");

//     //hitung jumlah data
//     $hitung = mysqli_num_rows($cekdatabase);
//     if($hitung>0){

//         $_SESSION['log'] = 'True';
//        header('location:index.php');
//     } else {
//         header('location:login.php');
//     };
// };

// if(isset($_SESSION['log'])){
//     header('location:login.php');
// } else {
    
    
// }
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form>
                <h1>Buat Akun</h1>
                <span>atau gunakan email Anda untuk mendaftar</span>
                <input type="text" placeholder="Nama">
                <input type="email" placeholder="Email">
                <input type="password" placeholder="Kata Sandi">
                <button>Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="validasi.php" method="post">
                <h1>Masuk</h1>
                <span>Masukan email dan kata sandi akun Anda</span>
                <input type="email" name="email"  id="email" required placeholder="Email">
                <input type="password" name="password" id="password" required  placeholder="Kata Sandi">
                <!-- Update link to point to forgot-password.html -->
                <a href="forgot-password.php">Lupa Kata Sandi Anda?</a>
                <button class="btn btn-primary" name="login">Masuk</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Masukkan detail pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="login">Masuk</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Halo, Temanku!</h1>
                    <p>Daftar dengan detail pribadi Anda untuk menggunakan semua fitur situs</p>
                    <button class="hidden" id="register">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html> 

<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="Post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                           
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html> --> -->
