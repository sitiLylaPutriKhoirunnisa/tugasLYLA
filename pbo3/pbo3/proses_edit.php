<?php

 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];
 $id = $_POST['id'];

 $database = new PDO("mysql:host=localhost;dbname=pbo12",'root','');
 $query = $database->query("UPDATE `siswa` SET nama='$nama' , kelas='$kelas' WHERE id='$id'");

 if($query){
    header("Location:index.php");
 }