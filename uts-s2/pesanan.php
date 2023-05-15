<?php
// koneksi ke database
    require_once 'dbkoneksi.php';

    $sql = 'SELECT * FROM pesanan' ;
    $stmt = $conn->prepare($sql);
    $stmt->execute( );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Data Pesanan</title>
</head>
<body>
<h2 style="background-color:grey; color: white; ">Data Pesanan</h2>
    <hr>
    
    <a href="formpesan.php">Tambah Pesanan</a>
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
            <th>Tanggal</th>
            <th>Pemesan</th>
            <th>Alamat </th>
            <th>No HP</th>
            <th>Email</th>
            <th>Jumlah  </th>
            <th>Deskripsi</th>
            <th>Produk</th>
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
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['nama_pemesan'] ?></td>
            <td><?= $row['alamat_pemesan'] ?></td>
            <td><?= $row['no_hp'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['jumlah_pesanan'] ?></td>
            <td><?= $row['deskripsi'] ?></td>
            <td><?= $row['produk'] ?></td>
            <td>
            <a href="editpesan.php?id=<?=$row['id']?>" title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>
            <a href="deletepesan.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>
            <a href="viewpesan.php?id=<?=$row['id']?>" title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>
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
