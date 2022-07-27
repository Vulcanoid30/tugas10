<?php
include 'c.php';

if (isset($_GET['hapusid'])) {
    $id = $_GET['hapusid'];

    $sql = "DELETE from produk2 WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if ($result) {
       header('location:index.php');
    }else {
        die(mysqli_error(($conn)));
    }
}

?>