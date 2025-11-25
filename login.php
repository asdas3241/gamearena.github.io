<?php
session_start(); // Oturum başlat

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adını kontrol et
    $usernames = array("zindanv33_ekip", "efekey", "kullanici2", "kullanici3", "kullanici4", "kullanici5");
    if(in_array($_POST['username'], $usernames)) {
        $_SESSION['loggedin'] = true; // Oturum bilgisini sakla
        $_SESSION['username'] = $_POST['username']; // Kullanıcı adını sakla
        header("Location: /panel"); // Panel sayfasına yönlendir
    } else {
        echo "Yanlış kullanıcı adı!";
    }
}
?>
