<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $ad = mysqli_real_escape_string($conn, $_POST['kullanici_ad']);
   $soyad = mysqli_real_escape_string($conn, $_POST['kullanici_soyad']);
   $tc = mysqli_real_escape_string($conn, $_POST['kullanici_tcno']);
   $tel = mysqli_real_escape_string($conn, $_POST['kullanici_telefon']);
   $email = mysqli_real_escape_string($conn, $_POST['kullanici_email']);
   $sifre = mysqli_real_escape_string($conn, $_POST['kullanici_sifre']);
   $sifre = md5($_POST['cpassword']); // Burada "password" yerine "cpassword" kullanılmalı

   $select = "SELECT * FROM kullanici WHERE kullanici_email = '$email' && kullanici_sifre = '$sifre'"; // "email" ve "password" yerine "kullanici_email" ve "kullanici_sifre" kullanılmalı

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist!';
   } else {
      if($_POST['kullanici_sifre'] != $_POST['cpassword']){ // Şifre eşleşme kontrolü düzeltilmeli
         $error[] = 'Girilen şifreler farklı!';
      } else {
         $insert = "INSERT INTO kullanici(kullanici_ad, kullanici_soyad, kullanici_tcno, kullanici_telefon, kullanici_email, kullanici_sifre) VALUES('$ad','$soyad','$tc','$tel','$email','$sifre')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kayıt ol</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stil.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Kaydol</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?>
      <input type="text" name="kullanici_ad" required placeholder="Ad">
      <input type="text" name="kullanici_soyad" required placeholder="Soyad">
      <input type="text" name="kullanici_tcno" required placeholder="TC NO">
      <input type="tel" name="kullanici_telefon" required placeholder="Telefon">
      <input type="email" name="kullanici_email" required placeholder="Email">
      <input type="password" name="kullanici_sifre" required placeholder="Şifre">
      <input type="password" name="cpassword" required placeholder="Şifre Onay">
      <input type="submit" name="submit" value="Kaydol" class="form-btn">
      <p>Zaten bir hesabın var mı? <a href="index.php">Giriş Yap</a></p>
   </form>

</div>

</body>
</html>