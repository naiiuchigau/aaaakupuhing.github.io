<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #000;
    }

    table {
        border-collapse: collapse;
        width: 50%;
        border: 2px solid #333;
        margin-bottom: 20px;
        background-color: rgba(0, 0, 0, 0.7); 
        color: #fff; 
    }

    table, th, td {
        border: 1px solid #333;
    }

        th, td {
        padding: 10px;
        text-align: left;
        background-color: rgba(0, 0, 0, 0.7);
    }

    th {
        background-color: #222; 
    }

    tr{
        background-color: #333; 
    }

    a {
        text-decoration: none;
        padding: 8px 16px;
        margin: 2px;
        border: 2px solid #ccc; 
        background-color: rgba(0, 0, 0, 0.7); 
        color: #fff; 
        border-radius: 4px;
    }

    a:hover {
        background-color: rgba(0, 0, 0, 0.7); 
    }
</style>
</head>
<body>
<div class="main">
	<div class="navbar">
		<label class="logo">NyanHoteru</label>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="adminidtrasi.php">administrasi</a></li>
			<li><a href="kamar.php">Kamar</a></li>
			<li><a href="petugas-1.php">Pegawai</a></li>
			<li><a href="Pengunjung.php">Pengunjung</a></li>
		</ul>
	</div>
<center>


<table>
    <tr>
        <th>NIP</th>
        <th>Nama Petugas</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Gender</th>
        <th>Aksi</th>
    </tr>

    <!-- Your PHP Loop Goes Here -->
    <?php
    include "koneksi2.php";
    $data = mysqli_query($koneksi2,"select *  from Petugas");
    while($tampil=mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?php echo $tampil['NIP'] ?></td>
        <td><?php echo $tampil['Nama_Karyawan'] ?></td>
        <td><?php echo $tampil['Jam_Masuk'] ?></td>
        <td><?php echo $tampil['Jam_Keluar'] ?></td>
        <td><?php echo $tampil['Gender'] ?></td>
        <td>
            <a href="hapus1.php?id=<?php echo $tampil['NIP']; ?>">Hapus</a>
            <a href="edit1.php?id=<?php echo $tampil['NIP']; ?>">Edit</a>
        </td>
    </tr>
    <?php } ?>
</table>
<a href="aksi1.php">Tambahkan Data Baru</a>

</body>
</html>
