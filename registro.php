<?php



$marcadores = [];
$marcador = [];

if (!empty($_POST)) {
    $marcador["name"] = $_POST["name"];
    $marcador["address"] = $_POST["address"];
    $marcador["tel"] = $_POST["tel"];
    $marcador["coordenadas"] = $_POST["coordenadas"];
    $marcador["categoria"] = $_POST["categoria"];
}


function guardarUsuario($marcador) {
    $marcadores = json_decode(file_get_contents('marcadores.json'),true);
    if (is_null($marcadores)) {
    	$marcadores = ['marcadores' => []];
		}

		$marcadores['marcadores'][] = $marcador;
    file_put_contents('marcadores.json', json_encode($marcadores,JSON_PRETTY_PRINT));

}

guardarUsuario($marcador);
header("Location:index.php");




