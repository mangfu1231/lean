<!doctype html>

<html lang="en">
<head>
  <title>Sign Up</title>
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
	  <a style="margin-left:10%;" href="index.php">Inicio</a>
	  <a href="aboutus.php">Quienes Somos</a>
	  <a href="signup.php">Regístrate</a>
	  <a href="contactus.php">Contacto</a>
	  <a href="login.php">Iniciar Sesión</a>
	  <a href="buyfromus.php">Comprar Boletos</a>
	 </nav>
  </header>
  
  <!-- Main -->
  <div class="container">
    <img id="clip" src="image/bannerregistro.jpg" alt="signup" height="100%" width="100%">
    <span class="centertop">REGÍSTRATE</span>
    <span class="centerbotm">REGÍSTRATE</span>
  </div>
  <table id="register" style="width:70%">
    <tr>
      <th colspan="3">Elija el tipo de usuario para regitrares</th>
    </tr>
    <tr>
      <td><button type="button" id="individual">Como Individual</button></td>
      <td><button type="button" id="business">Como Negocio o Fundacion</button></td>
      <td><button type="button" id="agent">Como agente LEAN</button></td>
    </tr>
  </table>
  <p style="font-size: 0.8vw; text-align: center;">LEAN EN LAS REDES SOCIALES</p>
  <div style="text-align: center; font-size:1.5vw">
    <i class="fa fa-twitter"></i>
    <i class="fa fa-facebook"></i>
    <i class="fa fa-instagram"></i>
  </div>

<!-- Individual Register Form -->
<div id="myModal1" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div style="width:100%; padding: 2px 20px 40px 20px;" id="wrapper">
      <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw; margin-top: 0px;">Registro Individual</p>
      
      <form id="individualupdate" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="individual" method="post">
        <div class="flex-container1" style="">
          <div style="width: 50%">
            <div style="margin-right: 3%;">
              <label for="email">Correo</label>
              <input type="text" name="email" placeholder="Correo" title="Please enter a valid email address." pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" required>
            </div>
            <div style="margin-right: 3%; display: block;">
              <label for="fname">Nombre</label>
              <input type="text" name="fname" placeholder="Nombre" title="Please enter your first name." pattern="[a-z ,.'-]+" required>
            </div>
          </div>
            <div style="width: 50%;">
            <div>
              <label for="password">Contraseña</label>
              <input type="text" name="password" placeholder="Contraseña" title="Password must be between 4 and 8 digits long and include at least one numeric digit." pattern="(?=.*\d).{4,8}" required>
            </div>
            <div style="display: block;">
              <label for="lname">Apellido</label>
              <input type="text" name="lname" placeholder="Apellido" title="Please enter your last name." pattern="[a-z ,.'-]+" required>
            </div>
            </div>
          </div>

          <label for="address">Direccion</label>
          <input type="text" name="address" placeholder="Direccion" title="Please enter a valid address" pattern="(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})" required>
          <label for="city">Cludad</label>
          <input type="text" name="city" placeholder="Cludad" title="Please enter a valid city" pattern="[a-zA-Z]+(?:[\s-][a-zA-Z]+)*" required>

          <div class="flex-container1">
            <div style="width: 70%; margin-right: 3%;">
              <label style="display: block;" for="state">Estado</label>
              <div>
                <select style="width: 100%; height: 40px; margin-top: 17px;" name="state" required>
                  <option value="">Escoger...</option>
	              <option value="AL">Alabama</option>
            	  <option value="AK">Alaska</option>
	              <option value="AZ">Arizona</option>
	              <option value="AR">Arkansas</option>
	              <option value="CA">California</option>
	              <option value="CO">Colorado</option>
	              <option value="CT">Connecticut</option>
	              <option value="DE">Delaware</option>
	              <option value="DC">District Of Columbia</option>
	              <option value="FL">Florida</option>
	              <option value="GA">Georgia</option>
	              <option value="HI">Hawaii</option>
	              <option value="ID">Idaho</option>
	              <option value="IL">Illinois</option>
	              <option value="IN">Indiana</option>
	              <option value="IA">Iowa</option>
	              <option value="KS">Kansas</option>
	              <option value="KY">Kentucky</option>
	              <option value="LA">Louisiana</option>
	              <option value="ME">Maine</option>
	              <option value="MD">Maryland</option>
	              <option value="MA">Massachusetts</option>
	              <option value="MI">Michigan</option>
	              <option value="MN">Minnesota</option>
	              <option value="MS">Mississippi</option>
	              <option value="MO">Missouri</option>
	              <option value="MT">Montana</option>
	              <option value="NE">Nebraska</option>
	              <option value="NV">Nevada</option>
	              <option value="NH">New Hampshire</option>
	              <option value="NJ">New Jersey</option>
	              <option value="NM">New Mexico</option>
	              <option value="NY">New York</option>
	              <option value="NC">North Carolina</option>
	              <option value="ND">North Dakota</option>
	              <option value="OH">Ohio</option>
	              <option value="OK">Oklahoma</option>
	              <option value="OR">Oregon</option>
	              <option value="PA">Pennsylvania</option>
	              <option value="RI">Rhode Island</option>
	              <option value="SC">South Carolina</option>
	              <option value="SD">South Dakota</option>
	              <option value="TN">Tennessee</option>
	              <option value="TX">Texas</option>
	              <option value="UT">Utah</option>
	              <option value="VT">Vermont</option>
	              <option value="VA">Virginia</option>
	              <option value="WA">Washington</option>
	              <option value="WV">West Virginia</option>
	              <option value="WI">Wisconsin</option>
	              <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div style="width: 30%;">
              <label for="zipcode">Codigo Postal</label>
              <input type="text" name="zipcode" placeholder="Postal" title="Please enter a valid city" pattern="([0-9]{5})(-[0-9]{4})?" required>
            </div>
          </div>
          
          <input style="margin-left: 0px; " type="submit" value="Regidtrarse">
      </form>
      
      <button type="button" class="close button" style="color: black; background-color: lightgrey;">Cerrar</button>
    </div>
  </div>
</div>

<!-- Validate user input and insert individual info into database-->
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email"]);
  $password = test_input($_POST["password"]);
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $address = test_input($_POST["address"]);
  $city = test_input($_POST["city"]);
  $state = test_input($_POST["state"]);
  $zipcode = test_input($_POST["zipcode"]);
    
    if (!empty($email) and preg_match("/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/", $email) and !empty($password) and preg_match("/(?=.*\d).{4,8}/", $password) and !empty($fname) and preg_match("/[a-z ,.'-]+/", $fname) and !empty($lname) and preg_match("/[a-z ,.'-]+/", $lname) and !empty($address) and preg_match("/(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})/", $address) and !empty($city) and preg_match("/[a-zA-Z]+(?:[\s-][a-zA-Z]+)*/", $city) and !empty($state) and !empty($zipcode) and preg_match("/([0-9]{5})(-[0-9]{4})?/", $zipcode)) {
        $host = "localhost";
        $database = "lean";
        $user = "username";
        $pass = "password";
    
        $connection = mysqli_connect($host, $user, $pass, $database);
    
        $sql = "Insert into individual (email, password, fname, lname, address, city, state, zipcode) values ('$email', '$password', '$fname', '$lname', '$address', '$city', '$state', '$zipcode');";
        mysqli_query($connection, $sql);
    }
    else {
        die();
    }
}
?>



<!-- Register Form Popup Script-->
<script>
// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("individual");

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


<!-- Business Register Form -->
<div id="myModal2" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div style="width:100%; padding: 2px 20px 40px 20px;" id="wrapper">
      <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw; margin-top: 0px;">Registro Negocio o Fundacion</p>
      
      <form id="businessupdate" action="<?php echo htmlspecialchars('./insertBusiness.php');?>" name="business" method="post">
        <div class="flex-container1" style="">
          <div style="width: 50%">
            <div style="margin-right: 3%;">
              <label for="email2">Correo</label>
              <input type="text" name="email2" placeholder="Correo" title="Please enter a valid email address." pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" required>
            </div>
            <div style="margin-right: 3%; display: block;">
              <label for="fname2">Nombre</label>
              <input type="text" name="fname2" placeholder="Nombre" title="Please enter your first name." pattern="[a-z ,.'-]+" required>
            </div>
          </div>
            <div style="width: 50%;">
            <div>
              <label for="password2">Contraseña</label>
              <input type="text" name="password2" placeholder="Contraseña" title="Password must be between 4 and 8 digits long and include at least one numeric digit." pattern="(?=.*\d).{4,8}" required>
            </div>
            <div style="display: block;">
              <label for="lname2">Apellido</label>
              <input type="text" name="lname2" placeholder="Apellido" title="Please enter your last name." pattern="[a-z ,.'-]+" required>
            </div>
            </div>
          </div>

          <label for="address2">Direccion</label>
          <input type="text" name="address2" placeholder="Direccion" title="Please enter a valid address" pattern="(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})" required>
          <label for="city2">Cludad</label>
          <input type="text" name="city2" placeholder="Cludad" title="Please enter a valid city" pattern="[a-zA-Z]+(?:[\s-][a-zA-Z]+)*" required>

          <div class="flex-container1">
            <div style="width: 70%; margin-right: 3%;">
              <label style="display: block;" for="state2">Estado</label>
              <div>
                <select style="width: 100%; height: 40px; margin-top: 17px;" name="state2" required>
                  <option value="">Escoger...</option>
	              <option value="AL">Alabama</option>
            	  <option value="AK">Alaska</option>
	              <option value="AZ">Arizona</option>
	              <option value="AR">Arkansas</option>
	              <option value="CA">California</option>
	              <option value="CO">Colorado</option>
	              <option value="CT">Connecticut</option>
	              <option value="DE">Delaware</option>
	              <option value="DC">District Of Columbia</option>
	              <option value="FL">Florida</option>
	              <option value="GA">Georgia</option>
	              <option value="HI">Hawaii</option>
	              <option value="ID">Idaho</option>
	              <option value="IL">Illinois</option>
	              <option value="IN">Indiana</option>
	              <option value="IA">Iowa</option>
	              <option value="KS">Kansas</option>
	              <option value="KY">Kentucky</option>
	              <option value="LA">Louisiana</option>
	              <option value="ME">Maine</option>
	              <option value="MD">Maryland</option>
	              <option value="MA">Massachusetts</option>
	              <option value="MI">Michigan</option>
	              <option value="MN">Minnesota</option>
	              <option value="MS">Mississippi</option>
	              <option value="MO">Missouri</option>
	              <option value="MT">Montana</option>
	              <option value="NE">Nebraska</option>
	              <option value="NV">Nevada</option>
	              <option value="NH">New Hampshire</option>
	              <option value="NJ">New Jersey</option>
	              <option value="NM">New Mexico</option>
	              <option value="NY">New York</option>
	              <option value="NC">North Carolina</option>
	              <option value="ND">North Dakota</option>
	              <option value="OH">Ohio</option>
	              <option value="OK">Oklahoma</option>
	              <option value="OR">Oregon</option>
	              <option value="PA">Pennsylvania</option>
	              <option value="RI">Rhode Island</option>
	              <option value="SC">South Carolina</option>
	              <option value="SD">South Dakota</option>
	              <option value="TN">Tennessee</option>
	              <option value="TX">Texas</option>
	              <option value="UT">Utah</option>
	              <option value="VT">Vermont</option>
	              <option value="VA">Virginia</option>
	              <option value="WA">Washington</option>
	              <option value="WV">West Virginia</option>
	              <option value="WI">Wisconsin</option>
	              <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div style="width: 30%;">
              <label for="zipcode2">Codigo Postal</label>
              <input type="text" name="zipcode2" placeholder="Postal" title="Please enter a valid city" pattern="([0-9]{5})(-[0-9]{4})?" required>
            </div>
          </div>
            <div class="flex-container1" style="margin-bottom: 20px;">
              <input style="" type="radio" name="category" value="Tipo de negocio 1" checked> <span style="width: 30%; font-size: 0.9vw">Tipo de negocio 1</span>
              <input style="" type="radio" name="category" value="Tipo de negocio 2"> <span style="width: 30%; font-size: 0.9vw">Tipo de negocio 2</span>
              <input style="" type="radio" name="category" value="Tipo de negocio 3"> <span style="width: 30%; font-size: 0.9vw">Tipo de negocio 3</span>
            </div>
          <input style="margin-left: 0px; " type="submit" value="Regidtrarse">
      </form>
      <button type="button" class="close button" style="color: black; background-color: lightgrey;">Cerrar</button>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("business");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close")[1];

// When the user clicks the button, open the modal 
btn2.onclick = function() {
  myModal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  myModal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == myModal2) {
    myModal2.style.display = "none";
  }
}
</script>


<!-- Agent Register Form -->
<div id="myModal3" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div style="width:100%; padding: 2px 20px 40px 20px;" id="wrapper">
      <p style="border-bottom: 1px solid #f2f2f2; padding-bottom: 13px;font-size: 1.5vw; margin-top: 0px;">Registro de Agente LEAN</p>
      
      <form id="agentupdate" action="<?php echo htmlspecialchars('./insertAgent.php');?>" name="agent" method="post">
        <div class="flex-container1" style="">
          <div style="width: 50%">
            <div style="margin-right: 3%;">
              <label for="email3">Correo</label>
              <input type="text" name="email3" placeholder="Correo" title="Please enter a valid email address." pattern="([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)" required>
            </div>
            <div style="margin-right: 3%; display: block;">
              <label for="fname3">Nombre</label>
              <input type="text" name="fname3" placeholder="Nombre" title="Please enter your first name." pattern="[a-z ,.'-]+" required>
            </div>
          </div>
            <div style="width: 50%;">
            <div>
              <label for="password3">Contraseña</label>
              <input type="text" name="password3" placeholder="Contraseña" title="Password must be between 4 and 8 digits long and include at least one numeric digit." pattern="(?=.*\d).{4,8}" required>
            </div>
            <div style="display: block;">
              <label for="lname3">Apellido</label>
              <input type="text" name="lname3" placeholder="Apellido" title="Please enter your last name." pattern="[a-z ,.'-]+" required>
            </div>
            </div>
          </div>

          <label for="address3">Direccion</label>
          <input type="text" name="address3" placeholder="Direccion" title="Please enter a valid address" pattern="(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})" required>
          <label for="city3">Cludad</label>
          <input type="text" name="city3" placeholder="Cludad" title="Please enter a valid city" pattern="[a-zA-Z]+(?:[\s-][a-zA-Z]+)*" required>

          <div class="flex-container1">
            <div style="width: 70%; margin-right: 3%;">
              <label style="display: block;" for="state">Estado</label>
              <div>
                <select style="width: 100%; height: 40px; margin-top: 17px;" name="state3" required>
                  <option value="">Escoger...</option>
	              <option value="AL">Alabama</option>
            	  <option value="AK">Alaska</option>
	              <option value="AZ">Arizona</option>
	              <option value="AR">Arkansas</option>
	              <option value="CA">California</option>
	              <option value="CO">Colorado</option>
	              <option value="CT">Connecticut</option>
	              <option value="DE">Delaware</option>
	              <option value="DC">District Of Columbia</option>
	              <option value="FL">Florida</option>
	              <option value="GA">Georgia</option>
	              <option value="HI">Hawaii</option>
	              <option value="ID">Idaho</option>
	              <option value="IL">Illinois</option>
	              <option value="IN">Indiana</option>
	              <option value="IA">Iowa</option>
	              <option value="KS">Kansas</option>
	              <option value="KY">Kentucky</option>
	              <option value="LA">Louisiana</option>
	              <option value="ME">Maine</option>
	              <option value="MD">Maryland</option>
	              <option value="MA">Massachusetts</option>
	              <option value="MI">Michigan</option>
	              <option value="MN">Minnesota</option>
	              <option value="MS">Mississippi</option>
	              <option value="MO">Missouri</option>
	              <option value="MT">Montana</option>
	              <option value="NE">Nebraska</option>
	              <option value="NV">Nevada</option>
	              <option value="NH">New Hampshire</option>
	              <option value="NJ">New Jersey</option>
	              <option value="NM">New Mexico</option>
	              <option value="NY">New York</option>
	              <option value="NC">North Carolina</option>
	              <option value="ND">North Dakota</option>
	              <option value="OH">Ohio</option>
	              <option value="OK">Oklahoma</option>
	              <option value="OR">Oregon</option>
	              <option value="PA">Pennsylvania</option>
	              <option value="RI">Rhode Island</option>
	              <option value="SC">South Carolina</option>
	              <option value="SD">South Dakota</option>
	              <option value="TN">Tennessee</option>
	              <option value="TX">Texas</option>
	              <option value="UT">Utah</option>
	              <option value="VT">Vermont</option>
	              <option value="VA">Virginia</option>
	              <option value="WA">Washington</option>
	              <option value="WV">West Virginia</option>
	              <option value="WI">Wisconsin</option>
	              <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div style="width: 30%;">
              <label for="zipcode3">Codigo Postal</label>
              <input type="text" name="zipcode3" placeholder="Postal" title="Please enter a valid city" pattern="([0-9]{5})(-[0-9]{4})?" required>
            </div>
          </div>
          
          <input style="margin-left: 0px; " type="submit" value="Regidtrarse">
      </form>
      
      <button type="button" class="close button" style="color: black; background-color: lightgrey;">Cerrar</button>
    </div>
  </div>
</div>

<script>
// Get the modal
var modal3 = document.getElementById('myModal3');

// Get the button that opens the modal
var btn3 = document.getElementById("agent");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close")[2];

// When the user clicks the button, open the modal 
btn3.onclick = function() {
  myModal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  myModal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == myModal3) {
    myModal3.style.display = "none";
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