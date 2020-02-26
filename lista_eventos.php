<?php
include "conexao.php";

$registos=$conn->prepare("select * from jmc_evento");
$registos->execute();

$lista_eventos = $registos->get_result();

$eventos_json = [];

while($evento = $lista_eventos->fetch_assoc())
{
  $eventos_json [] = [
    'id'=>$evento['id'],
    'title'=>$evento['titulo'],
    'color'=>$evento['cor'],
    'start'=>$evento['inicio'],
    'end'=>$evento['fim']
  ];
}

echo json_encode($eventos_json);
?>
