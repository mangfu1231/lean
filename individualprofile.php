<?php
session_start();
?>

<!doctype html>

<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  <title>Home Profile</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/leanevent.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
</head>

<body id="wrapper">
  <header>
    <div class="col-4 flex-container1">
      <img id="imglogo" src="image/logo-blanco.png" alt="logo-blanco" height="100%" width="100%">
      <p style="font-size: 1.4vh; margin-top: 10%">LEANEVENTOS</p>
    </div>
    <nav class="col-8">
      <a style="margin-left:66%;" href="individualhome.php">Inicio</a>
      <a href="individualmyevent.php">My Event</a>
      <a href="individualprofile.php">Individual</a>
    </nav>
  </header>
  <div class="container">
    <img style="filter: opacity(40%);" id="clip" src="image/bannercontacto.jpg" alt="contactus" height="100%" width="100%">
    <span class="centertop">PERFIL</span>
    <span class="centerbotm">PERFIL</span>
  </div>

  <div class="flex-container1" style="width:70%; margin-left: 13%;">
    <table width="75%" id="tablecontact">
      <tr>
        <th style="border-bottom: none;" colspan="2">Tu Infomación del Perfil</th>
      </tr>
      <tr id="tablecontactcontent">
        <td width="50%"><i class="fas fa-book" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p><?php echo $_SESSION['fname']; ?></p></td>
        <td width="50%"><i class="fas fa-map-marker-alt" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p><?php echo $_SESSION['address']; ?></p><br><p><?php echo $_SESSION['city'] . ", " . $_SESSION['state'] . ", " . $_SESSION['zipcode']; ?></p></td>
      </tr>
      <tr id="tablecontactcontent">
        <td width="50%"><i class="fas fa-book" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p><?php echo $_SESSION['lname']; ?></p></td>
        <td width="50%"><i class="fas fa-phone" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p>+1235 2355 98</p></td>
      </tr>
      <tr id="tablecontactcontent">
        <td width="50%"><i class="fas fa-user-tie" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p><?php echo $_SESSION['email']; ?></p></td>
        <td width="50%"><i class="far fa-paper-plane" style="font-size:1.5vw; color:black; margin-right: 10%;"></i><p><?php echo $_SESSION['email']; ?></p></td>
      </tr>
    </table>
    <img style="margin-top: 40px" src="image/user.png" alt="user" height="15%" width="15%">
  </div>

  <div style="width:70%; background-color: #f7f7f7; padding: 20px 20px 40px 20px; margin-bottom: 200px" id="wrapper">
    <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw;">Estar en Contacto</p>
    <form id="individualupdate" action="/action_page.php">
      <div class="flex-container1" style="margin-bottom: -300px">
        <div style="width: 70%">
          <div style="width:80%;">
            <label for="fname">Nombre</label>
            <input type="text" name="firstname" placeholder="Tu Nombre">
          </div>
          <div style="width:80%; display: block;">
            <label for="lname">Apellido</label>
            <input type="text" name="lastname" placeholder="Tu Apellido">
          </div>
        </div style="width: 30%;">
          <div>
            <img style="" src="image/user.png" alt="user" height="25%" width="auto">
            <button class="button" style="display: block; width: 33%;" type="button">Seleccioner Foio</button>
          </div>
        </div>

      <label for="email">Correo</label>
      <input type="text" id="email" name="email" placeholder="Tu correo electrónico">
      <div class="flex-container1">
        <div style="width: 32%; margin-right: 2%;">
          <label for="phone">Telefono</label>
          <input type="text" id="phone" name="phone" placeholder="Telefono">
        </div>
        <div style="width: 32%; margin-right: 2%;">
          <label for="username">Usuario</label>
          <input type="text" id="username" name="username" placeholder="Nombre de Usuario">
        </div>
        <div style="width: 32%; margin-right: 0%;">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" placeholder="Contraseña">
        </div>
      </div>
      <div>
        <p id="note">Note</p>
        <p style="margin-top: -5px;">Solo puede cambiar los datos (Telefono Contraseha y foto)</p>
      </div>
      <input style="margin-top: 10px; font-size: 1vw;" type="submit" value="Enviar mensaje">
    </form>
  </div>

</body>
</html>