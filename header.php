<?php

$conn = mysqli_connect("localhost", "id20560535_karo", "o10T8#Qj!", "id20560535_kayaks");
if ($conn === false) {
  die("Error: could not connect" . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="main.css" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <title>Admin Index Page</title>
</head>

<header id="header_top">
  <nav>
    <ul>
      <li><img id="hamburger" src="images/hamburger.png" /></li>
      <li id="header_text">Halifax Canoe and Kayak</li>
      <li><img src="images/paddle-white.png" alt="Paddle logo" /></li>
    </ul>
  </nav>
</header>
<div id="sidebar" style="width: 500px; background-color: #818abf">
  <aside>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="#">Book trip</a></li>
      <li><a href="index.php">Admin Login</a></li>
    </ul>
  </aside>
</div>