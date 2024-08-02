<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="container">
  <form action="" method="post">
    <div id="box">
      <div style="display: flex; width: fit-content;">
        <label for="nama">Nama : </label>
        <input type="text" name="nama[]" required>
        <label for="kehadiran">Kehadiran(%) : </label>
        <input type="number" name="kehadiran[]" required min="0" max="100">
        <label for="mtk">MTK : </label>
        <input type="number" name="mtk[]" required min="0" max="100">
        <label for="indo">Indo : </label>
        <input type="number" name="indo[]" required min="0" max="100">
        <label for="ing">Inggris : </label>
        <input type="number" name="ing[]" required min="0" max="100">
        <label for="dpk">DPK : </label>
        <input type="number" name="dpk[]" required min="0" max="100">
        <label for="agama">Agama : </label>
        <input type="number" name="agama[]" required min="0" max="100">
        <p style="cursor: pointer; color: blue;" onclick="tambahInput()">Tambah Input</p>
        <button type="submit" name="submit">Kirim</button>
      </div>
    </div>
  </form>

  <script>
    let jumlahInput = 1;

    function tambahInput() {
      if (jumlahInput < 10) {
        let inputElement = `
                    <br><div style="display: flex; width: fit-content;">
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama[]" required>
                    <label for="kehadiran">Kehadiran(%) : </label>
                    <input type="number" name="kehadiran[]" required min="0" max="100">
                    <label for="mtk">MTK : </label>
                    <input type="number" name="mtk[]" required min="0" max="100">
                    <label for="indo">Indo : </label>
                    <input type="number" name="indo[]" required min="0" max="100">
                    <label for="ing">Inggris : </label>
                    <input type="number" name="ing[]" required min="0" max="100">
                    <label for="dpk">DPK : </label>
                    <input type="number" name="dpk[]" required min="0" max="100">
                    <label for="agama">Agama : </label>
                    <input type="number" name="agama[]" required min="0" max="100">
                </div>`;
        document.getElementById('box').innerHTML += inputElement;
        jumlahInput++;
      }
    }
  </script>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $mtk = $_POST['mtk'];
    $indo = $_POST['indo'];
    $ing = $_POST['ing'];
    $dpk = $_POST['dpk'];
    $agama = $_POST['agama'];

    $jumlahData = count($nama);

    $output = [];

    for ($i = 0; $i < $jumlahData; $i++) {
      $rataRata = ($mtk[$i] + $indo[$i] + $dpk[$i] + $agama[$i] + $ing[$i]);

      if ($rataRata >= 475 && $kehadiran[$i] == 100) {
        $juaraKelas = "Juara Kelas";
      } else {
        $juaraKelas = "-";
      }

      $output[] = [
        'nama' => $nama[$i],
        'rata_rata' => $rataRata,
        'kehadiran' => $kehadiran[$i],
        'juara_kelas' => $juaraKelas
      ];
    }
  }

  // Menampilkan hasil
  if (!empty($output)) {
    foreach ($output as $data) {
      echo "Nama: " . $data['nama'] . "<br>";
      echo "Rata-rata: " . $data['rata_rata'] . "<br>";
      echo "--------------------------------------------------------";
      echo "<br>";
    }
  }
  if (!empty($output)) {
    echo "Juara Kelas: ";
    $juaraKelasNames = [];

    foreach ($output as $data) {
      if ($data['juara_kelas'] == "Juara Kelas") {
        $juaraKelasNames[] = $data['nama'];
      }
    }

    if (!empty($juaraKelasNames)) {
      echo implode(', ', $juaraKelasNames);
    } else {
      echo "-";
    }
  }


  ?>
  </div>
</body>

</html>