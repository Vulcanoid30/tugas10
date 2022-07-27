<?php

include 'c.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5 "><a class="text-light" href="user.php">Tambahkan barang</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Noid</th>
                    <th scope="col">nama_produk</th>
                    <th scope="col">keterangan</th>
                    <th scope="col">harga</th>
                    <th scope="col">jumlah</th>
                    <th scope="col">Ubah data</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * from produk2";
                $result =mysqli_query($conn, $sql);
                if ($result) {
                    while ($row=mysqli_fetch_assoc($result)) {
                        $id=$row['id'];
                        $nama_produk=$row['nama_produk'];
                        $keterangan=$row['keterangan'];
                        $harga=$row['harga'];
                        $jumlah=$row['jumlah'];
                        echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <th>'.$nama_produk.'</th>
                        <th>'.$keterangan.'</th>
                        <th>'.$harga.'</th>
                        <th>'.$jumlah.'</th>
                        <td>
                        <button class="btn btn-danger"><a class="text-light"  href="hapus.php?hapusid='.$id.'">hapus</a></button>
                        <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">update</a></button>
                        </td>
                      </tr>';
                    }
                }
                
                ?>


                <!-- <tr>
                    <th scope="row">1</th>
                    < </tr>
                <tr>
                    <th scope="row">2</th>

                </tr>
                <tr>
                    <th scope="row">3</th>

                </tr>
                <tr>
                    <th scope="row">4</th>

                </tr> -->
            </tbody>
        </table>
    </div>
</body>

</html>