<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email2 = test_input($_POST["email2"]);
  $password2 = test_input($_POST["password2"]);
  $fname2 = test_input($_POST["fname2"]);
  $lname2 = test_input($_POST["lname2"]);
  $address2 = test_input($_POST["address2"]);
  $city2 = test_input($_POST["city2"]);
  $state2 = test_input($_POST["state2"]);
  $zipcode2 = test_input($_POST["zipcode2"]);
  $category = test_input($_POST["category"]);
    
    if (!empty($email2) and preg_match("/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)/", $email2) and !empty($password2) and preg_match("/(?=.*\d).{4,8}/", $password2) and !empty($fname2) and preg_match("/[a-z ,.'-]+/", $fname2) and !empty($lname2) and preg_match("/[a-z ,.'-]+/", $lname2) and !empty($address2) and preg_match("/(\d{3,})\s?(\w{0,5})\s([a-zA-Z]{2,30})\s([a-zA-Z]{2,15})\.?\s?(\w{0,5})/", $address2) and !empty($city2) and preg_match("/[a-zA-Z]+(?:[\s-][a-zA-Z]+)*/", $city2) and !empty($state2) and !empty($zipcode2) and preg_match("/([0-9]{5})(-[0-9]{4})?/", $zipcode2) and !empty($category)) {
        $host = "localhost";
        $database = "lean";
        $user = "username";
        $pass = "password";
        
        $connection = mysqli_connect($host, $user, $pass, $database);
    
        $sql = "Insert into business (email, password, fname, lname, address, city, state, zipcode, category) values ('$email2', '$password2', '$fname2', '$lname2', '$address2', '$city2', '$state2', '$zipcode2', '$category');";
        mysqli_query($connection, $sql);
        
        echo "Thank you for register, business user!";
    }
    else {
        die();
    }
}
?>