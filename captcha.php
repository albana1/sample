<?php

session_start();


if ($_SERVER["REQUEST_METHOD"] <> "POST") 
 die("You can only reach this page by posting from the html form");


if ( ($_REQUEST["txtCaptcha"] == $_SESSION["security_code"]) && 
    (!empty($_REQUEST["txtCaptcha"]) && !empty($_SESSION["security_code"])) ) {
  echo "<h1>Test successful!</h1>";
} else {
  echo "<h1>Test failed! Try again!</h1>";
}
?>