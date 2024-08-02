<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 17</title>
</head>
<body>
    <form action="" method="post">
        <div id="warp">
            <div style="display: flex">
                <label for="angka">masukan angka :</label>
                <input type="number" name="angka[]" id="angka">
            </div>
        </div>
        <p style="cursor: pointer; color: blue" onclick="tambahinput()">tambah input form</p>
        <button type="sbumit" name="submit">kirim</button>
    </form>
    <script>
        let jumlahInput = 1;
        function tambahinput(){
            let inputElement = `
            <br><div style="display: flex;">
                <label for="angka">Masukan Angka :
                <input type="number"  id="angka" name="angka[]">
                </div>
                `;
                jumlahInput += 1;
                if (jumlahInput <= 10){
                    document.getElementById('warp'). 
                    innerHTML += inputElement;
                }
        }
    </script>
        <?php 

        if(isset($_POST['submit'])){
            $arrAngka = $_POST['angka'];
            $nilaiTerbesar = max($arrAngka);
            $nilaiTerkecil = min($arrAngka);
            $rataRara = array_sum($arrAngka) / count($arrAngka);
            echo "nilai terbesar : ". $nilaiTerbesar . "<br> Nilai terkecil : ". 
            $nilaiTerkecil . "<br> rata rata : ". 
            $rataRara;
        }
        ?>
</body>
</html>