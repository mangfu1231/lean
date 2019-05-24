<!-- Validate user input and insert agent info into database-->
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = test_input($_POST["email3"]);
  $password = test_input($_POST["password3"]);
  $fname = test_input($_POST["fname3"]);
  $lname = test_input($_POST["lname3"]);
  $address = test_input($_POST["address3"]);
  $city = test_input($_POST["city3"]);
  $state = test_input($_POST["state3"]);
  $zipcode = test_input($_POST["zipcode3"]);
    
    if (!empty($email) and preg_match("/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/", $email) and !empty($password) and preg_match("/(?=.*\d).{4,8}/", $password) and !empty($fname) and preg_match("/[a-z ,.'-]+/", $fname) and !empty($lname) and preg_match("/[a-z ,.'-]+/", $lname) and !empty($address) and preg_match("/(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})/", $address) and !empty($city) and preg_match("/[a-zA-Z]+(?:[\s-][a-zA-Z]+)*/", $city) and !empty($state) and !empty($zipcode) and preg_match("/([0-9]{5})(-[0-9]{4})?/", $zipcode)) {
        $host = "localhost";
        $database = "lean";
        $user = "username";
        $pass = "password";
    
        $connection = mysqli_connect($host, $user, $pass, $database);
    
        $sql = "Insert into agent (email, password, fname, lname, address, city, state, zipcode) values ('$email', '$password', '$fname', '$lname', '$address', '$city', '$state', '$zipcode');";
        mysqli_query($connection, $sql);
        
        echo "Thank you for register, agent user!";
    }
    else {
        echo "please fill all fields and check formats.";
        die();
    }
}
?>