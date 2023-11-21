<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            text-align: center;
            padding: 15px;
        }   

        td.text-left {
            text-align: left;
        }

        .btn-detail {
            padding: 10px 20px;
            font-size: 16px;
        }

        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }

        tbody tr:nth-child(even) {
            background-color: #e6e6e6;
        }


    </style>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            $query = "SELECT * FROM showroom_mobil";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) > 0) {
                echo "<table border='0'>
                        <tr>
                            <th>ID</th>
                            <th>Nama Mobil</th>
                            <th>Brand Mobil</th>
                            <th>Warna Mobil</th>
                            <th>Tipe Mobil</th>
                            <th>Harga Mobil</th>
                            <th>Aksi</th>
                        </tr>";
            
                $i = 1; 
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>".$i."</td>
                            <td>".$row['nama_mobil']."</td>
                            <td>".$row['brand_mobil']."</td>
                            <td>".$row['warna_mobil']."</td>
                            <td>".$row['tipe_mobil']."</td>
                            <td>".$row['harga_mobil']."</td>
                            <td>
                                <a href='form_detail_mobil.php?id=".$row['id']."'>
                                    <button class='btn btn-primary'>Detail</button>
                                </a>
                            </td>
                        </tr>";
                    $i++; 
                }
            
                echo "</table>";
            } else {
                echo "Tidak ada data dalam tabel.";
            }
            ?>

        </div>
    </center>
</body>
</html>
