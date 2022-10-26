<?php

if($_POST){

    $nome = $_POST['Nome'];
    htmlspecialchars($nome, ENT_QUOTES);
    $senha = $_POST['Senha'];
    htmlspecialchars($senha, ENT_QUOTES);
    $senha2 = $_POST['Senha2'];
    htmlspecialchars($senha2, ENT_QUOTES);
    $email = $_POST['E-mail'];
    htmlspecialchars($email, ENT_QUOTES);
    
    date_default_timezone_set('Brazil/East');

    $data = date("Y-m-d H:i:s");

    $senhacrip = hash('sha256', $senha2);
    
    $verificação = mysqli_query($connect, "SELECT * FROM users WHERE Nome='$nome'");
    $verificação = mysqli_num_rows($verificação);

    if ($verificação == true){

        echo "<script>window.alert('O nome de usuário já existe');</script>";
        return false;
    }

    $verificação2 = mysqli_query($connect, "SELECT * FROM users WHERE E-mail='$emal'");
    $verificação2 = mysqli_num_rows($verificação2);

    if ($verificação2 == true){

        echo "<script>window.alert('O E-mail de usuário já possui dono');</script>";
        return false;
    }

    if (empty($nome)){

        echo "<script>window.alert('O nome de usuário está vazio');</script>";
        return false;
    }

    if (empty($email)){

        echo "<script>window.alert('O nome de usuário está vazio!');<script>";
        return false;
    }

    if (empty($senha) and empty($senha2)){

        echo "<script>window.alert('As senhas de usuário não foram preenchidas!');</script>";
        return false;
    }

    if (strlen($senha) < 6 and strlen(senha2) < 6){

        echo "<script>window.alert('As senhas devem conter 6 caracteres ou mais');</script>";
        return false;
    }

    if ($senha != $senha2){

        echo "<script>window.alert('As senhas não coincidem!');</script>";
        return false;
    }

    $sql = mysqli_query($connect, "INSERT INTO `users` (`Nome`, `E-mail`, `Senha`, `Data`) VALUES('$nome', '$email', '$senhacrip', '$data')");
    
    if ($sql == true){

        echo "<center>Cadastro concluído!</center>";
        return false;
    }
}   

?>