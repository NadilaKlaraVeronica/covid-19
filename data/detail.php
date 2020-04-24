<?php

include '../koneksi.php';

include '../aset/header.php';

$id = $_GET['id_odp'];

$query = mysqli_query($kon, "SELECT * FROM data_odp WHERE data_odp.id_odp = '$id' ");
$data = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data ODP</title>
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
                        <td><?= $data['nama_odp']?></td>
                    </tr>
                    <tr>
                        <td>Umur ODP </td>
                        <td><?= $data['umur_odp']?></td>
                    </tr>
                    <tr>
                        <td>Alamat ODP</td>
                        <td><?= $data['alamat_odp']?></td>
                    </tr>  
                     <tr>
                        <td>Suhu ODP</td>
                        <td><?= $data['suhu_odp']?></td>
                    </tr>  
                    
                </table>
            </div>
        </div>
</body>
</html>

<?php
include '../aset/footer.php';
?>
