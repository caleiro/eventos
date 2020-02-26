<?php
include "conexao.php";

$registos=$conn->prepare("select * from jmc_evento");
$registos->execute();

$lista_eventos = $registos->get_result();

$eventos_json = [];

while($evento = $lista_eventos->fetch_assoc())
{
  $eventos_jason [] = [
    'id'=>$evento['id'],
    'titulo'=>$evento['titulo'],
    'cor'=>$evento['cor'],
    'inicio'=>$evento['inicio'],
    'fim'=>$evento['fim']
  ];
}

echo json_encode($eventos_json);
?>
