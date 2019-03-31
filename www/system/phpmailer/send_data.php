<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);
//FORM CLIENT
$f_name_cli = isset($_POST['f_name_cli'])?$_POST['f_name_cli']:0;
$l_name_cli = isset($_POST['l_name_cli'])?$_POST['l_name_cli']:0;
$id_number_cli = isset($_POST['id_number_cli'])?$_POST['id_number_cli']:0;
$email_cli = isset($_POST['email_cli'])?$_POST['email_cli']:0;
$birth_cli = isset($_POST['birth_cli'])?$_POST['birth_cli']:0;
$address_cli = isset($_POST['address_cli'])?$_POST['address_cli']:0;
$zipcode_cli = isset($_POST['zipcode_cli'])?$_POST['zipcode_cli']:0;
$city_cli = isset($_POST['city_cli'])?$_POST['city_cli']:0;
$phone_cli = isset($_POST['phone_cli'])?$_POST['phone_cli']:0;
$mobile_cli = isset($_POST['name_cli'])?$_POST['name_cli']:0;
$created_cli = isset($_POST['created_cli'])?$_POST['created_cli']:0;
$modified = isset($_POST['modified'])?$_POST['modified']:0;
$form = isset($_POST['form_cli'])?$_POST['form_cli']:0;

$conn = open_database();

if($f_name_cli != NULL) {
    mysqli_query($conn,"INSERT INTO tbl_clients (f_name_cli,l_name_cli,email_cli,birth_cli,address_cli,zipcode_cli,city_cli,phone_cli,mobile_cli) VALUES ('$f_name_cli','$l_name_cli','$email_cli','$birth_cli','$address_cli','$zipcode_cli','$city_cli','$phone_cli','$mobile_cli')");
    $url = '../report_cli.php';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
} else {
    $url = '../report_cli.php';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}



//CAD INCOMES
$date_exp = isset($_POST['date_exp'])?$_POST['date_exp']:0;
$value_exp = isset($_POST['value_exp'])?$_POST['value_exp']:0;
$desc_exp = isset($_POST['desc_exp'])?$_POST['desc_exp']:0;
$supplier_exp = isset($_POST['supplier_exp'])?$_POST['supplier_exp']:0;

if($supplier_exp != NULL) {
    mysqli_query($conn,"INSERT INTO tbl_expenses (date_exp, value_exp, desc_exp, supplier_exp) VALUES ('$date_exp','$value_exp','$desc_exp','$supplier_exp')");
    $url = '../report_fin.php';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
} else {
    $url = '../report_fin.php';
    echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';
}

