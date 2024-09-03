<?php
session_start();


// Generate a unique ID
$idGenerate = uniqid();

$_SESSION['form'] = $idGenerate;
if (isset($_SESSION['form'])) {
    $myIdStorage = $_SESSION['form'];
}

// Functions 
function myApp(){
  return "<b> Application submitted successful</b>";
}
function myMessage(){
  return "Thank you for choosing 02 FLOWERS. <br> We appreciate your business and hope you enjoy your new item, see you again soon.";
}

// Echo to output data to the screen 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fName = $_POST["fName"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  echo '<div style="text-align:center; margin-top:3em; font-size:1.5em; line-height:1.5em; background:yellow;">';
  echo strtoupper(myApp());
  echo  "</div>";
  echo '<div style="text-align:center; text-j font-size:2em; line-height:1.5em">';
  echo strtoupper("<br><b>Application NO: " . $myIdStorage);
  echo "<br></b>";
  echo "Welcome, " . $fName;
  echo "<br>Your email address is: " . $email;
  echo "<br>Your Phone Number is: " . $phone;
  echo "<br><br>"; 
  echo "</div>";
  echo '<div style="text-align:center; margin-top:3em; font-size:1.5em; line-height:1.5em; background:black; color:white;">';
  echo myMessage();
  echo "</div>";
}

  echo '<div style="background:red; font-size:1.2em; margin:2em 0; padding:1em;">';
  echo "<a href='index.html' style='text-decoration:none; background:yellow; color:blue; padding:.5em; border-radius:1em'>Click here to go back </a>";
  echo '</div>';