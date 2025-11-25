<?php
session_start(); // Oturum başlat

// Oturum bilgisi kontrolü
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){
    header("Location: /panel"); // Panel sayfasına yönlendir
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="https://i.hizliresim.com/sqs8cst.jpg">
<title>Zindan Anasayfa</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f4f4f4;
    }
    #container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="text"] {
        padding: 8px;
        border-radius: 4px;
        border: 1px solid #ccc;
        width: 200px;
        margin-right: 10px;
    }
    input[type="submit"] {
        padding: 8px 16px;
        border-radius: 4px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
</style>
</head>
<body>
<body onclick="playAudio();" class=""><audio id="sec" idm_id="823202817">

  <source src="http://zindancheck.free.nf/muzik.mp3" type="audio/mpeg">

  </audio>

<script>

var x = document.getElementById("sec");

function playAudio() {

x.play();

}
</script>

</body>
<div id="container">
    <h2>Giriş</h2>
    <form action="login.php" method="post">
        <input type="text" name="username" placeholder="Kullanıcı Adı" required>
        <input type="submit" value="Giriş Yap">
    </form>
<p>Key Paylaşımı Yasaktır!!!</p>
</div>
</audio>
</body>
</html>