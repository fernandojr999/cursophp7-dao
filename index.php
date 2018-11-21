<?php

require_once("config.php");

//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//$lista = Usuario::getList();

$lista = Usuario::search("fern");

echo json_encode($lista);

?>