<!doctype html>

<html lang="en">
    
<head>
  <title>Agent Event Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
</head>

<body id="wrapper">
  <!-- Navigation -->
  <header>
    <div class="col-4 flex-container1">
      <img id="imglogo" src="image/logo-blanco.png" alt="logo-blanco" height="100%" width="100%">
      <p style="font-size: 1.4vh; margin-top: 10%">LEANEVENTOS</p>
    </div>
    <nav class="col-8">
      <a style="margin-left:10%;" href="agenthome.php">Incio</a>
      <a style="margin-left:3%;" href="agentlistindividual.php">List de Voluntarios</a>
      <a style="margin-left:3%;" href="agentlistbusiness.php">List de Fundaciones</a>
      <a style="margin-left:3%;" href="agentlistevent.php">Evebtos</a>
      <a style="margin-left:3%;" href="agentprofile.php">Agente</a>
    </nav>
  </header>
  
  <main>
    <!-- banner -->
    <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannercontacto.jpg" alt="contactus" height="100%" width="100%">
    <span class="centertop">REGISTRO DE EVENTO</span>
    <span class="centerbotm">REGISTRO</span>
    </div>
    
  <!-- Add event form -->
  <div style="width:70%; background-color: #f7f7f7; padding: 20px 20px 40px 20px; margin-bottom: 200px" id="wrapper">
    <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw;">Registro de Evento</p>
    <form id="individualupdate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
      <div class="flex-container1" style="margin-bottom: -300px">
        <div style="width: 70%;">
          <div style="width:80%;">
            <label for="name">Nombre</label>
            <span id="nameErr" style="color: red;"></span>
            <input type="text" name="name" id="name" placeholder="Nombre del Evento" pattern="[a-z ,.'-]+" required>
          </div>
          <div style="width:80%; display: block;">
            <label for="responsibility">Responsable</label>
            <input type="text" name="responsibility" placeholder="Nombre del Responsable">
          </div>
        </div>
        <div style="width: 30%;">
          <img style="" src="image/imagensubir.png" alt="subir" height="25%" width="auto">
          <input id="imagebutton fileToUpload" class="button" style="display: block; width: 60%;" type="file" name="fileToUpload" placeholder="Seleccioner Imagen">
        </div>
      </div>

      <label for="place">Lugar</label>
      <input type="text" id="place" name="place" placeholder="Direccion del Lugar del Eventos" required>
      <div class="flex-container1">
        <div style="width: 32%; margin-right: 2%;">
          <label for="date">Fecha</label>
          <input type="date" id="date" name="date" placeholder="1900/01/01/" pattern="\d{4}\/\d{1,2}\/\d{1,2}/" required>
        </div>
        <div style="width: 32%; margin-right: 2%;">
          <label for="time">Hora</label>
          <input type="time" id="time" name="time" placeholder="00:00" pattern="(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]" required>
        </div>
        <div style="width: 32%; margin-right: 0%;">
          <label for="ticket">Valor de Boleto</label>
          <input type="number" min="1" step="any" id="ticket" name="ticket" placeholder="$000.00">
        </div>
      </div>
      <input style="margin-top: 10px;" type="submit" value="Guardar" onclick="return validateForm();">
    </form>
  </div>
  </main>
  
  <!-- Validate form by JS -->
  <script>
  function validateForm() {
      var reName = new RegExp("^[a-z ,.'-]+$");
      var name = document.getElementById("name").value;
      var nameErr = document.getElementById("nameErr");
      
      //Validate first name
      if (name !== "" && reName.test(name)) {
          nameErr.innerHTML = "";
      }
      else if (name === "") {
          nameErr.innerHTML = "Please enter your event name.";
      }
      else {
          nameErr.innerHTML = "Please enter a text only event name.";
      }
   }
   </script>
  
  <!-- Validate form by php and insert into database-->
  <?php
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $place = test_input($_POST["place"]);
    $date = test_input($_POST["date"]);
    $time = test_input($_POST["time"]);
    $responsibility = test_input($_POST["responsibility"]);
    $ticket = test_input($_POST["ticket"]);
    
    //image upload parameters
    $target_dir = "./uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
    if (!empty($name) and preg_match("/[a-z ,.'-]+/", $name) and !empty($place) and !empty($date) and !empty($time) and preg_match("/(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]/", $time) and $check=true) {
    
    //upload image to a folder on server
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);    
        
    //connnect database
    $host = "localhost";
    $database = "lean";
    $user = "phpmyadmin";
    $pass = "wangchaowe";
    
    $connection = mysqli_connect($host, $user, $pass, $database);
    
    $sql = "Insert into event (name, place, date, time, responsibility, ticket, img) values ('$name', '$place', '$date', '$time', '$responsibility', '$ticket', '$target_file');";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
    }
    else {
      die();
    }
  }
  ?>
  
</body>
</html>