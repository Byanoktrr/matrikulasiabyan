<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>No 2</title>
</head>
<body>
    <h3>Buatlah Algoritma dalam bentuk pseudocode untuk mencari bilangan terbesar dari 3 bilangan 
    dengan aturan bilangan</h3>
    <?php 
    $bil1 = 1;
    $bil2 = 2;
    $bil3 = 3;
    if($bil1 > $bil2 && $bil1 > $bil3){
        echo $bil1;
    } else if($bil2 > $bil1 && $bil2 > $bil3){
        echo $bil2;
    } else {
        echo $bil3;
    }
    ?>
</body>
</html>