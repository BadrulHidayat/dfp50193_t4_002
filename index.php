<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="simpan.php" method="POST">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" id="nama" name="nama"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Simpan</button>
                </td>
            </tr>
        </table>
    </form>
    <br>
    <?php
    $myfile = fopen("test.txt", "r") or die("Unable to open file!");
    echo nl2br(fread($myfile, filesize("test.txt")));
    fclose($myfile);
    ?>
</body>

</html>