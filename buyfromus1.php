<!doctype html>

<html lang="en">
<head>
  <title>Buy From Us 1</title>
  <meta charset="utf-8">
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
      <a href="signup.php">Regístrate</a>
      <a href="contactus.php">Contacto</a>
      <a href="login.php">Iniciar Sesión</a>
      <a href="buyfromus.php">Comprar Boletos</a>
    </nav>
  </header>
  
  <!-- Banner -->
  <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannercboleto.jpg" alt="buyfromus" height="100%" width="100%">
    <span class="centertop">COMPRAR BOLETOS</span>
    <span class="centerbotm">COMPRAR BOLETOS</span>
  </div>

  <!-- fetch data from database -->
  <?php
    $host = "localhost";
    $database = "lean";
    $user = "username";
    $pass = "password";
    
    $connection = mysqli_connect($host, $user, $pass, $database);
    
    $sql = "select * from product where id='1';";
    $result = mysqli_query($connection, $sql) or die (mysqli_error($conn));
    while($row = mysqli_fetch_assoc($result)){
  ?>

  <div #id="itemdetail" class="flex-container1" style="width: 80%; margin-left: 12%; margin-bottom: 100px;">
    <div style="width: 50%;">
      <img style="object-fit: cover; width: 80%;" src="<?php echo $row['img']?>" alt="monibaner4" height="100%" width="100%">
    </div>
    <div style="width: 50%; margin-left: -20px;">
      <h1 style="font-size: 1.5vw; font-weight: normal; margin: 0 0;"><?php echo $row['name']?></h1>
      <div>
        <p style="font-size: 1vw; width: 48%; display: inline;"><?php echo '$' . $row['price']?></p>
          <div style="width: 48%; float: right;">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <span style="font-size: 0.7vw; color: #c4c4c4;"> (74 Rating) </span>
          </div>
      </div>
      <p style="font-size: 1.1vw"><?php echo $row['description']?></p>
      <p style="font-size: 1.1vw; margin-top: 30px;">Numero de Entradas</p>
      <div class="flex-container1" style="margin-bottom: 30px;">
        <button type="button" style="font-size:10px; background-color: #c6c6c6;"><i class="fa fa-minus" style=""></i></button>
        <p style="margin: 1% 5% 0 5%;"> 1 </p>
        <button type="button" style="font-size:10px; background-color: #c6c6c6;"><i class="fa fa-plus" style=""></i></button>
      </div>
  <?php
  }
  mysqli_close($connection);
  ?>
      
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"><button id="buttonincart" type="submit" style="font-size: 0.9vw;"><i style="font-size: 150%;" class="fa fa-shopping-cart"></i>Comprar</button></form>
    </div>
  </div>
  
  <!-- Insert user purchase info into database -->
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    $host = "localhost";
    $database = "chaoweiw_wdm";
    $user = "username";
    $pass = "password";
    
    $connection = mysqli_connect($host, $user, $pass, $database);
    
    $sql = "Insert into productUser (productID, userID) values ('1', '0');";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    }
  ?>

  <!-- Product details -->
  <div style="width: 80%;">
    <div class="flex-container1 dropdown" style="margin-left: 14%;">
      <button class="buttondes" type="button" style="font-size: 1vw;">DESCRIPCION</button>
      <button class="buttondes" type="button" style="font-size: 1vw;">ENCARGADOS</button>
      <button class="buttondes" type="button" style="font-size: 1vw;">PATROCINANTES</button>
    </div>
    <div class="dropdown-content">
      <p style="font-size: 1.2vw; font-weight: 100;">Recién he comenzado a leer un libro cuyo mensaje principal es aprender a buscar ese algo mejor todos los días. El libro está escrito por una persona que vive con diabetes tipo 1 y nos presenta oomo los adelantos en tratamientos y tecnología, aunque no han curado su condición, día tras dia mejoran su calidad de vida.
      <br><br>Busquemos siempre mejorar algo en nuestras vidas, mantengamos el deseo de progresar, de educamos más acerca de Ia condición de nuestros hijos y verás como poco a poco comenzaremos a entenderla mejor.</p>
    </div>
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