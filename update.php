<?php
include 'connection.php';
include 'disperror.php';

date_default_timezone_set('Asia/Jakarta');
$timestamp = date('h:i A d/m/Y');

$id=$_GET['updateid'];

$sql= "SELECT * FROM `FILES` WHERE `id`='$id'";

$result=mysqli_query($conn,$sql);
$row =mysqli_fetch_assoc($result);

$fetchid=$row['id'];

$fetchjdl=$row['judul'];

$fetchauth=$row['author'];

$fetchtype=$row['file_type_id'];

$fetchisi=$row['isi'];

if (isset($_POST['submit'])) {
    
    $author=(isset($_POST['aut'])) ? $_POST['aut']:"";    

    $isi=(isset($_POST['isi']))? $_POST['isi']:"";    

    $judul=(isset($_POST['jdl']))? $_POST['jdl']:"";    

    $sql="UPDATE `FILES` SET `author`='$author',`judul`='$judul',`isi`='$isi',`update_at`='$timestamp' WHERE `id`='$id'";

    $run = mysqli_query($conn,$sql);

    if ($run) {
        header('location:tampil_1.php');
    }else{
       echo '<script>alert("Failed")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#format'
        });
    </script>
</head>
<body>
    <form action="" method="post">    
        <table>
            <tr>
                <td>Id</td>
                <td><?= $fetchid ?></td>
            </tr>
            <tr>
                <td>Author</td>
                <td>
                    <input type="text" name="aut" value="<?= $fetchauth ?>">
                </td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>
                    <input type="text" name="jdl" value="<?= $fetchjdl ?>">
                </td>
            </tr>
            <tr>
                <td>Type</td>
                <td><?= $fetchtype ?></td>
            </tr>
            <tr>
                <td>Isi</td>
                <td><textarea name="isi" id="format" cols="30" rows="20"><?=$fetchisi?></textarea></td>
            </tr>
            <tr>
                <td style="margin-left: 3%;"><input type="submit" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>