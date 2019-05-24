<!doctype html>

<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="wrapper">
  <!-- Navigation -->
  <header>
    <div class="col-4 flex-container1">
      <img id="imglogo" src="image/logo-blanco.png" alt="logo-blanco" height="100%" width="100%">
      <p style="font-size: 1.4vh; margin-top: 10%">LEANEVENTOS</p>
    </div>
    <nav class="col-8">
      <a style="margin-left:7%;" href="index1.php">Inicio</a>
      <a href="aboutus.php">Quienes Somos</a>
      <a href="signup.php">Regístrate</a>
      <a href="contactus.php">Contacto</a>
      <a href="login.php">Iniciar Sesión</a>
      <a href="buyfromus.php">Comprar Boletos</a>
    </nav>
  </header>
  
  <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannerlogin.jpg" alt="lonin" height="100%" width="100%">
    <span class="centertop">INICIAR SESIÓN</span>
    <span class="centerbotm">INICIAR SESIÓN</span>
  </div>

  <!-- Login form  -->
  <div style="width:70%; background-color: #f7f7f7; padding: 20px 20px 40px 20px; margin-bottom: 200px" id="wrapper">
    <p id="contacttitle">Iniciar Sesión</p>
    <form action="./loginphp.php" method="post">
      <div class="flex-container1">
        <div style="width:50%; margin-right: 1%;">
          <label for="username">Nombre de Usuario</label>
          <input type="text" name="username" placeholder="Nombre de Usuario o Correo">
        </div>
        <div style="width:50%; margin-left: 1%;">
          <label for="password">Contraseña</label>
          <input type="password" name="password" placeholder="Contraseña">
        </div>
      </div>
    <button id="recover" style="font-size: 0.8vw; margin-left: 41%; color: #FFC300; text-decoration:none; background-color: transparent; border: none;">Olvido su contraseña</button>
    <input style="margin-top: 15px; margin-left: 45%" type="submit" value="Entra">
    </form>
  </div>

  <!-- Social media logo -->
  <p style="font-size: 0.8vw; text-align: center;">LEAN EN LAS REDES SOCIALES</p>
  <div style="text-align: center; font-size:1.5vw">
    <i class="fa fa-twitter"></i>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
  </div>

  <!-- Password reset form  -->
  <!-- The Modal -->
  <div id="myModal1" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
      <div style="width:100%; padding: 2px 20px 0px 20px;" id="wrapper">
        <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw; margin-top: 0px;">Recuperar su Contraseña</p>
        <form id="individualupdate" action="/action_page.php">

          <div style="border-bottom: 1px solid #f2f2f2;">
            <label for="">Correo</label>
            <input type="text" id="" name="" placeholder="Correo">
          </div>

          <div class="flex-container1" style="flex-direction:row-reverse;">
            <input style="margin: 15px 0 0 5px; padding:0px 16px 0px 16px; position: relative; top:0px;" type="submit" value="Envlar">
            <button type="button" class="close button" style="padding: 8px 0px 10px 0px; margin:15px 0 0 0; color: black; background-color: lightgrey;">Cerrar</button>
          </div>

        </form>
        
      </div>
    </div>
  </div>  

  <script>
  // Get the modal
  var modal1 = document.getElementById('myModal1');  

  // Get the button that opens the modal
  var btn1 = document.getElementById("recover");  

  // Get the <span> element that closes the modal
  var span1 = document.getElementsByClassName("close")[0];  

  // When the user clicks the button, open the modal 
  btn1.onclick = function() {
    myModal1.style.display = "block";
  }  

  // When the user clicks on <span> (x), close the modal
  span1.onclick = function() {
    myModal1.style.display = "none";
  }  

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
    if (event.target == myModal1) {
      myModal1.style.display = "none";
    }
  }
  </script>


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