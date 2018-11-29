<?php
require_once('config.php');
require_once(DBAPI);

$customers = null;
$customer = null;

$users = null;
$user = null;

$expenses = null;
$expense = null;

/**
 *  Listagem de Clientes
 */
function index() {
	global $customers;
	global $users;
	global $expenses;
	global $categories;

	$customers = find_all('tbl_customers');
	$users = find_all('tbl_users');
	$expenses = find_all('tbl_expenses');
	$category = find_all('tbl_category');
}

/**
 *  Cadastro de Clientes
 */
function add() {
	
	if (isset($_POST['customer'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

			$customer = $_POST['customer'];
			$customer['modified_cli'] = $customer['created_cli'] = $today->format("Y-m-d H:i:s");
			

			save('tbl_customers', $customer);
			header('location: report_cli.php');
		}
  }

  /**
 *  Cadastro de Despesas
 */
function add_exp() {
	
	if (isset($_POST['expense'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

			$expense = $_POST['expense'];
			$expense['modified_exp'] = $expense['create_exp'] = $today->format("Y-m-d H:i:s");
			

			save('tbl_expenses', $expense);
			header('location: report_fin.php');
		}
  }

    /**
 *  Cadastro de Despesas
 */
function add_cat() {
	
	if (isset($_POST['category'])) {
			$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

			$expense = $_POST['category'];
			$expense['modified_cat'] = $expense['create_cat'] = $today->format("Y-m-d H:i:s");
			

			save('tbl_category', $expense);
			header('location: input_prd.php');
		}
  }
  

/**
 *  Visualização de um Cliente
 */
function view($id = null) {
	global $customer;
	$customer = find('customers', $id);
  }

/**
 *  Visualização de uma Conta
 */
function view_exp($id = null) {
	global $expense;
	$expense = find('expense', $id);
  }
  

/**
 *  Exclusão de um Cliente
 */
function delete_cli($id = null) {

  global $customer;
  $customer = remove('tbl_customers', $id);

  header('location: report_cli.php');
}

/**
 *  Exclusão de uma Conta
 */
function delete_exp($id = null) {

	global $expense;
	$expense = remove_exp('tbl_expenses', $id);
  
	header('location: report_fin.php');
  }
