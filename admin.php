<?php
$username = $password = "";
$username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $username_err = "Lütfen kullanıcı adınızı girin.";
  } else {
    $username = $_POST["username"];
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
      $username_err = "Lütfen geçerli bir e-posta adresi girin.";
    }
  }
  
  if (empty($_POST["password"])) {
    $password_err = "Lütfen şifrenizi girin.";
  } else {
    $password = $_POST["password"];
  }
  
  if ($username == "b1812100001@sakarya.edu.tr" && $password == "b1812100001") {
    header("Location: admin1.php");
  } else {
    $password_err ="Kullanıcı adı veya şifre yanlış.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" 
   href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link rel="stylesheet" href="admin Giriş css.css">

  <title>admin Giriş</title>
  <style>
  header{
  background: url(images/1.jpg);
  background-position: center;
  background-size: cover;
  height:100vh;
  }
  </style>
</head>
  
<body>
 <header>
     <nav class="nav-wrapper grey darken-3">
     <div class="container">
        <a href="index.html" class="brand-logo">AHMED</a>
        <a href="#" class="sidenav-trigger" data-target="mo"><i class="material-icons">menu</i></a>

        <ul class="right hide-on-med-and-down">
		  <li><a href="iletisim/iletisim.html">iletişim</a></li>
	      <li><a href="cv.html">CV</a></li>
		  <li><a href="admin.php">admin Giriş</a></li>
          <li><a href="API/API.html">Api</a></li>
	      <li><a href="şerhim.html">şerhim</a></li>
          <li><a href="index.html">anasayfa</a></li>
        </ul>
   
        <ul class="sidenav grey darken-3 center" id="mo">
          <h3 class="black-text white"><b>AHMED</b></h3>
		  <li><a href="iletisim/iletisim.html" class="waves-effect waves-light white-text">iletişim</a></li>
		  <li><a href="cv.html" class="waves-effect waves-light white-text">Cv</a></li>
		  <li><a href="admin.php" class="waves-effect waves-light white-text">admin Giriş</a></li>
          <li><a href="API/API.html" class="waves-effect waves-light white-text">Api</a></li>
	      <li><a href="şerhim.html" class="waves-effect waves-light white-text">şerhim</a></li>
          <li><a href="index.html" class="waves-effect waves-light white-text">anasayfa</a></li>
	
        </ul>
     </div>
   </nav>
   
   <section>
   <form action ="admin1.php?source=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-box">
            <div class="form-value">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
						 <input type="email" id="username" name="username" value="<?php echo $username; ?>" required>
						 <label for="username">Email</label>
						 <span><?php echo $username_err; ?></span>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" required>
                        <label for="">Password</label>
						<span><?php echo $password_err; ?></span>
                    </div>
                    <button type="submit">Log in</button>
            </div>
        </div>
	  </form>
    </section>
  </header>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
  <script>
    $(document).ready(function(){
      $(".sidenav").sidenav();
    })
  </script>

</body>
</html>