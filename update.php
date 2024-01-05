<?php
// koneksi database
include 'conn.php';
// menangkap data yang di kirim dari form
	$id = $_POST['idpelajar'];
    
    $name=$_POST['namasiswa'];
    $kelas = $_POST['kelas'];
        
    // update user data
    $result = mysqli_query($query, "UPDATE tbl_karyawan SET namasiswa='$name',kelas='$kelas'WHERE idpelajar=$id");
    
    header("Location: index.php");
?>
