<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head>
  <title>Business Individual</title>
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
      <a style="margin-left:67%;" href="businesshome.php">Inicio</a>
      <a href="businessmyevent.php">My Event</a>
      <a href="businessprofile.php">Fundacion</a>
    </nav>
  </header>
  <h1 style="text-align: center;">Lista de Eventos</h1>

<!-- Table title -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <table class='list'>
  <tr>
  <th width='50%' colspan='2'>DETALLES DEL EVENTOS</th>
  <th>LUGAR</th>
  <th>FECHA</th>
  <th>HORA</th>
  <th>ASISTENCIA</th>
  </tr>

  <!-- Loop for show records in database -->
  <?php
    
  $host = "localhost";
  $database = "lean";
  $user = "username";
  $pass = "password";
    
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
    <td><time><?php echo $row['time']?></time></td>
    <td><input type="submit" name="id" value="<?php echo $row['ID'];?>"></td>
  </tr>


  <?php
  }
  ?>
  </table>
</form>

<!-- Add event to my events -->
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $IdEvt = $_POST["id"];
  $IdBu = $_SESSION['ID'];
  
  $host = "localhost";
  $database = "lean";
  $user = "username";
  $pass = "password";
    
  $connection = mysqli_connect($host, $user, $pass, $database);
  
  $sql = "Insert into eventBu (IdEvt, IdBu) values ('$IdEvt', '$IdBu');";
  mysqli_query($connection, $sql);
  mysqli_close($connection);
  }
?>

</body>
</html>