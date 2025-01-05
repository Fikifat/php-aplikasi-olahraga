<?php

require 'function.php';



// if (isset($_POST["login"])) {

//     $email = $_POST["email"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM admin WHERE
//         email = '$email'");     

//     if ( mysqli_fetch_array($result) === 1 ) {
//         $row =  mysqli_fetch_assoc($result);
//         password_verify($password, $row["password"]); {
//             header("location: index.php");
//             exit;
//         }
//     }
// }


//home
if (isset($_POST['bsimppan'])) {

    //persiapan simpan data baru
    $simppan = mysqli_query($conn, "INSERT INTO schedule (class_list,  senin, selasa, rabu, kamis, jumat, sabtu, minggu, lokasi)
                                    VALUES ('$_POST[tclass]',
                                            
                                            '$_POST[tsenin]',
                                            '$_POST[tselasa]',
                                            '$_POST[trabu]',
                                            '$_POST[tkamis]',
                                            '$_POST[tjumat]',
                                            '$_POST[tsabtu]',
                                            '$_POST[tminggu]',                                          
                                            '$_POST[tlokasi]')");

    if ($simppan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='index.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='index.php';
             </script>";
    }
}

if (isset($_POST['bubbah'])) {

    //persiapan simpan data baru
    $ubbah = mysqli_query($conn, "UPDATE schedule SET 
                                                    class_list = '$_POST[tclass]',
                                                    
                                                    senin = '$_POST[tsenin]',
                                                    selasa = '$_POST[tselasa]',
                                                    rabu = '$_POST[trabu]',
                                                    kamis = '$_POST[tkamis]',
                                                    jumat = '$_POST[tjumat]',
                                                    sabtu = '$_POST[tsabtu]',
                                                    minggu = '$_POST[tminggu]',
                                                    lokasi = '$_POST[tlokasi]' 
                                                WHERE schedule_id = '$_POST[schedule_id]'
                                                ");

    if ($ubbah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='index.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='index.php';
             </script>";
    }
}

if(isset($_POST['bhappus'])) {
    $hapus = mysqli_query($conn, "DELETE FROM schedule WHERE schedule_id = '$_POST[schedule_id]' ");


    if($hapus){
        echo "<script>
                alert('Hapus data sukses!');
                document.location='index.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='index.php';
                </script>";
    }
}


//Student
if (isset($_POST['bsimpan'])) {

    //persiapan simpan data baru
    $simpan = mysqli_query($conn, "INSERT INTO student (gambar, nim, nama, email, jenis_kelamin, class_id, class_list, alamat)
                                    VALUES ('$_POST[tgambar]',
                                            '$_POST[tnim]',
                                            '$_POST[tnama]',
                                            '$_POST[temail]',
                                            '$_POST[tjeniskelamin]',
                                            '$_POST[tclassid]',
                                            '$_POST[tclass]',
                                            '$_POST[talamat]')");

    if ($simpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='student.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='student.php';
             </script>";
    }
}

if (isset($_POST['bubah'])) {

    //persiapan simpan data baru
    $ubah = mysqli_query($conn, "UPDATE student SET 
                                                    gambar = '$_POST[tgambar]',
                                                    nim = '$_POST[tnim]',
                                                    nama = '$_POST[tnama]',
                                                    email = '$_POST[temail]',
                                                    jenis_kelamin = '$_POST[tjeniskelamin]',
                                                    class_id = '$_POST[tclassid]',
                                                    class_list = '$_POST[tclass]',
                                                    alamat = '$_POST[talamat]' 
                                                WHERE student_id = '$_POST[student_id]'
                                                ");

    if ($ubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='student.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='student.php';
             </script>";
    }
}

if(isset($_POST['bhapus'])) {
    $hapus = mysqli_query($conn, "DELETE FROM student WHERE student_id = '$_POST[student_id]' ");


    if($hapus){
        echo "<script>
                alert('Hapus data sukses!');
                document.location='student.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='student.php';
                </script>";
    }
}


//Teacher
if (isset($_POST['bsiimpan'])) {

    //persiapan simpan data baru
    $siimpan = mysqli_query($conn, "INSERT INTO teacher (nidk, nama, email, jenis_kelamin, class_list)
                                    VALUES ('$_POST[tnidk]',
                                            '$_POST[tnama]',
                                            '$_POST[temail]',
                                            '$_POST[tjeniskelamin]',
                                            '$_POST[tclass]')");

    if ($siimpan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='teacher.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='teacher.php';
             </script>";
    }
}

if (isset($_POST['buubah'])) {

    //persiapan simpan data baru
    $uubah = mysqli_query($conn, "UPDATE teacher SET 
                                                    nidk = '$_POST[tnidk]',
                                                    nama = '$_POST[tnama]',
                                                    username = '$_POST[tusername]',
                                                    email = '$_POST[temail]',
                                                    jenis_kelamin = '$_POST[tjeniskelamin]',
                                                    class_list = '$_POST[tclass]'
                                                    
                                                WHERE teacher_id = '$_POST[teacher_id]'
                                                ");

    if ($uubah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='teacher.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='teacher.php';
             </script>";
    }
}


if(isset($_POST['bhhapus'])) {
    $hhapus = mysqli_query($conn, "DELETE FROM teacher WHERE teacher_id = '$_POST[teacher_id]' ");


    if($hhapus){
        echo "<script>
                alert('Hapus data sukses!');
                document.location='teacher.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='teacher.php';
                </script>";
    }
}


//class

if (isset($_POST['bsimpaan'])) {

    //persiapan simpan data baru
    $simpaan = mysqli_query($conn, "INSERT INTO class (teacher_id, nama, class_list, schedule_id, modul,id)
                                    VALUES ('$_POST[tteacher]',
                                            '$_POST[tnama]',
                                            '$_POST[tclasslist]',
                                            '$_POST[tschedule]',
                                            '$_POST[tmodul]')");

    if ($simpaan) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='class.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='class.php';
             </script>";
    }
}

if (isset($_POST['bubaah'])) {

    //persiapan simpan data baru
    $ubaah = mysqli_query($conn, "UPDATE class SET 
                                                    teacher_id = '$_POST[tteacher]',
                                                    nama = '$_POST[tnama]',
                                                    class_list = '$_POST[tclasslist]',
                                                    schedule_id = '$_POST[tschedule]',
                                                    modul_id = '$_POST[tmodul]'
                                                    
                                                WHERE class_id = '$_POST[class_id]'
                                                ");

    if ($ubaah) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='class.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='class.php';
             </script>";
    }
}

if(isset($_POST['bhaapus'])) {
    $haapus = mysqli_query($conn, "DELETE FROM class WHERE class_id = '$_POST[class_id]' ");


    if($haapus){
        echo "<script>
                alert('Hapus data sukses!');
                document.location='class.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='class.php';
                </script>";
    }
}


//Modul
if (isset($_POST['bsimpann'])) {

    //persiapan simpan data baru
    $simpann = mysqli_query($conn, "INSERT INTO modul (nama_modul, deskripsi_modul, kategori, tanggal_dibuat, file_modul)
                                    VALUES ('$_POST[tnamamodul]',
                                            '$_POST[tdeskripsi]', 
                                            '$_POST[tkategori]', 
                                            '$_POST[ttanggal]', 
                                            '$_POST[tfilemodul]')");

    if ($simpann) {
        echo "<script>
                alert('Simpan Data Sukses!');
                document.location='modul.php';
             </script>";
    } else {
        echo "<script>
                alert('Simpan Data Gagal!');
                document.location='modul.php';
             </script>";
    }
}

if (isset($_POST['bubahh'])) {

    //persiapan simpan data baru
    $ubahh = mysqli_query($conn, "UPDATE modul SET 
                                                    nama_modul = '$_POST[tnamamodul]',
                                                    deskripsi_modul = '$_POST[tdeskripsi]',
                                                    kategori = '$_POST[tkategori]',
                                                    tanggal_dibuat = '$_POST[ttanggal]',
                                                    file_modul = '$_POST[tfilemodul]'       
                                                WHERE modul_id = '$_POST[modul_id]'
                                                ");

    if ($ubahh) {
        echo "<script>
                alert('Ubah Data Sukses!');
                document.location='modul.php';
             </script>";
    } else {
        echo "<script>
                alert('Ubah Data Gagal!');
                document.location='modul.php';
             </script>";
    }
}

if(isset($_POST['bhapuss'])) {
    $hapuss = mysqli_query($conn, "DELETE FROM modul WHERE modul_id = '$_POST[modul_id]' ");


    if($hapuss){
        echo "<script>
                alert('Hapus data sukses!');
                document.location='modul.php';
                </script>";
    } else {
        echo "<script>
                alert('Hapus data Gagal!');
                document.location='modul.php';
                </script>";
    }
}





?>