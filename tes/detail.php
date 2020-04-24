<?php

include '../koneksi.php';

include '../aset/header.php';

$id = $_GET['id_odp'];

$query = mysqli_query($kon, "SELECT * FROM tes WHERE tes.id_odp = '$id' ");
$tes = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tes ODP</title>
</head>
<body>

        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

            <div class="card">
            <div class="card-header">
    
                
            </div>
            <div class="card-body">

                <table class="table">

                    <tr>
                        <td>Nama ODP</td>
                        <td><?= $tes['nama_odp']?></td>
                    </tr>
                    <tr>
                        <td>Gejala</td>
                        <td><?= $tes['gejala']?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Cek</td>
                        <td><?= $tes['tanggal_cek']?></td>
                    </tr>  

                </table>
            </div>
        </div>
</body>
</html>

<?php
include '../aset/footer.php';
?>
