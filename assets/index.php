<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $sifre = md5($_POST['password']); 

   $select = " SELECT * FROM kullanici WHERE kullanici_email = '$email' && kullanici_sifre = '$sifre' "; 

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $row = mysqli_fetch_array($result);

      $_SESSION['user_email'] = $row['kullanici_email'];
      header('location:travels.php');
     
   } else {
      $error[] = 'Hatalı Mail veya Şifre!';
   }

}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giriş Sayfası</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stil.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Giriş Yap</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Email">
      <input type="password" name="password" required placeholder="Şifre">
      <input type="submit" name="submit" value="Giriş Yap" class="form-btn">
      <p>Hesabınız yok mu? <a href="register_form.php">kaydolun</a></p>
      <p><a href="forgot_password.php">Şifreni mi Unuttun?</a></p>

   </form>

</div>

</body>
</html>
