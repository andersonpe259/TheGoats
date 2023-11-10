<?php
require_once ("config/Conection.php");
$controller = new Conection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenha os dados do formulário
    $respostas = [
        "p1" => $_POST["pergunta1"],
        "p2" => $_POST["pergunta2"],
        "p3" => $_POST["pergunta3"],
        "p4" => $_POST["pergunta4"],
        "p5" => $_POST["pergunta5"],
        "observacao" => $_POST["observacao"]
    ];

    $controller->save($respostas);
    header('Location: avaliacao.php');
    return;
   
}

include ("pattern/header.html");
?>
<h1>Formulário de Perguntas</h1>

<form action="form.php" method="post">
    <fieldset>
        <legend>Pergunta 1</legend>
        <label>
            <input type="radio" name="pergunta1" value="1"> Resposta 1
        </label>
        <label>
            <input type="radio" name="pergunta1" value="2"> Resposta 2
        </label>
        <label>
            <input type="radio" name="pergunta1" value="3"> Resposta 3
        </label>
    </fieldset>
    <fieldset>
        <legend>Pergunta 2</legend>
        <label>
            <input type="radio" name="pergunta2" value="1"> Resposta 1
        </label>
        <label>
            <input type="radio" name="pergunta2" value="2"> Resposta 2
        </label>
        <label>
            <input type="radio" name="pergunta2" value="3"> Resposta 3
        </label>
    </fieldset>
    <fieldset>
        <legend>Pergunta 3</legend>
        <label>
            <input type="radio" name="pergunta3" value="1"> Resposta 1
        </label>
        <label>
            <input type="radio" name="pergunta3" value="2"> Resposta 2
        </label>
        <label>
            <input type="radio" name="pergunta3" value="3"> Resposta 3
        </label>
    </fieldset>
    <fieldset>
        <legend>Pergunta 4</legend>
        <label>
            <input type="radio" name="pergunta4" value="1"> Resposta 1
        </label>
        <label>
            <input type="radio" name="pergunta4" value="2"> Resposta 2
        </label>
        <label>
            <input type="radio" name="pergunta4" value="3"> Resposta 3
        </label>
    </fieldset>
    <fieldset>
        <legend>Pergunta 5</legend>
        <label>
            <input type="radio" name="pergunta5" value="1"> Resposta 1
        </label>
        <label>
            <input type="radio" name="pergunta5" value="2"> Resposta 2
        </label>
        <label>
            <input type="radio" name="pergunta5" value="3"> Resposta 3
        </label>
    </fieldset>
    <fieldset>
        <legend>Observação</legend>
        <label>
            <input type="text" name="observacao">
        </label>
    </fieldset>


    <input type="submit" value="Enviar Respostas">
</form>
<?php
include ("pattern/footer.html");

?>