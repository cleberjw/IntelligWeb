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

  
/******************************************************************************************************************************
 *  	QUERY'S SELECT DATABASE                                                   *
 *****************************************************************************************************************************/

/**
 *  Pesquisa um Registro pelo ID em uma Tabela
 */
                          /*************************
                           *  Select tbl_users  *
                           ************************/
/**
 *  Pesquisa Usuário por ID
 */
	function find_id($name_user) {
		$database = open_database();
		$table = 'tbl_users';
		
		$id_user = mysqli_query($database,"SELECT * FROM " . $table . " WHERE name_user = " . "'$name_user'");
		$result = mysqli_fetch_array($id_user);
		
		return $result[0];
	}
	
	/**
	 *  Pesquisa Tipo de Conta por ID 
	 */
	function find_acc($name_user) {
		$database = open_database();
		$table = 'tbl_users';
		
		$acc_user = mysqli_query($database,"SELECT type_user FROM " . $table . " WHERE name_user = " . "'$name_user'");
		$result = mysqli_fetch_array($acc_user);
		
		return $result[0];
	}
	
	
	function find( $table = null, $id = null ) {
	  
		$database = open_database();
	  $found = null;
	  $field = null;
		 
		try {
		  if ($id) {
		  if (isset($_GET['id_cli'])) {
			$field = 'id_cli';
		  } elseif (isset($_GET['id_exp'])) {
			  $field = 'id_exp';
		  }
	
	
		  $sql = "SELECT * FROM " . $table . " WHERE ". $field ." = ".$id;
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
			  $found = $result->fetch_assoc();
			}
			
		  } else {
			
			$sql = "SELECT * FROM " . $table;
			$result = $database->query($sql);
			
			if ($result->num_rows > 0) {
			  $found = $result->fetch_all(MYSQLI_ASSOC);
			
		 
			}
		  }
		} catch (Exception $e) {
		  $_SESSION['message'] = $e->GetMessage();
		  $_SESSION['type'] = 'danger';
	  }
		
		close_database($database);
		return $found;
	}
	
	/**
	 *  Pesquisa Todos os Registros de uma Tabela
	 */
	function find_all($table) {
		return find($table);
	  }
	
							  /*************************
							   *  Select tbl_users  *
							   ************************/
	  
	  /**
	 *  Conta Todos os Registros da Tabela de Clientes
	 */
	function find_customers() {
	  $database = open_database();
	  $table = 'tbl_customers';
	
	  $customers_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table);
	  $result = mysqli_fetch_array($customers_all);
	  return $result[0];
	}
		
	
	/**
	 *  Pesquisa Cliente por Nome
	 */
	function find_name($name_cli) {
		$database = open_database();
		$table = 'tbl_customers';
		
		$name_cli = mysqli_query($database,"SELECT name_cli FROM " . $table . " WHERE name_cli = " . "'$name_cli'");
		$result = mysqli_fetch_array($name_cli);
		
		return $result[0];
	}
	
	/**
	 *  Pega o último ID da tabela customers
	 */
	function last() {
		$database = open_database();
		$table = 'tbl_customers';
		
		$all_client = mysqli_query($database,"SELECT MAX(id_cli) FROM " . $table);
		$result_last = mysqli_fetch_array($all_client);
		
	  return $result_last[0];
	}
	
	/*************************
	*  Select tbl_expenses  *
	************************/
	
	function find_expenses_overdue() {
	  $database = open_database();
	  $table = 'tbl_expenses';
	
	  $expenses_overdue =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table . " WHERE date_exp < NOW() and date_pay_exp = ''");
	  $result = mysqli_fetch_array($expenses_overdue);
	  return $result[0];
	}
	
	function find_expenses() {
	  $database = open_database();
	  $table = 'tbl_expenses';
	
	
	  $expenses_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table . " WHERE date_pay_exp = '' AND date_exp > NOW()");
	  $result_all = mysqli_fetch_array($expenses_all);
	  return $result_all[0];
	}
	
	
	/******************************************************************************************************************************
	 *  																								QUERY'S INSERT DATABASE                                                   *
	 *****************************************************************************************************************************/
	
	 /**
	*  Insere um registro no BD
	*/
	function save($table = null, $data = null) {
	
	  $database = open_database();
	
	  $columns = null;
	  $values = null;
	
	  foreach ($data as $key => $value) {
		$columns .= trim($key, "'") . ",";
		$values .= "'$value',";
	  }
	
	  // remove a ultima virgula
	  $columns = rtrim($columns, ',');
	  $values = rtrim($values, ',');
	  
	  $sql = "INSERT INTO " . $table . "($columns)" . "VALUES" . "($values);";
	  
	  try {
		$database->query($sql);
	
		$_SESSION['message'] = 'Registro cadastrado com sucesso.';
		$_SESSION['type'] = 'success';
	  
	  } catch (Exception $e) { 
	  
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	  } 
	
	  close_database($database);
	}
	
	/******************************************************************************************************************************
	 *  																								QUERY'S UPDATE DATABASE                                                   *
	 *****************************************************************************************************************************/
	
	 /**
	 *	Atualizacao/Edicao de Cliente
	 */
	function edit_cli() {
	
	  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
	  if (isset($_GET['id_cli'])) {
		
		$id = $_GET['id_cli'];
		
		if (isset($_POST['customer'])) {
	
		  $customer = $_POST['customer'];
		  $customer['modified_cli'] = $now->format("Y-m-d H:i:s");
	
		  update('tbl_customers', $id, $customer);
		  header('location: report_cli.php');
		} else {
	
		  global $customer;
		  $customer = find('tbl_customers', $id);
		} 
	  } else {
		header('location: report_cli.php');
	  }
	}
	
	/**
	 *	Atualizacao/Edicao de Despesa
	 */
	function edit_exp() {
	
	  $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	
	  if (isset($_GET['id_exp'])) {
		
		$id = $_GET['id_exp'];
		
		if (isset($_POST['expense'])) {
		  
		  $expense = $_POST['expense'];
		  $expense['modified_exp'] = $now->format("Y-m-d H:i:s");
	
		  update_exp('tbl_expenses', $id, $expense);
		  header('location: report_fin.php');
		} else {
	
		  global $expense;
		  $expense = find('tbl_expenses', $id);
		} 
	  } else {
		header('location: report_fin.php');
	  }
	}
	
	/**
	 *  Atualiza um registro em uma tabela, por ID
	 */
	function update($table = null, $id = 0, $data = null) {
	
	  $database = open_database();
	
	  $items = null;
	
	  foreach ($data as $key => $value) {
		$items .= trim($key, "'") . "='$value',";
	  }
	
	  // remove a ultima virgula
	  $items = rtrim($items, ',');
	
	  $sql  = "UPDATE " . $table;
	  $sql .= " SET $items";
	  $sql .= " WHERE id_cli=" . $id . ";";
	
	  try {
		$database->query($sql);
	
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	
	  } catch (Exception $e) { 
	
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	  } 
	
	  close_database($database);
	}
	
	/**
	 *  Atualiza um registro em uma tabela, por ID - tbl_expenses
	 */
	function update_exp($table = null, $id = 0, $data = null) {
	
	  $database = open_database();
	
	  $items = null;
	
	  foreach ($data as $key => $value) {
		$items .= trim($key, "'") . "='$value',";
	  }
	
	  // remove a ultima virgula
	  $items = rtrim($items, ',');
	
	  $sql  = "UPDATE " . $table;
	  $sql .= " SET $items";
	  $sql .= " WHERE id_exp=" . $id . ";";
	
	  try {
		$database->query($sql);
	
		$_SESSION['message'] = 'Registro atualizado com sucesso.';
		$_SESSION['type'] = 'success';
	
	  } catch (Exception $e) { 
	
		$_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
		$_SESSION['type'] = 'danger';
	  } 
	
	  close_database($database);
	}
	
	/******************************************************************************************************************************
	 *  																								QUERY'S DELETE DATA                                                       *
	 *****************************************************************************************************************************/
	/**
	 *  Remove uma linha de uma tabela pelo ID do registro
	 */
	function remove( $table = null, $id = null ) {
	
	  $database = open_database();
		
	  try {
		if ($id) {
	
		  $sql = "DELETE FROM " . $table . " WHERE id_cli = " . $id;
		  $result = $database->query($sql);
	
		  if ($result = $database->query($sql)) {   	
			$_SESSION['message'] = "Registro Removido com Sucesso.";
			$_SESSION['type'] = 'success';
		  }
		}
	  } catch (Exception $e) { 
	
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	  }
	
	  close_database($database);
	}
	
	function remove_exp( $table = null, $id = null ) {
	
	  $database = open_database();
		
	  try {
		if ($id) {
	
		  $sql = "DELETE FROM " . $table . " WHERE id_exp = " . $id;
		  $result = $database->query($sql);
	
		  if ($result = $database->query($sql)) {   	
			$_SESSION['message'] = "Registro Removido com Sucesso.";
			$_SESSION['type'] = 'success';
		  }
		}
	  } catch (Exception $e) { 
	
		$_SESSION['message'] = $e->GetMessage();
		$_SESSION['type'] = 'danger';
	  }
	
	  close_database($database);
	}