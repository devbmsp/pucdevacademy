<?php
include("../conexaobd/conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = md5($_POST["password"]);
    $sql = "SELECT * FROM Colaborador_puc WHERE Email = '$email' AND Senha = '$senha'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION["emailcolaborador"] = $email;
        header("Location: ../editar_perfil/editar_perfil.php");
        exit();
    } else {
        echo "Usuário ou senha incorretos!";
        header("refresh:2; url=login.php");
    }
}

$conn->close();
?>
