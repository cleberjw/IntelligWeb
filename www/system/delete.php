<?php 
  require_once('inc/functions.php');

  if (isset($_GET['id_customer'])){
    delete_customer($_GET['id_customer']);
  } elseif (isset($_GET['id_exp'])) {
    delete_exp($_GET['id_exp']);
  } else {
    die("ERRO: ID não definido.");
  }





