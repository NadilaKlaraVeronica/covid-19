<?php

include '../koneksi.php';

$id=$_GET['id_odp'];

$query = mysqli_query($kon, "DELETE FROM tes WHERE tes.id_odp='$id' ");

if($query>0){
    echo "<script> alert('Data Berhasil Dihapus'); document.location.href='index.php';
          </script>";
}else{
    echo "<script> alert('Data Gagal Dihapus'); document.location.href='index.php';
          </script>";
}
    

?>
