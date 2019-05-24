<!doctype html>

<html lang="en">
<head>
  <title>Agent Event</title>
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
      <a style="margin-left:10%;" href="agenthome.php">Incio</a>
      <a style="margin-left:3%;" href="agentlistindividual.php">List de Voluntarios</a>
      <a style="margin-left:3%;" href="agentlistbusiness.php">List de Fundaciones</a>
      <a style="margin-left:3%;" href="agentlistevent.php">Evebtos</a>
      <a style="margin-left:3%;" href="agentprofile.php">Agente</a>
    </nav>
  </header>
  <h1 style="text-align: center;">Lista de Eventos</h1>

  <a href="agentaddevent.php"><button id="addbutton" type="button">Asignar</button></a>
  
  <!-- Table title -->
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table class="list" style="margin-bottom: 30px;">
    <tr>
      <th width="50%" colspan="2">DETALLES DEL EVENTOS</th>
      <th>LUGAR</th>
      <th>FECHA</th>
      <th>MODIFICAR</th>
      <th>ELIMINAR</th>
    </tr>
    
  <!-- Loop for show records in database -->
  <?php
    
  $host = "localhost";
  $database = "lean";
  $user = "phpmyadmin";
  $pass = "wangchaowe";
    
  $conn = mysqli_connect($host, $user, $pass, $database); 
    
  $sql = "SELECT * FROM event;";
  $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

  while($row = mysqli_fetch_assoc($result)){
  ?>


  <tr class="border_bottom">
    <td width="20%"><img style="object-fit: cover; width: 150%; clip-path: inset(0% 50% 0% 0);"  src="<?php echo $row['img1']?>" alt="minibanner1"></td>
    <td><p class="relativepib"><?php echo $row['name']?></p></td>
    <td><p><?php echo $row['place']?></p></td>
    <td><time><?php echo $row['date']?></time></td>
    <td><button type="button" style="background-color:#707070; width: 35%;" name="Mdf"><i class="fa fa-edit" style="font-size:19px; color: white;"></i></td>
    <td><input type="submit" name="idDlt" value="<?php echo $row['ID'];?>"></td>
  </tr>


  <?php
  }
  ?>
  </table>
</form>
    
<!-- Event Modification Form -->
<div id="myModal" class="modal">
    <!-- Modal content -->
    <div style="width:70%; background-color: #f7f7f7; padding: 20px 20px 60px 20px; margin-bottom: 200px" id="wrapper">
    <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw;">Registro de Evento</p>
    <form id="individualupdate" action="./eventMdf.php" method="post" enctype="multipart/form-data">
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
    <button type="button" class="close button" id="close" style="color: black; background-color: lightgrey;">Cerrar</button>
    </div>
</div>


<script>
// Validate form by JS
function validateForm() {
    var reName = new RegExp("^[a-z ,.'-]+$");
    var name = document.getElementById("name").value;
    var nameErr = document.getElementById("nameErr");
      
    // Validate first name
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
   
   

// Register Form Popup Script
var modal = document.getElementById('myModal');
var btn = document.getElementsByName("Mdf")[0];
var span = document.getElementById("close");


btn.onclick = function() {
  myModal.style.display = "block";
}


span.onclick = function() {
  myModal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == myModal) {
    myModal.style.display = "none";
  }
}
</script>
    
    
    
<!-- Modify event or delete event -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $IdDlt = $_POST["idDlt"];
  
  $host = "localhost";
  $database = "chaoweiw_wdm";
  $user = "chaoweiw_root";
  $pass = "nYo2D#vxvylH";
    
  $connection = mysqli_connect($host, $user, $pass, $database);
  
  
  if (isset($_POST['idDlt'])) {
    $sql = "DELETE FROM event WHERE ID='$IdDlt';";
    mysqli_query($connection, $sql);
    mysqli_close($connection);
  }

  else {
    mysqli_close($connection);
  }
}
?>
    
    
  <!-- Page button -->
  <div class="btn-group flex-container1">
    <button type="button"><i class="fa fa-angle-double-left" style=""></i></button>
    <button type="button">1</button>
    <button type="button">2</button>
    <button type="button">3</button>
    <button type="button">4</button>
    <button type="button"><i class="fa fa-angle-double-right" style=""></i></button>
  </div>

</body>
</html>