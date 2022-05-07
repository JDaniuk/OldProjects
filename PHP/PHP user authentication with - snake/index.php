<?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>
      <link rel="stylesheet" href="styles.css">
  	<title>Snake Game</title>
  </head>

    
  <body>
      <h1>Gra "Snake" </h1>
      <a href="logowanie.php"><p>Zaloguj się</p></a>
      <a href="rejestracja.php"><p>Nie grałeś jeszcze? Zarejestruj się</p></a>
      <a href="instrukcja.php"><p>Instrukcja do gry</p></a>
    <?php 
       error_reporting(0);
      $conn = new mysqli("localhost","root","");
      
         $sql = "CREATE DATABASE IF NOT EXISTS snake";
    if(mysqli_query($conn, $sql)){
        $conn = new mysqli("localhost","root","","snake");
        $sql = "CREATE TABLE player(
        id int(9) auto_increment primary key not null,
        nick varchar(16) not null,
        password varchar(50) not null,
        highscore int(50) default 0
        );";
        mysqli_query($conn,$sql);
    }
      ?>
      
      <form method="post" action="login.php">

      </form>
    </body>
</html>