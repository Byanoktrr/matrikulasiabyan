<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buatlah algoritma untuk mengkonversi total detik ke bentuk jam-menit-detik</title>
</head>
<body>
    <form action="" method="post">
        <label for="detik">msaukan detik</label>
        <input type="number" name="detik">
        <button name="submit" type="submit">Konvert</button>
    </form>
    <?php 
    if(isset($_POST['submit'])){
        $waktu = $_POST['detik'];
        $hasil = '';

        if($waktu >= 3600){
            $jam = floor( $waktu / 3600);
            $waktu = $waktu - ($jam * 3600);
            $hasil .= $jam . ' jam';
        }
        if($waktu >= 60){
            $menit = floor($waktu / 60);
            $waktu = $waktu - ($menit * 60);
            $hasil .= $menit . ' menit';
        }
        if($waktu > 0){
            $detik = $waktu;
            $hasil .= $detik . ' detik';
        }
        
        echo $hasil;
    }
    
    
    ?>
</body>
</html>