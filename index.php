<!doctype html>

<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="wrapper">
  <!-- Header include logo and links -->
  <header>
  	<div class="col-4 flex-container1">
  	  <img id="imglogo" src="image/logo-blanco.png" alt="logo-blanco" height="100%" width="100%">
  	  <p style="font-size: 1.4vh; margin-top: 10%">LEANEVENTOS</p>
    </div>
  	<nav class="col-8">
	  <a style="margin-left:10%;" href="index1.php">Inicio</a>
	  <a href="aboutus.php">Quienes Somos</a>
	  <a href="signup.php">Regístrate</a>
	  <a href="contactus.php">Contacto</a>
	  <a href="login.php">Iniciar Sesión</a>
	  <a href="buyfromus.php">Comprar Boletos</a>
	 </nav>
  </header>
  
  <!-- Main -->
  <img src="image/bannerlean2.jpg" alt="bannerlean" height="100%" width="100%">

  <div style="margin-top: 8%">
    <h2 class="line"><span style="font-size: 1.2vw;">¿QUÉHACEMOS?<span></h2>
    <p style="font-size: 0.8vw; text-align: center; margin: 3% 25% 10% 25%; color: #B0B0B0; font-weight: lighter;">La asociación civil LEAN fue creada con el objetivo de ayudar, a través de acciones concretas, a nuestros conciudadanos en Venezuela ante Ia grave escasez de medicinas e insumos médicos en que se encuentra el pais. Nuestra misión consiste en recolectar ayuda médico sanitaria en delegaciones en España y, a través de agentes de transporte, llevarlos a Venezuela para que otras asociaciones se encarguen de su distribución. De esta manera aportamos nuestro granito de arena ayudando a llevar asistencia humanitaria a Venezuela. Somos una asociación sin ﬁnes de lucro, dedicada a Ia defensa de los Derechos Humanos.</p>
  </div>

  <div id="mainwhole">
    <img src="image/bannerabout.jpg" alt="bannerabout" height="100%" width="100%">
    <div id="mainbanner" class="flex-container2">
      <div style="margin: 0px 5% 0px 5%;">
        <p style="text-align: center; font-size: 1.6vw">478</p>
        <p style="font-size: 0.9vw; margin-top: -12%">VOLUNTARIOS</p>
      </div>
      <div style="margin: 0px 5% 0px 5%;">
        <p style="text-align: center; font-size: 1.6vw">60.000</p>
        <p style="font-size: 0.9vw; margin-top: -12%">PERSONAS BENEFICIADAS</p>
      </div>
      <div style="margin: 0px 5% 0px 5%;">
        <p style="text-align: center; font-size: 1.6vw">45</p>
        <p style="font-size: 0.9vw; margin-top: -12%">ALIADOS</p>
      </div>
    </div>
    <div style="margin: 9.7% auto 0 auto;">
      <p style="text-align: center; font-size: 1.2vw;">"La injusticia, en cualquier parte, es una amenaza a la justicia en todas partes."</p>
      <p style="text-align: right; font-size: 0.7vw; color:#808080; margin-right: 24%; margin-top: -0.7%;">Martin Luter King</p>
    </div>
    <img style="clip-path: inset(0 0 76% 0); margin-top: -0.3%; margin-bottom: -30%;" src="image/bannerabout.jpg" alt="bannerabout" height="100%" width="100%">
  </div>

  <div id="ali" style="margin-top: 8%">
    <h2 class="line"><span style="font-size: 1.2vw;">ALIADOS<span></h2>
    <div class="flex-container2">
      <img class="col-3" src="image/logo1.PNG" alt="PICOS DE EUROPA" height="100%" width="100%">
      <img class="col-3" src="image/logo2.PNG" alt="GLOBAL TECHNOLOGY SERVICES" height="100%" width="100%">
      <img class="col-3" style="" src="image/logo3.PNG" alt="TEQUE TAPAS" height="100%" width="100%">
      <img class="col-3" style="" src="image/logo4.PNG" alt="SENOSALUD" height="100%" width="100%">
    </div>
  </div>  
  
  <!-- Footer subcription -->
  <footer class="flex-container2">
    <p class="col-13"><i class="fa fa-send-o" style="font-size:1.5vw; color:black; margin-right: 4%;"></i>Registrese para recibir un<span>boletin</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="flex-container1 col-13" style="margin-left: 2%;" method="post">
      <input class="rcornersleft" id="subcptinput" type="text" placeholder="Introduce tu correo electrónico" name="subscript" pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" title="Please enter a valid email address." required>
      <button class="rcornersright" id="subcptbutton" type="submit" onclick="return alertWindowShowByID('subcptinput');">Suscribi</button>
    </form>
  </footer>
  
  <!-- Alert window function -->
  <script>
    function alertWindowShowByID(id) {
      var name = document.getElementById(id).value;
      if (name !== "" && /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/.test(name)){
          return confirm('Thank you for subscription! A confirmation have been sent to ' + name);
      }
      else if (name === ""){
          return confirm('Please enter your email to subscript.');
      }
      else {
          return confirm('Please enter a valid email address.');
      }
    }
  </script>
  
  <!-- Sending email after subscript and insert record into database-->
  <?php 
  if (!empty($_POST) && filter_var($_POST['subscript'], FILTER_VALIDATE_EMAIL)) {
    mail($_POST['subscript'],"Subscription Confirmation","Thank you for subscription!");

    $host = "localhost";
    $database = "lean";
    $user = "username";
    $pass = "password";

    $connection = mysqli_connect($host, $user, $pass, $database);
    
    $email = $_POST['subscript'];
    $sql = "Insert into subscription (email) values ('$email');";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
  }
  ?>

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