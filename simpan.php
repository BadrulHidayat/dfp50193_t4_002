<?php
$nama=$_POST['nama'];

$myfile = fopen("test.txt", "a") or die("Unable to open file!");
$txt = $nama;
fwrite($myfile, $txt."\n");

fclose($myfile);

header('location: index.php');