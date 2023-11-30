<?php

session_start();

if(!isset($_SESSION['usuario'])){
  header('Location: tela-de-login.html?erro=true');
  exit();
}