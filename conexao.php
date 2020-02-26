<?php
    $servidor = "localhost";
    $utilizador = "root";
    $senha = "";
    $nomebd = "jmc_eventos";

    $conn = new mysqli($servidor,$utilizador,$senha,$nomebd);

    if ($conn->connect_error) die("Falha na conexão à base de dados: " . $conn->connect_error);

    $conn->set_charset("utf8");
?>