<?php
require_once('inc/functions.php');

$codprod = $_POST['produto'];
$qtd = $_POST['qtd'];

$array = find_prd($codprod);

echo $array;