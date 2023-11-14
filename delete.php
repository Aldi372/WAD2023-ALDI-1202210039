<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->

<?php
include("connect.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM showroom_mobil WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location.href='list_mobil.php';
              </script>";
        exit();
    }

$conn->close();
?>
