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
   
}

include ("pattern/header.html");
?>

<section id="hero" class="hero">
    <div class="container position-relative formulario">
        <div class="row gy-5 d-flex justify-content-center">
<h1>Formulário de Perguntas</h1>

<form action="form.php" method="post">
    <fieldset>
        <legend>Em geral, como você avalia a usabilidade do site ?</legend>
        <label>
            <input type="radio" name="pergunta1" value="1"> Péssima(o)
        </label>
        <label>
            <input type="radio" name="pergunta1" value="2"> Ruim
        </label>
        <label>
            <input type="radio" name="pergunta1" value="3"> Mediana(o)
        </label>
        <label>
            <input type="radio" name="pergunta1" value="4"> Boa(Bom)
        </label>
        <label>
            <input type="radio" name="pergunta1" value="5"> Ótima(o)
        </label>
    </fieldset>
    <fieldset>
        <legend>Qual o nível de conforto ao navegar pelo site ?</legend>
        <label>
            <input type="radio" name="pergunta2" value="1"> Péssima(o)
        </label>
        <label>
            <input type="radio" name="pergunta2" value="2"> Ruim
        </label>
        <label>
            <input type="radio" name="pergunta2" value="3"> Mediana(o)
        </label>
        <label>
            <input type="radio" name="pergunta2" value="4"> Boa(Bom)
        </label>
        <label>
            <input type="radio" name="pergunta2" value="5"> Ótima(o)
        </label>
    </fieldset>
    <fieldset>
        <legend>De acordo com seus conhecimentos, como você classifica os assuntos tratados no site ?</legend>
        <label>
            <input type="radio" name="pergunta3" value="1"> Péssima(o)
        </label>
        <label>
            <input type="radio" name="pergunta3" value="2"> Ruim
        </label>
        <label>
            <input type="radio" name="pergunta3" value="3"> Mediana(o)
        </label>
        <label>
            <input type="radio" name="pergunta3" value="4"> Boa(Bom)
        </label>
        <label>
            <input type="radio" name="pergunta3" value="5"> Ótima(o)
        </label>
    </fieldset>
    <fieldset>
        <legend>De acordo com sua experiência, classifique o conteúdo que o site te proporcionou !</legend>
        <label>
            <input type="radio" name="pergunta4" value="1"> Péssima(o)
        </label>
        <label>
            <input type="radio" name="pergunta4" value="2"> Ruim
        </label>
        <label>
            <input type="radio" name="pergunta4" value="3"> Mediana(o)
        </label>
        <label>
            <input type="radio" name="pergunta4" value="4"> Boa(Bom)
        </label>
        <label>
            <input type="radio" name="pergunta4" value="5"> Ótima(o)
        </label>
    </fieldset>
    <fieldset>
        <legend>Qual seu esporte preferido ?</legend>
        <label>
            <input type="radio" name="pergunta5" value="1"> Futebol
        </label>
        <label>
            <input type="radio" name="pergunta5" value="2"> Basquete
        </label>
        <label>
            <input type="radio" name="pergunta5" value="3"> vôlei
        </label>
        <label>
            <input type="radio" name="pergunta5" value="4"> Natação
        </label>
        <label>
            <input type="radio" name="pergunta5" value="5"> Atletismo
        </label>
        <label>
            <input type="radio" name="pergunta5" value="6"> Futebol Americano
        </label>
        <label>
            <input type="radio" name="pergunta5" value="7"> Ginástica
        </label>
        <label>
            <input type="radio" name="pergunta5" value="8"> Fórmula 1
        </label>
        <label>
            <input type="radio" name="pergunta5" value="9"> Tênis
        </label>
        <label>
            <input type="radio" name="pergunta5" value="10"> outro
        </label>
    </fieldset>
    <fieldset>
        <legend>Observação</legend>
        <label>
            <input type="text" name="observacao" id="observacao">
        </label>
    </fieldset>


    <input type="submit" value="Enviar Respostas" class="btn btn-warning">
</form>
        </div>
    </div>
</section>
<?php
include ("pattern/footer.html");

?>