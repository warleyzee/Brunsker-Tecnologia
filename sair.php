<?php 
session_start();
#encerrar as sessões aberta.
unset($_SESSION['login']);
unset($_SESSION['usuario']);

header('location:index.php');
