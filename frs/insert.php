<?php
include 'koneksi.php';

$nama_mk = $_POST['namamatakuliah'];


$query = "INSERT INTO frs (nama_mk) VALUES ('$nama_mk');";

  $sql = mysqli_query($connect, $query);
 if($sql){

            header("location: index.php?status=berhasil");

  }else{

    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    }

?>
