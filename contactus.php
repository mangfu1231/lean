<!doctype html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <title>Contact US</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a style="margin-left:7%;" href="index.php">Inicio</a>
      <a href="aboutus.php">Quienes Somos</a>
      <a href="signup.php">Registrate</a>
      <a href="contactus.php">Contacto</a>
      <a href="login.php">Iniciar Sesion</a>
      <a href="buyfromus.php">Comprar Boletos</a>
    </nav>
  </header>

  <!-- Contact and social info -->
  <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannercontacto.jpg" alt="contactus" height="100%" width="100%">
    <span class="centertop">CONTACTO</span>
    <span class="centerbotm">CONTACTO</span>
  </div>

  <table id="tablecontact">
    <tr>
      <th style="border-bottom: none;" colspan="4">Informacion del contacto</th>
    </tr>
    <tr id="tablecontactcontent">
      <td width="25%"><i class="fa fa-map-marker" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p>198 West 21th Street,</p><br><p>Suite 721 New York NY 10016</p></td>
      <td width="25%"><i class="fa fa-phone" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p>+1235 2355 98</p></td>
      <td width="25%"><i class="fa fa-send-o" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p>info@diazapps.com</p></td>
      <td width="25%"> <i class="fa fa-globe" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p>diazapps.com</p></td>
    </tr>
  </table>

  <div id="cttsocial">
    <p>LEAN en las redes sociales</p>
    <div class="flex-container2">
      <div style="text-align: center;" class="col-3">
        <img src="image/facebook.png" alt="facebook" height="15%">
        <p class="comment">LEAN Ayuda Humanitaria</p>
      </div>
      <div style="text-align: center;" class="col-3">
        <img src="image/twitter.png" alt="twitter" height="15%">
        <p class="comment">@LeanEmergente</p>
      </div>
      <div style="text-align: center;" class="col-3">
        <img src="image/instagram.png" alt="instagram" height="15%">
        <p class="comment">@LEANAyudaHumanitaria</p>
      </div>
      <div style="text-align: center;" class="col-3">
        <img src="image/correo.png" alt="correo" height="15%">
        <p class="comment">lean.emergente@gmail.com</p>
      </div>
    </div>
  </div>

  <!-- Contact form -->
  <div style="width:70%; background-color: #f7f7f7; padding: 20px 20px 40px 20px; margin-bottom: 200px" id="wrapper">
    <p id="contacttitle">Estar en Contacto</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <div class="flex-container1">
        <div style="width:50%; margin-right: 1%;">
          <label for="fname">Nombre</label>
          <span id="fnameErr" style="color: red;"></span>
          <input type="text" id="fname" name="fname" placeholder="Tu Nombre" pattern="[a-z ,.'-]+" required>
        </div>
        <div style="width:50%; margin-left: 1%;">
          <label for="lname">Apellido</label>
          <span id="lnameErr" style="color: red;"></span>
          <input type="text" id='lname' name="lname" placeholder="Tu Apellido" pattern="[a-z ,.'-]+" required>
        </div>
      </div>

      <label for="email">Correo</label>
      <span id="emailErr" style="color: red;"></span>
      <input type="text" id="email" name="email" placeholder="Tu correo electrónico" pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" required>

      <label for="topic">Tema</label>
      <span id="topicErr" style="color: red;"></span>
      <input type="text" id="topic" name="topic" placeholder="Su asunto de este mensaje" required>

      <label for="message">Mensaje</label>
      <span id="messageErr" style="color: red;"></span>
      <textarea id="message" name="message" placeholder="Di algo sobre nosotros" style="height:200px" required></textarea>

      <input type="submit" value="Enviar mensaje" onclick="return validateForm();">
    </form>
  </div>
  
  <!-- Validate user input by JS -->
  <script>
  function validateForm() {
      var reEmail = new RegExp("^([a-zA-Z0-9_\\-\\.]+)@((\\[[0-9]{1,3}\\.[0-9]{1,3}\\.[0-9]{1,3}\\.)|(([a-zA-Z0-9\\-]+\\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\\]?)$");
      var reFname = new RegExp("^[a-z ,.'-]+$");
      var reLname = new RegExp("^[a-z ,.'-]+$");
      
      var email = document.getElementById("email").value;
      var fname = document.getElementById("fname").value;
      var lname = document.getElementById("lname").value;
      var topic = document.getElementById("topic").value;
      var message = document.getElementById("message").value;
      
      var emailErr = document.getElementById("emailErr");
      var fnameErr = document.getElementById("fnameErr");
      var lnameErr = document.getElementById("lnameErr");
      var topicErr = document.getElementById("topicErr");
      var messageErr = document.getElementById("messageErr");
      
      //Validate email
      if (email !== "" && reEmail.test(email)) {
          emailErr.innerHTML = "";
      }
      else if (email === "") {
          emailErr.innerHTML = "Please enter your email.";
      }
      else {
          emailErr.innerHTML = "Please enter a valid email address.";
      }
      
      //Validate first name
      if (fname !== "" && reFname.test(fname)) {
          fnameErr.innerHTML = "";
      }
      else if (fname === "") {
          fnameErr.innerHTML = "Please enter your first name.";
      }
      else {
          fnameErr.innerHTML = "Please enter a text only first name.";
      }
      
      //Validate last name
      if (lname !== "" && reLname.test(lname)) {
          lnameErr.innerHTML = "";
      }
      else if (lname === "") {
          lnameErr.innerHTML = "Please enter your last name.";
      }
      else {
          lnameErr.innerHTML = "Please enter a text only last name.";
      }
      
      //Validate topic
      if (topic !== "") {
          topicErr.innerHTML = "";
      }
      else {
          topicErr.innerHTML = "Please enter the topic.";
      }
      
      //Validate message
      if (message !== "") {
          messageErr.innerHTML = "";
      }
      else {
          messageErr.innerHTML = "Please enter the message.";
      }
  }
  </script>
  
  <!-- Validate user input and insert individual info into database -->
  <?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = test_input($_POST["email"]);
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $topic = test_input($_POST["topic"]);
    $message = test_input($_POST["message"]);
    
    if (!empty($email) and preg_match("/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/", $email) and !empty($fname) and preg_match("/[a-z ,.'-]+/", $fname) and !empty($lname) and preg_match("/[a-z ,.'-]+/", $lname) and !empty($message) and !empty($topic)) {
    $host = "localhost";
    $database = "lean";
    $user = "username";
    $pass = "password";
    
    $connection = mysqli_connect($host, $user, $pass, $database);
    
    $sql = "Insert into contact (email, fname, lname, topic, message) values ('$email', '$fname', '$lname', '$topic', '$message');";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    }
    else {
      die();
    }
  }
  ?>

  <!-- Social media logo -->
  <p style="font-size: 0.8vw; text-align: center;">LEAN EN LAS REDES SOCIALES</p>
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