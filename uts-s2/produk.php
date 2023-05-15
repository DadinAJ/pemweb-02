<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM produk' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
<h2 style="background-color: grey; color: white;">Data Produk</h2>
    <hr>
    <a href="formproduk.php">Tambah Produk</a>
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    
    th, td {
        text-align: left;
        padding: 8px;
    }
    
    th {
        background-color: grey;
        color: white;
    }
    
    tr:nth-child(even) {
    }
</style>
    <table  border="1">
    <thead>
        <tr>
            <th>NO</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Min Stok</th>
            <th>Deskripsi</th>
            <th>Kategori Produk</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            
        <?php
                $number = 1;
                while($row =  $stmt->fetch(PDO::FETCH_ASSOC)) :
        ?>

        <tr>
            <td><?= $number?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['kategori_produk'] ?></td>
            <td>
                <a href="editproduk.php?id=<?=$row['id']?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
                <a href="deleteproduk.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
                <a href="viewproduk.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
            </td>
        </tr>
        
        <?php
                $number++;
                endwhile;
        ?>

    </tbody>
    </table>

</body>
</html>
