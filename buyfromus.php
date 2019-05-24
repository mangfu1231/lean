<!doctype html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <title>Buy From Us</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="wrapper">
  <header>
    <div class="col-4 flex-container1">
      <img id="imglogo" src="image/logo-blanco.png" alt="logo-blanco" height="100%" width="100%">
      <p style="font-size: 1.4vh; margin-top: 10%">LEANEVENTOS</p>
    </div>
    <!-- Navigation -->
    <nav class="col-8">
      <a style="margin-left:7%;" href="index.php">Inicio</a>
      <a href="aboutus.php">Quienes Somos</a>
      <a href="signup.php">Registrate</a>
      <a href="contactus.php">Contacto</a>
      <a href="login.php">Iniciar Sesion</a>
      <a href="buyfromus.php">Comprar Boletos</a>
    </nav>
  </header>
  <!-- Banner -->
  <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannercboleto.jpg" alt="buyfromus" height="100%" width="100%">
    <span class="centertop">COMPRAR BOLETOS</span>
    <span class="centerbotm">COMPRAR BOLETOS</span>
  </div>

  <h2 class="line"><span>NUESTROS EVENTOS<span></h2>

  <p style="font-size: 1vw; text-align: center; margin-top: 50px; color: #B0B0B0; font-weight: lighter;">Tu asistencia es importante para nosotros visitanos en los eventos qu estamos realizando </p>

  <div class="flex-container2" id="evtbfu" style="margin-bottom: 300px; margin-top: 70px;width: 70%; margin-left: 16%">
  <!-- Loop for show records in database -->
  <?php
    
  $host = "localhost";
  $database = "lean";
  $user = "phpmyadmin";
  $pass = "wangchaowe";
    
  $conn = mysqli_connect($host, $user, $pass, $database); 
    
  $sql = "SELECT * FROM product;";
  $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));
  
  while($row = mysqli_fetch_assoc($result)){
  ?>

  <div>
    <a href="buyfromus<?php echo $row['ID']?>.php"><img src="<?php echo $row['img']?>" height="100%" width="100%"></a>
    <p><?php echo $row['name']?></p>
    <p><?php echo '$' . $row['price']?></p>
  </div>
  
  <?php
  }
  ?>
  </div>
  
  
  <!-- Footer subcription -->
  <footer class="flex-container2">
    <p class="col-13"><i class="fa fa-send-o" style="font-size:1.5vw; color:black; margin-right: 4%;"></i>Registrese para recibir un<span>boletin</span></p>
    <form class="flex-container1 col-13" style="margin-left: 2%;">
      <input class="rcornersleft" id="subcptinput" type="text" placeholder="Introduce tu correo electrónico" name="subscript">
      <button class="rcornersright" id="subcptbutton" type="submit">Suscribi</button>
    </form>
  </footer>

  <!-- Social media logo -->
  <p style="font-size: 0.8vw; text-align: center; margin-top: 130px;">LEAN EN LAS REDES SOCIALES</p>
  <div style="text-align: center; font-size:1.5vw">
    <i class="fa fa-twitter"></i>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
  </div>

  <!-- Back to top button -->
  <button onclick="topFunction()" id="topBtn" title="Go to top"><i class="fa fa-arrow-up" style="font-size:100%; color: white;"></i></button>

  <script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};  

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("topBtn").style.display = "block";
    } else {
      document.getElementById("topBtn").style.display = "none";
    }
  }  

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script> 


</body>
</html>