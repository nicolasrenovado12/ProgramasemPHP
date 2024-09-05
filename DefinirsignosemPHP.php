<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            
        }
    </style>
</head>
<body>
    <h2>DESCUBRA O SEU SIGNO</h2>
    <form method="post" action="">
        <h4>Digite o seu mês: </h4>
        <input type="number" name="mês" min="0" max="12">
        <h4>Digite o seu dia: </h4>
        <input type="number" name="dia" min="1" max="30">
        <input type="submit" name="botao" value="Enviar">
    </form>

    <?php

        /* FIZ ESTE PROGRAMA PARA DEMONSTRAR A COMPLEXIDADE DE ESTRUTRAS IFS, PORÉM NÃO TENHO LIGAMENTO
        COM ESTE TIPO DE PRÁTICA. ESTE PROGRAMA É MUITO IMPORTANTE TAMBÉM PARA O DESENVOLVIMENTO WEB
        AFINAL MUITOS SITES USAM ESTE TIPO DE PROGRAMA PARA DEFINIR O SIGNO DA PESSOA. PODERIA TER FEITO
        MAIS FÁCIL EM JAVASCRIPT PORÉM ENTRETANTO, AINDA ESTOU TREINANDO NA LINGUAGEM PHP.

        */
    



    if (isset($_POST['botao'])) {
        $mês = $_POST["mês"]; // define as variaveis
        $dia = $_POST["dia"];
       
    
        if (($dia >= 22) && ($mês == 12) || ($dia <= 20) && ($mês == 1)) {

            echo "Capricórnio";

        } elseif (($dia >= 21 ) && ($mês == 1) || ($dia <= 19) && ($mês == 2)) {
            echo "Aquário";

        } elseif (($dia >= 19 ) && ($mês == 2) || ($dia <= 20) && ($mês == 3)) {

            echo "Peixes";

        } elseif (($dia >= 21 ) && ($mês == 3) || ($dia <= 20) && ($mês == 4)) {

            echo "Áries";

        } elseif (($dia >= 21) && ($mês == 4) || ($dia <= 20) && ($mês == 5)) {

            echo "Touro";

        } elseif (($dia >= 21) && ($mês == 5) || ($dia <= 20) && ($mês == 6)) {

            echo "Gêmeos";

        } elseif (($dia >= 21 ) && ($mês == 6) || ($dia <= 22 ) && ($mês == 7)) {

            echo "Câncer";

        } elseif (($dia >= 23 ) && ($mês == 7) || ($dia <= 22 ) && ($mês == 8)) {

            echo "Leão";

        } elseif (($dia >= 23 ) && ($mês == 8) || ($dia <= 22 ) && ($mês == 9)) {

            echo "Virgem";

        } elseif (($dia >= 23 ) && ($mês == 9) || ($dia <= 22 ) && ($mês == 10)) {

            echo "Libra";

        } elseif (($dia >= 23 ) && ($mês == 10) || ($dia <= 21 ) && ($mês == 11)) {

            echo "Escorpião";

        } elseif (($dia >= 22 ) && ($mês == 11) || ($dia <= 21) && ($mês == 12)) {

            echo "Sagitário";

        } else {
            echo "Número inválido";
        } 

           echo "<br>";

            echo  "<br>" . "Created date is " . date("Y-m-d") . "<br>"; // Correctly date
            echo "The time is " . date("H:i:sa") . "<br>"; // Correctly time
    }
    ?>
</body>
</html>
