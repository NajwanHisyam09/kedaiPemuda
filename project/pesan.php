<?php 
$conn = mysqli_connect("sql106.infinityfree.com", "if0_34486544", "chwhi6C8S4X", "if0_34486544_kedaiPemudaBaru");

$nama = $_POST["nama"];
$email = $_POST["email"];
$pesan = $_POST["pesan"];

$query = "INSERT INTO infouser (nama, email, pesan) VALUES ('$nama','$email','$pesan')";
$result = mysqli_query($conn, $query);
if ($result){
    echo '<script>alert("Data berhasil terkirim");
    document.location.href = "index.html";</script>';
}
?>