<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digite um número</title>
</head>
<body>
    <h2>Digite um número para colocar como id na coluna de ids</h2>
    
    <form action="" method="post">
    <input type="" id="insert" name="insert" required><br><br>
    <input type="submit" value="Enviar">
    </form>
    <form action="" method="get">
    <p>Será mostrado em ordem crescente.</p>
    <input type="submit" value="Mostrar"> 
    </form>
</body>
</html>

<?php
include("connbanco.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
$stmt = $conn->prepare("SELECT * FROM tabela ");
$stmt->execute();
$result = $stmt->get_result();
$a = 1;
while($row = $result->fetch_assoc()) {
    echo $a . " id: " . $row["id"] . "<br>";
    $a++;
}

}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $insert = $_POST["insert"];
    $data = date('m');
    echo $data;
    $stmt = $conn->prepare("INSERT INTO tabela(id) VALUES ($insert)");
    $stmt->execute();
    
}
$stmt->close();
$conn->close();
?>
