<?php session_start(); ?>
<!DOCTYPE html>

<html>
  <head>
       <link rel="stylesheet" href="styles.css">
  	<title>Snake Game</title>
  </head>

    
  <body>
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
      
      <form method="post">
         Podaj nick <input type="text" name="nick" id="nick">
         Podaj hasło<input type="password"  name="password" id="password">
          <input type="submit" value="Zagraj jako gość" name="guest">
          <input type="submit" value="Zaloguj"name="submit" id="submit">
      </form>
      <?php
        $nick = $_POST['nick'];
        $pswd = $_POST['password'];
      if(isset($_POST['submit'])){
          echo "guzik wciśnięto";
          echo "${nick}, ${pswd}";
          $sql = "SELECT * FROM player WHERE nick ='${nick}' AND password ='${pswd}';";
          if(mysqli_query($conn,$sql)){
              echo" Zapytanie wysłane";
            $_SESSION["nick"] = $nick;
            $_SESSION["password"] = $pswd;
               header("Location: game.php");
    exit;

         
              }
      }
                    if(isset($_POST['guest'])){
            $_SESSION["nick"] = "Gość";
            $_SESSION["password"] = "";
               header("Location: game.php");
    exit;}
      ?>
    </body>
</html>