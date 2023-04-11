<?php
require_once "funcoes.php";
cabecalho("Area Parede");
$ctijolo = $_POST["ctijolo"];
$atijolo = $_POST["atijolo"];

$cparede = $_POST["cparede"];
$aparede = $_POST["aparede"];

verificaCampo("altura do tijolo", $atijolo);
verificaCampo("comprimento do tijolo", $ctijolo);
verificaCampo("altura da parede", $aparede);
verificaCampo("comprimento da parede", $cparede);


$ttijolo = $ctijolo * $atijolo;
$tparede = $cparede * $aparede;

$qtdtijolo = $tparede / $ttijolo;

echo "<h1>Quantidade necessaria de tijolos:</h1>";
echo "<h2>$qtdtijolo</h2>";

for($i=0;$i<=$qtdtijolo;$i++){
    echo "<img src='tijolo.png' width=50 height=50>";
}

rodape();
?>