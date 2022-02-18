<?php
include 'disperror.php';
?>
<body>
    <form action="" method="post">
        <input type="text" name="nama" placeholder="Masukan nama" id=""><br>
        <input type="text" name="judul" placeholder="Masukan judul" id=""><br>
        <input type="text" name="link" placeholder="Masukan URL" id=""><br>
        <input type="submit" value="Submit">
    </form>
</body>
<?php
$nama=$_POST['nama'];
$judul=$_POST['judul'];
$link=$_POST['link'];
?>