<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no 3</title>
</head>
    <h3>Buatlah algoritma untuk mengkonversi jam-menit-detik ke total detik.</h3>
    <form action="" method="POST">
        <label for="jam">Jam</label>
        <input type="text" name="jam">
        <label for="jam">menit</label>
        <input type="text" name="menit">
        <label for="jam">Detik</label>
        <input type="text" name="detik">
        <button type="submit" name="submit" > kirim </button>
    </form>
<?php 
 if(isset($_POST['submit'])){
    $jam = $_POST['jam'];
    $menit = $_POST['menit'];
    $detik = $_POST['detik'];
    $jam = $jam * 3600;
    $menit = $menit * 60;
    $total = $jam + $menit + $detik;
    echo $total . ' detik';
}

?>
</body>
</html>