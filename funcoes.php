<?php
function cabecalho($titulo){
    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
        <title>Tijolos</title>
    </head>
    <body>
    <div class=\"container\">
    <div class=\"jumbotron\">";
    
}

function rodape(){
    echo "
    </div>
    </div>
    </body>
    </html>";
}

function verificaCampo($campo, $valor){
    if(!is_numeric($valor) || $valor <=0) {
        echo "<h2>O campo $campo deve ser númerico!</h2>";
        echo "<a href=\"javascript:window.history.back();\">
        <input type=\"button\" value=\"Voltar\" class=\"btn btn-danger\"></a>";
        exit;
    }
}
