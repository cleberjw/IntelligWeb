<?php require_once 'config.php'; ?>
<?php
session_start();
//session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Business Inteliggence</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="all,follow">
        <!-- Bootstrap CSS-->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
        <!-- Fontastic Custom icon font-->
        <link rel="stylesheet" href="css/fontastic.css">
        <!-- Google fonts - Poppins -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
        <!-- theme stylesheet-->
        <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
        <!-- Custom stylesheet - for your changes-->
        <link rel="stylesheet" href="css/custom.css">
        <!-- Favicon-->
        <link rel="shortcut icon" href="img/favicon.ico">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

        <!-- Verify access database with user and password -->
        <script type="text/javascript">
            function loginsuccessfully() {
                setTimeout("window.location='index.php'", 1000);
                
            }
            function loginfailed() {
                setTimeout("window.location='login.php'", 50000);
//                alert("Name or password invalid!");
            }
        </script>


    </head>
    <body>
        <div class="page login-page">
            <div class="container d-flex align-items-center">
                <div class="form-holder has-shadow">
                    <div class="row">
                        <!-- Logo & Information Panel-->
                        <div class="col-lg-6">
                            <div class="info d-flex align-items-center">
                                <div class="content">
                                    <div class="logo">
                                        <a href="http://www.intellig.com.br"><img src="img/logo.png" alt="" width="75%"/></a>
                                    </div>
                                    <p style="text-align: center; font-size: 1.1em; letter-spacing: .1em">A inteligência interligando tudo.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Form Panel    -->
                        <div class="col-lg-6 bg-white">
                            <div class="form d-flex align-items-center">
                                <div class="content">
                                    <form method="post" class="form-validate">
                                        <div class="form-group">
                                            <input id="login-username" type="text" name="loginUsername" placeholder="Usuário" required data-msg="Por favor entre com seu usuário" class="input-material">
                                        </div>
                                        <div class="form-group">
                                            <input id="login-password" type="password" name="loginPassword" placeholder="Senha" required data-msg="Por favor entre com sua senha" class="input-material">
                                        </div><input class="btn btn-primary" type="submit" value="Login"><br/><br/>
                                        <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                                        <!-- </form><a href="#" class="forgot-pass">Esqueceu a senha?</a><br><small>Não tem uma conta? </small><a href="register.php" class="signup">Inscrever-se</a> -->

                                    <!-- Conection MySQL -->
                                    <?php
                                    $user = isset($_POST['loginUsername']) ? $_POST['loginUsername'] : 0;
                                    $pass = isset($_POST['loginPassword']) ? $_POST['loginPassword'] : 0;

//                                     $servername = "localhost";
//                                     $username = "intell20_admin";
//                                     $password = "B5d53e9aeF";
//                                     $dbname = "intell20_db_intellig";

                                   $servername = "localhost";
                                   $username = "root";
                                   $password = "";
                                   $dbname = "id7497666_db_crud";



                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $result = mysqli_query($conn, "SELECT * FROM tbl_users WHERE name_user = '$user' AND pass_user = '$pass'");
                                    $row = $result->num_rows;
                                    ;
//                                    echo $row; Check if its right username and password
                                    if ($row > 0) {
                                        @session_start();
                                        $_SESSION['loginUsername'] = $_POST['loginUsername'];
                                        $_SESSION['loginPassword'] = $_POST['loginPassword'];
                                        echo "<script>loginsuccessfully()</script>";
                                    } else {
                                        echo "<script>loginfailed()</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- JavaScript files-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/popper.js/umd/popper.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"></script>
        <script src="vendor/chart.js/Chart.min.js"></script>
        <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
        <!-- Main File-->
        <script src="js/front.js"></script>
    </body>
</html>