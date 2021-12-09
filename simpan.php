<?php
$nama=$_POST['nama'];

$myfile = fopen("test.txt", "a") or die("Unable to open file!");
fwrite($myfile, $nama);
fclose($myfile);

header('location: index.php');