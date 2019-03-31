<?php 
  require_once('inc/functions.php');

  if (isset($_GET['id_cli'])){
    delete_cli($_GET['id_cli']);
  } elseif (isset($_GET['id_exp'])) {
    delete_exp($_GET['id_exp']);
  } else {
    die("ERRO: ID não definido.");
  }





