<?php
// salvarDados.php

// Conectar ao banco de dados
$mysqli = new mysqli("52.67.79.110:3306", "maicon", "focoforcaefe", "laratemp");
/*DB_CONNECTION=mysql
DB_HOST=52.67.79.110
DB_PORT=3306
DB_DATABASE=laratemp
DB_USERNAME=maicon
DB_PASSWORD=focoforcaefe*/

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

// Receber os dados da requisição AJAX
$data = json_decode($_POST['dados'], true);

// Iterar sobre os dados e inserir no banco de dados
foreach ($data as $row) {
    $dia = $row['dia'];
    $feriado = $row['feriado'];
    $id_assistencia = $row['id_assistencia'];
    $id_tecnico = $row['id_tecnico'];
    $h_inicial_manha = $row['h_inicial_manha'];
    $h_final_manha = $row['h_final_manha'];
    $h_total_manha = $row['h_total_manha'];
    $h_inicial_tarde = $row['h_inicial_tarde'];
    $h_final_tarde = $row['h_final_tarde'];
    $h_total_tarde = $row['h_total_tarde'];
    $h_inicial_noite = $row['h_inicial_noite'];
    $h_final_noite = $row['h_final_noite'];
    $h_total_noite = $row['h_total_noite'];
    $h_totais = $row['h_totais'];
    $h_totais_normais = $row['h_totais_normais'];
    $h_totais_50 = $row['h_totais_50'];
    $h_totais_100 = $row['h_totais_100'];
    $anotacao = $row['anotacao'];
    $id_tecnico = $row['idTecnico'];

    // Construir a query de inserção
    $query = "INSERT INTO horas_assistencias (
        dia, feriado, id_assistencia, id_tecnico,
        h_inicial_manha, h_final_manha, h_total_manha,
        h_inicial_tarde, h_final_tarde, h_total_tarde,
        h_inicial_noite, h_final_noite, h_total_noite,
        h_totais, h_totais_normais, h_totais_50, h_totais_100,
        anotacao
    ) VALUES (
        '$dia', '$feriado', '$id_assistencia', '$id_tecnico',
        '$h_inicial_manha', '$h_final_manha', '$h_total_manha',
        '$h_inicial_tarde', '$h_final_tarde', '$h_total_tarde',
        '$h_inicial_noite', '$h_final_noite', '$h_total_noite',
        '$h_totais', '$h_totais_normais', '$h_totais_50', '$h_totais_100',
        '$anotacao'
    )";

    // Executar a query
    $result = $mysqli->query($query);

    // Verificar se a inserção foi bem-sucedida
    if (!$result) {
        echo "Erro ao inserir no banco de dados: " . $mysqli->error;
        die();
    }
}

// Fechar a conexão
$mysqli->close();

// Responder à requisição AJAX
echo "Dados inseridos com sucesso!";
?>
