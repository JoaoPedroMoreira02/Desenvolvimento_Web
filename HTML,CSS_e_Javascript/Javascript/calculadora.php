<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background: gray;
            color:black
        }
        h3{
            background-color: blue;
            width: 50%;
        }
    </style>
</head>
<center><body>
    <h1>Bem vindo à calculadora online</h1>
    <h3>Insira dois Números na janela do site junto com a operação matemática e então calcule!</h3>
    <b><p>Forma de usar: </p></b><br>
    <i><p>PRIMEIRO NÚMERO<br>
              SINAL<br>
           NÚMERO FINAL<br>
    </p></i><br>
    <div class="input">
        <form action="" method="post">
            <table>
                <tr>
                    <div>
                        <th>Digite o Primeiro número</th> 
                        <td><input type="number" class="Inserir" name="first_number" required></td><br>
                    </div>
                </tr>
                <tr>
                    <div>
                        <th>Qual é a operação matemática? </th> 
                        <td><input type="text" name="sinal" class="Inserir" required></td><br>
                    </div>
                </tr>
                <tr>
                    <div>
                        <th>Digite o último número</th>
                        <td><input type="number" name="second_number" class="Inserir" required></td><br>
                    </div>
                </tr>    
            </table>
            <center><button type="submit">calcular</button></center>
        </form>
    </div>
    <h4><b>RESULTADO</b></h4>
    <script src="função.js"></script>
</body></center>
</html>

<?php

if($_POST){

    function calculadora(){
        $num1 = $_POST['first_number'];
        $num2 = $_POST['second_number'];
        $sinal = $_POST['sinal'];

        if($sinal == "+" or $sinal == "soma"){
            $calculo = $num1 + $num2;
            
            echo "<p></p><br>";
            echo "<center><b>$calculo</b></center>";
        }elseif($sinal == "-" or $sinal == "subtração"){
            $calculo = $num1 - $num2;

            echo "<p></p><br>";
            echo "<center><b>$calculo</b></center>";
        }elseif($sinal == "*" or $sinal == "multiplicação"){
            $calculo = $num1 * $num2;

            echo "<p></p><br>";
            echo "<center><b>$calculo</b></center>";
        }elseif($sinal == "/" or $sinal == "divisão"){
            $calculo = $num1 / $num2;

            echo "<p></p><br>";
            echo "<center><b>$calculo</b></center>";
        }
    }

    calculadora();
}
?>
