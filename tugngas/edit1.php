<link rel="stylesheet" type="text/css" href="style.css">
<h3>EDIT PETUGAS</h3>


<?php
include 'koneksi2.php';
$NIP= $_GET['id'];
$data = mysqli_query($koneksi2,"SELECT * FROM petugas WHERE NIP='$NIP'");
while($tampil=mysqli_fetch_array($data)){
?>
<form method="post" action="editaksi1.php">
<table>
    <tr>
        <td>NIP</td>
        <td><input type="number" name="NIP" value="<?php echo $tampil['NIP']; ?>"></td>
    </tr>
    <tr>
        <td>Nama_Karyawan</td>
        <td><input type="text" name="Nama_Karyawan" value="<?php echo $tampil['Nama_Karyawan']; ?>"></td>
    </tr>
    <tr>
        <td>Jam_Masuk</td>
        <td><input type="time" name="Jam_Masuk" value="<?php echo $tampil['Jam_Masuk']; ?>"></td>
    </tr>
    <tr>
        <td>Jam_Keluar</td>
        <td><input type="time" name="Jam_Keluar" value="<?php echo $tampil['Jam_Keluar']; ?>"></td>
    </tr> 
    <tr>   
        <td>Gender</td>
        <td><input type="text" name="Gender" value="<?php echo $tampil['Gender']; ?>"></td>
    </tr>
    <tr>
        <td><input type="submit" value="SIMPAN"></td>          
    </tr>
</table>
</form>

<?php
}
?>