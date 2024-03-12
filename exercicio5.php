<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Notas do 8° ano A</title>
</head>
<body>
    <div class="w3-container w3-blue w3-center">
        <h1>8° ANO A</h1>
    </div>
    <br>

    <?php
    $notas =  array (
    array("nome"=> "Aline", "s1"=> "10", "s2" => "9.5"),
    array("nome"=> "Alfredo", "s1"=> "8", "s2" => "5"),
    array("nome"=> "Carla", "s1"=> "5", "s2" => "6.5"),
    array("nome"=> "Cesar", "s1"=> "9", "s2" => "9"),
    array("nome"=> "Daniel", "s1"=> "10", "s2" => "7"),
    array("nome"=> "Esnar", "s1"=> "8", "s2" => "6"),
    array("nome"=> "Henzo", "s1"=> "6", "s2" => "8"),
    array("nome"=> "Pablo", "s1"=> "7", "s2" => "5"),
    array("nome"=> "Wallace", "s1"=> "8", "s2" => "7"),
    array("nome"=> "Zulmira", "s1"=> "10", "s2" => "6")) ;

    echo '<table class="w3-table w3-hoverable w3-centered	w3-striped	">';
    echo '<tr class="w3-blue w3-center">';
    echo "<th>Nome</th>";
    echo "<th>Primeiro semestre</th>";
    echo "<th>Segundo semestre</th>";
    echo "</tr>";
    foreach ($notas as $nota) {
        echo "<tr>";
        echo "<td>".$nota['nome']."</td>";
        echo "<td>".$nota['s1']."</td>";
        echo "<td>".$nota['s2']."</td>";
        echo "</tr>";
    }

    echo "</table>";   
    
    ?>
    
</body>
</html>