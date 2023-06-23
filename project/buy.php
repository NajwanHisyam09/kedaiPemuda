<?php 
$produk = $_GET["produk"];

switch ($produk) {
  case "1":
    $namaProduk = "Moccaino";
    $harga = "17k";
    break;
  case "2":
    $namaProduk = "Es Coffee";
    $harga = "14k";
    break;
  case "3":
    $namaProduk = "Kopi Hitam";
    $harga = "10k";
    break;
  case "4":
    $namaProduk = "Roti Bagel";
    $harga = "7k";
    break;
  case "5":
    $namaProduk = "Teh hangat/Dingin";
    $harga = "5k";
    break;
  case "6":
    $namaProduk = "Waffle";
    $harga = "15k";
    break;
}

$hargaNumeric = intval($harga);


?>

<!doctype html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      font-family: Arial, sans-serif;
      text-align: center;
      background-color: #584531;
    }

    .background {
      background-color: var(--bg);
      padding: 70px;
      border-radius: 10px;
    }

    img {
      max-width: 300px;
      margin-bottom: 20px;
    }

    h2 {
      margin-bottom: 10px;
      color: #DCDCDC;
    }

    p {
      margin-bottom: 10px;
      color: #DCDCDC;
    }

    label {
      margin-bottom: 10px;
      color: #DCDCDC;
    }

    input[type="number"] {
      margin-bottom: 10px;
      width: 50px;
      padding: 5px;
    }

    .totalHarga {
      margin-top: 20px;
      font-weight: bold;
      color: #DCDCDC;
    }

    .buttonBeliContainer {
      display: flex;
      align-items: center;
      margin-top: 20px;
    }

    .buttonBeli {
      margin-right: 10px;
      padding: 10px 20px;
      background-color: var(--primary);
      color: white;
      border: none;
      cursor: pointer;
    }

    .buttonBeli:hover {
      background-color: #504308;
    }

    .buttonPesanLain {
      padding: 10px 20px;
      background-color: var(--primary);
      color: white;
      border: none;
      cursor: pointer;
    }

    .buttonPesanLain:hover {
      background-color: #504308;
    }

    .form-group {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .form-group label {
      margin-right: 10px;
    }

    .form-group input {
      width: 50px;
    }

    .bold {
      font-weight: bold;
    }
  </style>
</head>

<body>
    <div class="background">
        <img src="img/menu/<?php echo $produk?>.jpg">
        <h2><?php echo $namaProduk?></h2>
        <p class="bold"><?php echo $harga?></p>  

         <div class="form-group">
          <label for="quantity" class="bold">Total pesanan : </label>
          <input type="number" id="quantity" min="1" value="0">
        </div>
        <p class="totalHarga">Total Harga: <span id="totalHarga">0</span></p>

        <div class="buttonBeliContainer">
        <button type="button" class="buttonBeli" onclick="beliSekarang()" disabled>Beli Sekarang</button>
          <h2> / </h2>
          <button type="button" class="buttonPesanLain">Pesan Menu Lain</button>
        </div>
    </div>

    <script>
        function beliSekarang() {
            // Tampilkan alert dengan pesan setelah membeli
            alert('\nTerima kasih telah melakukan pembelian!\nSilahkan Tunggu Pesanan Anda.. :)');
            document.location.href = 'index.html';

            // Tambahkan kode lainnya sesuai kebutuhan, misalnya pengisian form atau tampilan lainnya
        }
    </script>
    
    <script>
        const quantityInput = document.getElementById('quantity');
        const totalHarga = document.getElementById('totalHarga');
        const harga = <?php echo $hargaNumeric; ?>;
        const buttonBeli = document.querySelector('.buttonBeli');

        quantityInput.addEventListener('input', updateTotalHarga);

        function updateTotalHarga() {
    const quantity = quantityInput.value;
    const totalPrice = quantity * harga;
    totalHarga.textContent = totalPrice;

    // Mengaktifkan atau menonaktifkan tombol "Beli Sekarang" berdasarkan nilai quantity
    if (quantity > 0) {
        buttonBeli.disabled = false;
    } else {
        buttonBeli.disabled = true;
    }
}
    </script>
</body>
</html>
