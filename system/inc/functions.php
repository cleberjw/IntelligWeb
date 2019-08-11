<?php
require_once('config.php');
require_once(DBAPI);

header('Content-Type: text/html; charset=utf-8');

$customers = null;
$customer = null;

$users = null;
$user = null;

$expenses = null;
$expense = null;

$categories = null;
$category = null;

$products = null;
$product = null;

$manufactures = null;
$manufacturer = null;

$providers = null;
$provider = null;

$holidays = null;
$holiday = null;

$orders = null;
$order = null;

$budgets = null;
$budget = null;

/**
 *  Variáveis Globais
 */
function index() {
    global $customers;
    global $users;
    global $expenses;
    global $categories;
    global $products;
    global $manufactures;
    global $providers;
    global $holidays;
    global $orders;
    global $budgets;

    
    $budgets = find_all('tbl_budgets');
    $categories = find_all('tbl_categories');
    $customers = find_all('tbl_customers');
    $expenses = find_all('tbl_expenses');
    $holidays = find_all('tbl_holidays');
    $manufactures = find_all('tbl_manufacturer');
    $orders = find_all('tbl_orders');
    $products = find_all('tbl_products');
    $providers = find_all('tbl_providers');
    $users = find_all('tbl_users');
    
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
        $_UP['pasta'] = 'img/vouchers/';

        $expense = $_POST['expense'];

        $nome_final = (last_exp()+1).'.jpg';

        $expense['nameimg_exp'] = $nome_final;
        $expense['modified_exp'] = $expense['created_exp'] = $today->format("Y-m-d H:i:s");

        move_uploaded_file($_FILES['file']['tmp_name'], $_UP['pasta']. $nome_final);

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

        $category = $_POST['category'];
        $category['modified_cat'] = $category['created_cat'] = $today->format("Y-m-d H:i:s");


        save('tbl_categories', $category);
    }
}

/**
 *  Cadastro de Fabricante
 */
function add_mnf() {

    if (isset($_POST['manufacturer'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $manufacturer = $_POST['manufacturer'];
        $manufacturer['update_mnf'] = $manufacturer['create_mnf'] = $today->format("Y-m-d H:i:s");


        save('tbl_manufacturer', $manufacturer);
        header('location: report_prd.php');
    }
}

/**
 *  Cadastro de Fornecedor
 */
function add_pvd() {

    if (isset($_POST['provider'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $provider = $_POST['provider'];
        $provider['modified_pvd'] = $provider['create_pvd'] = $today->format("Y-m-d H:i:s");

        save('tbl_providers', $provider);
        header('location: report_for.php');
    }
}

/**
 *  Cadastro de Produtos
 */
function add_prd() {

    if (isset($_POST['product'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $_UP['pasta'] = 'img/products/';

        $provider = $_POST['product'];
        $nome_final = (last_prd()+1).'.jpg';

        $provider['nameimg_prd'] = $nome_final;
        $provider['update_prd'] = $provider['create_prd'] = $today->format("Y-m-d H:i:s");

        move_uploaded_file($_FILES['file']['tmp_name'], $_UP['pasta']. $nome_final);

        save('tbl_products', $provider);
        header('location: report_prd.php');

    }
}

function add_ord() {

    if (isset($_POST['order'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $order = $_POST['order'];
        $order['modified_ord'] = $order['created_ord'] = $today->format("Y-m-d H:i:s");

        save('tbl_orders', $order);
        header('location: report_orc.php');
    }
}

function add_bud() {

    if (isset($_POST['budget'])) {
        $today = date_create('now', new DateTimeZone('America/Sao_Paulo'));

        $order = $_POST['budget'];
        $order['modified_bud'] = $order['created_bud'] = $today->format("Y-m-d H:i:s");

        save('tbl_budgets', $order);
        header('location: report_orc.php');
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
 *  												QUERY'S SELECT DATABASE                                                   *
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
            } elseif (isset($_GET['id_pvd'])) {
                $field = 'id_pvd';
            } elseif (isset($_GET['id_prd'])) {
                $field = 'id_prd';
            } elseif (isset($_GET['id_exp'])) {
                $field = 'id_exp';
            }  elseif (isset($_GET['id_ord'])) {
                $field = 'id_ord';
            } elseif (isset($_GET['id_bud'])) {
                $field = 'id_bud';
            }

            $sql = "SELECT * FROM " . $table . " WHERE ". $field ." = ".$id;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }

        } else {

            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            $registros = array();
            while($row = $result->fetch_assoc()){
            $registros[] = $row;
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
 *  SELECT TBL_USERS      *
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

/**
 *  Pega o último ID da tabela category
 */
function last_cat() {
    $database = open_database();
    $table = 'tbl_categories';

    $all_cat = mysqli_query($database,"SELECT MAX(id_cat) FROM " . $table);
    $result_last = mysqli_fetch_array($all_cat);

    return $result_last[0];
}

/**
 *  Pega o último ID da tabela expenses
 */
function last_exp() {
    $database = open_database();
    $table = 'tbl_expenses';

    $all_cat = mysqli_query($database,"SELECT MAX(id_exp) FROM " . $table);
    $result_last = mysqli_fetch_array($all_cat);

    return $result_last[0];
}


/*************************
 *  Select tbl_expenses  *
 ************************/

function find_expenses_overdue() {
    $database = open_database();
    $table = 'tbl_expenses';
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d-m-Y');

    $expenses_overdue =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table . " WHERE date_exp < '$date' and date_pay_exp = ''");
    $result = mysqli_fetch_array($expenses_overdue);
    return $result[0];
}

function find_expenses() {
    $database = open_database();
    $table = 'tbl_expenses';
    date_default_timezone_set('America/Sao_Paulo');
    $date = date('d-m-Y');

    $expenses_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table . " WHERE date_pay_exp = '' AND date_exp > '$date'");
    $result_all = mysqli_fetch_array($expenses_all);
    return $result_all[0];
}

/*************************
 *  SELECT TBL_PRODUCTS    *
 ************************/

/**
 *  Conta Todos os Registros da Tabela de Clientes
 */
function find_products() {
    $database = open_database();
    $table = 'tbl_products';

    $products_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table);
    $result = mysqli_fetch_array($products_all);
    return $result[0];
}

function find_products_active() {
    $database = open_database();
    $table = 'tbl_products';

    $customers_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table. " WHERE status_prd = 'Ativo'");
    $result = mysqli_fetch_array($customers_all);
    return $result[0];
}

function find_products_inactive() {
    $database = open_database();
    $table = 'tbl_products';

    $customers_all =  mysqli_query($database,"SELECT COUNT(*) FROM " . $table. " WHERE status_prd = 'Inativo' or status_prd = ''");
    $result = mysqli_fetch_array($customers_all);
    return $result[0];
}

function last_prd() {
    $database = open_database();
    $table = 'tbl_products';

    $all_client = mysqli_query($database,"SELECT MAX(id_prd) FROM " . $table);
    $result_last = mysqli_fetch_array($all_client);

    return $result_last[0];
}

function find_prd($descprod) {
    $database = open_database();

    $prod = mysqli_query($database,"SELECT * FROM tbl_products WHERE desc_prd = '$descprod'");
    $result_prd = mysqli_fetch_array($prod);

    return $result_prd;
}

/******************************************************************************************************************************
 *  												QUERY'S INSERT DATABASE                                                   *
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
 *  												QUERY'S UPDATE DATABASE                                                   *
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
 *	Atualizacao/Edicao de Produtos
 */
function edit_prd() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));



    if (isset($_GET['id_prd'])) {

        $id = $_GET['id_prd'];



        if (isset($_POST['product'])) {

            $product = $_POST['product'];
            $_UP['pasta'] = 'img/products/';

            $nome_final = $id.'.jpg';
            $product['nameimg_prd'] = $nome_final;

            $product['update_prd'] = $now->format("Y-m-d H:i:s");
            move_uploaded_file($_FILES['file']['tmp_name'], $_UP['pasta'].$nome_final);

            update_prd('tbl_products', $id, $product);
            header('location: report_prd.php');

        } else {
            global $product;
            $product = find('tbl_products', $id);
        }
    } else {
        header('location: report_prd.php');
    }
}

/**
 *	Atualizacao/Edicao de Fornecedores
 */
function edit_pvd() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    if (isset($_GET['id_pvd'])) {

        $id = $_GET['id_pvd'];

        if (isset($_POST['provider'])) {

            $provider = $_POST['provider'];
            $provider['modified_pvd'] = $now->format("Y-m-d H:i:s");

            update_pvd('tbl_providers', $id, $provider);
            header('location: report_for.php');
        } else {

            global $provider;
            $provider = find('tbl_providers', $id);
        }
    } else {
        header('location: report_for.php');
    }
}

/**
 *	Atualizacao/Edicao de Orçamentos
 */
function edit_orc() {

    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));

    if (isset($_GET['id_bud'])) {

        $id = $_GET['id_bud'];

        if (isset($_POST['budget'])) {

            $provider = $_POST['budget'];
            $provider['modified_bud'] = $now->format("Y-m-d H:i:s");

            update_pvd('tbl_budgets', $id, $provider);
            header('location: report_orc.php');
        } else {

            global $provider;
            $provider = find('tbl_budgets', $id);
        }
    } else {
        header('location: report_orc.php');
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

/**
 *  Atualiza um registro em uma tabela, por ID - tbl_products
 */
function update_prd($table = null, $id = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id_prd=" . $id . ";";

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
 *  Atualiza um registro em uma tabela, por ID - tbl_providers
 */
function update_pvd($table = null, $id = 0, $data = null) {

    $database = open_database();

    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');

    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id_pvd=" . $id . ";";

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
 *  												QUERY'S DELETE DATA                                                       *
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
