<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];
  if (empty($username) || empty($password)) {
    header("Location: ./login.php"); /* Redirect browser */
    exit();
  }
  else {
    $host = "localhost";
    $database = "lean";
    $user = "phpmyadmin";
    $pass = "wangchaowe";
    
    $conn = mysqli_connect($host, $user, $pass, $database);  
    
    $sqlIndividual = "SELECT * FROM individual WHERE email='$username' AND password='$password';";
    $sqlBusiness = "SELECT * FROM business WHERE email='$username' AND password='$password';";
    $sqlAgent = "SELECT * FROM agent WHERE email='$username' AND password='$password';";
    
    $resultIndividual = mysqli_query($conn, $sqlIndividual) or die (mysqli_error($conn));
    $resultBusiness = mysqli_query($conn, $sqlBusiness) or die (mysqli_error($conn));
    $resultAgent = mysqli_query($conn, $sqlAgent) or die (mysqli_error($conn));
    
      if ($rowIndividual=mysqli_fetch_assoc($resultIndividual)){
        header("Location: ./individualhome.php");
        session_start();
        $_SESSION['email']=$rowIndividual['email'];
        $_SESSION['fname']=$rowIndividual['fname'];
        $_SESSION['lname']=$rowIndividual['lname'];
        $_SESSION['address']=$rowIndividual['address'];
        $_SESSION['city']=$rowIndividual['city'];
        $_SESSION['state']=$rowIndividual['state'];
        $_SESSION['zipcode']=$rowIndividual['zipcode'];
        $_SESSION['ID']=$rowIndividual['ID'];
      }
      if ($rowBusiness=mysqli_fetch_assoc($resultBusiness)){
        header("Location: ./businesshome.php");
        session_start();
        $_SESSION['email']=$rowBusiness['email'];
        $_SESSION['fname']=$rowBusiness['fname'];
        $_SESSION['lname']=$rowBusiness['lname'];
        $_SESSION['address']=$rowBusiness['address'];
        $_SESSION['city']=$rowBusiness['city'];
        $_SESSION['state']=$rowBusiness['state'];
        $_SESSION['zipcode']=$rowBusiness['zipcode'];
        $_SESSION['ID']=$rowBusiness['ID'];
      }
      if ($rowAgent=mysqli_fetch_assoc($resultAgent)){
        header("Location: ./agenthome.php");
        session_start();
        $_SESSION['email']=$rowAgent['email'];
        $_SESSION['fname']=$rowAgent['fname'];
        $_SESSION['lname']=$rowAgent['lname'];
        $_SESSION['address']=$rowAgent['address'];
        $_SESSION['city']=$rowAgent['city'];
        $_SESSION['state']=$rowAgent['state'];
        $_SESSION['zipcode']=$rowAgent['zipcode'];
        $_SESSION['ID']=$rowAgent['ID'];
      }
      else {
          echo "fail to login";
          exit;
      }
  }
}
?>