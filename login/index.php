<?php
include('conexao.php');

if (isset($_POST['e-mail']) && isset($_POST['senha'])) {
    if (empty($_POST['e-mail'])) {
        echo "Preencha seu e-mail";
    } elseif (empty($_POST['senha'])) {
        echo "Preencha corretamente sua senha!";
    } else {
        $email = $mysqli->real_escape_string($_POST['e-mail']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");
            exit;
        } else {
            echo "Falha ao efetuar o login! E-mail ou senha incorretos";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Login Dark/Light Mode</title>
</head>
<body>   
    <main id="container">
        <form id="login_form">
            <!-- FORM HEADER -->
            <div id="form_header">
                <h1>Login</h1>
                <i id="mode_icon" class="fa-solid fa-moon"></i>
            </div>

            <!-- INPUTS -->
            <div id="inputs">

                <!-- EMAIL -->
                <div class="input-box">
                    <label for="email">
                        E-mail
                        <div class="input-field">
                            <i class="fa-solid fa-envelope"></i>
                            <input type="email" id="email" name="email">
                        </div>
                    </label>
                </div>
                
                <!-- PASSWORD -->
                <div class="input-box">
                    <label for="password">
                        Password
                        <div class="input-field">
                            <i class="fa-solid fa-key"></i>
                            <input type="password" id="password" name="password">
                        </div>
                    </label>
                    
                    <!-- FORGOT PASSWORD -->
                    <div id="forgot_password">
                        <a href="#">
                            Forgot your password?
                        </a>
                    </div>
                </div>
            </div>

            <!-- LOGIN BUTTON -->
            <button type="submit" id="login_button">
                Login
            </button>
        </form>
    </main>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>