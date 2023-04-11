<?php
require_once "funcoes.php";
cabecalho("Area de Parede");
?>
    <form action="tijolos.php" method="post">
        <h1>CALCULO DE TIJOLOS</h1>
        <p>Comprimento do tijolo:
        <input type="text" name="ctijolo" class="form-control"></p>
        <p>Altura do tijolo:
        <input type="text" name="atijolo" class="form-control"></p>
        <p>Comprimento da parede:
        <input type="text" name="cparede" class="form-control"></p>
        <p>Altura da parede:
        <input type="text" name="aparede" class="form-control"></p>
        <p><input type="submit" value="Calcular" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-success"></p>
    </form>
<?php
rodape();
?>