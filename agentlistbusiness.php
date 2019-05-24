<!doctype html>

<html lang="en">
<head>
  <title>Agent Business</title>
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
  <h1 style="text-align: center;">Lista de Fundaciones</h1>
  
  <!-- Table title -->
  <table class="list" style="margin-bottom: 30px;">
    <tr>
      <th width="50%" colspan="2">NOMBRE DE LA FUNDACION</th>
      <th>EVENTO</th>
      <th>RESPONSABLE</th>
      <th>COMISION</th>
      <th>CONFIRMAR</th>
    </tr>
    
  <!-- Loop for show records in database -->
  <?php
    
  $host = "localhost";
  $database = "lean";
  $user = "phpmyadmin";
  $pass = "wangchaowe";
    
  $conn = mysqli_connect($host, $user, $pass, $database); 
    
  $sql = "SELECT * FROM eventBu, business, event where eventBu.IDBu=business.ID AND eventBu.IDEvt=event.ID;";
  $result = mysqli_query($conn, $sql) or die (mysqli_error($conn));

  while($row = mysqli_fetch_assoc($result)){
  ?>


  <tr class="border_bottom">
    <td width="30%" style="text-align: left;"><img style="object-fit: cover; width: 20%;" src="image/nologo.png" alt="nologo"></td>
    <td><p class="relativep"><?php echo $row['fname'] . " " . $row['lname']?></p></td>
    <td><p><?php echo $row['name']?></p></td>
    <td><p><?php echo $row['responsibility']?></p></td>
    <td><input type="text" name="commission" value="1"></td>
    <td><button type="button">Asignar</button></td>
  </tr>


  <?php
  }
  ?>
  </table>

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