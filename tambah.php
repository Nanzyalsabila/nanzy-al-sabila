<?php
$koneksi = mysqli_connect("localhost","root","","galeryfotorlp3");
if(isset($_GET["submit"])){
   $foto = $_GET["ffoto"];
   $keterangan = $_GET["fketerangan"];
   $tanggal = $_GET["ftanggal"];

   $gambar = $_FILES["ffoto"]["name"];

   $query="INSERT INTO foto VALUES('','$foto','$keterangan','$tanggal')";

     mysqli_query($koneksi,$query);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <form action="tambah.php" method="get" ></form>
    <table>
        <tr>
            <td>foto</td>
            <td>:</td>
            <td><input type="text" name="ffoto" id=""></td>
        </tr>
        <tr>
            <td>keterangan</td>
            <td>:</td>
            <td><input type="text" name="fketerangan" id="" ></td>
        </tr>
        <tr>
            <td>tanggal</td>
            <td>:</td>
            <td><input type="date" name="ftanggal" id="" ></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit" name="submit">tambah data</button></td>
        </tr>
    </table>
    </form>
</body>
</html>
