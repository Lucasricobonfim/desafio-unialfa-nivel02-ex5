<?php
   session_start();

   if (isset($_POST["login"]) && isset($_POST["senha"])) {
      $login = $_POST["login"];
      $senha = $_POST["senha"];
      
      $_SESSION["login"] = $login;
      $_SESSION["senha"] = $senha;
   
      print_r($_SESSION["login"]);
      echo '<br>';
      print_r($_SESSION["senha"]);
      
  }

        