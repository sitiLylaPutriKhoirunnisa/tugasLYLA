<?php

 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

 $database = new PDO("mysql:host=localhost;dbname=pbo12",'root','');
 $query = $database->query("insert into siswa values('','$nama','$kelas')");

 if($query){
    header("Location:index.php");
 }