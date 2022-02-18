<?php
include 'connection.php';
$sql = "SELECT * FROM `FILES` WHERE file_type_id='Video'";
$sql2 = "SELECT * FROM `FILES` WHERE file_type_id='Artikel'";
$result = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql2);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <style>
        table{
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>

<body>
    <div style="margin-left: auto; margin-right:auto;">
        <table border="1"  style="margin-left: auto; margin-right:auto;">
            <tr>
                <td colspan="7">Video</td>
            </tr>
            <tr style="text-align: center;">
                <td>id</td>
                <td>judul</td>
                <td>type</td>
                <td>isi</td>
                <td>create time</td>
                <td>update at</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) :
                $id = $row['id'];
                $aut = $row['author'];
                $judul = $row['judul'];
                $type = $row['file_type_id'];
                $isi = $row['isi'];
                $create = $row['created_at'];
                $update = $row['update_at'];
            ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $aut; ?></td>
                    <td><?= $judul; ?></td>
                    <td><?= $type; ?></td>
                    <td><?= $isi; ?></td>
                    <td><?= $create; ?></td>
                    <td><?= $update; ?></td>
                </tr>
            <?php endwhile ?>
        </table>
    </div>
    <br><br>
    <div>
        <table border="1">
            <tr>
                <td colspan="7" style="text-align: center;">Artikel</td>
            </tr>
            <tr style="text-align: center;">
                <td>id</td>
                <td>author</td>
                <td>judul</td>
                <td>type</td>
                <td>isi</td>
                <td>create time</td>
                <td>update at</td>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result2)) :
                $id = $row['id'];
                $author = $row['author'];
                $judul = $row['judul'];
                $type = $row['file_type_id'];
                $isi = $row['isi'];
                $create = $row['created_at'];
                $update = $row['update_at'];
            ?>
                <tr>
                    <td><?= $id; ?></td>
                    <td><?= $author; ?></td>
                    <td><?= $judul; ?></td>
                    <td><?= $type; ?></td>
                    <td><?= $isi; ?></td>
                    <td><?= $create; ?></td>
                    <td><?= $update; ?></td>
                </tr>
            <?php endwhile ?>
        </table>

    </div>
</body>

</html>