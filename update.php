<?php
include 'c.php';

$id=$_GET['updateid'];
if (isset($_POST['submit'])) {
    $barang =  $_POST['barang'];
    $keterangan= $_POST['keterangan'];
    $harga =  $_POST['harga'];
    $jumlah = $_POST['jumlah'];

    $sql = "UPDATE produk2 set id=$id,barang='$barang',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' where=$id";
    $result = mysqli_query($conn,$sql);
   //updaye di masukan
    if ($result) {
      echo "update sukses";
    }else {
      echo mysqli_error($conn);
    }
}
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

    <title>zulhayad</title>
</head>

<body>
    <div class="container mt-5 w-50">
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Nama barang</label>
                <input type="text" class="form-control" name="barang" autocomplete="ogg">
            </div>
            <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" class="form-control" name="keterangan" autocomplete="ogg">
            </div>
            <div class="mb-3">
                <label class="form-label">Harga</label>
                <input type="text" class="form-control" name="harga" autocomplete="ogg">
            </div>
            <div class="mb-3">
                <label class="form-label">jumlah</label>
                <input type="text" class="form-control" name="jumlah" autocomplete="ogg">
            </div>
            <button name="submit" type="submit" class="btn btn-primary" autocomplete="ogg">Update</button>
        </form>
    </div>
</body>

</html>