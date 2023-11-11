<?php
require_once ("config/Conection.php");



function result($indicep){
    $controller = new Conection();
    $valores = $controller->select();

    $r1 = $valores["p".$indicep]["q1"];
    $r2 = $valores["p".$indicep]["q2"];
    $r3 = $valores["p".$indicep]["q3"];
    $r4 = $valores["p".$indicep]["q4"];
    $r5 = $valores["p".$indicep]["q5"];
        

        
         echo "
        <li>Péssima(o): $r1%</li>
        <li>Ruim: $r2%</li>
        <li>Mediana(o): $r3%</li>
        <li>Boa(Bom): $r4%</li>
        <li>Ótima(o): $r5%</li>
        ";  
}
function result2(){
    $controller = new Conection();
    $valores = $controller->select();

    $r1 = $valores["p5"]["q1"];
    $r2 = $valores["p5"]["q2"];
    $r3 = $valores["p5"]["q3"];
    $r4 = $valores["p5"]["q4"];
    $r5 = $valores["p5"]["q5"];
    $r6 = $valores["p5"]["q6"];
    $r7 = $valores["p5"]["q7"];
    $r8 = $valores["p5"]["q8"];
    $r9 = $valores["p5"]["q9"];
    $r10 = $valores["p5"]["q10"];
        

        
         echo "
        <li>Futebol: $r1%</li>
        <li>Basquete: $r2%</li>
        <li>Vôlei: $r3%</li>
        <li>Natação: $r4%</li>
        <li>Atletismo: $r5%</li>
        <li>Futebol Americano: $r6%</li>
        <li>Ginástica: $r7%</li>
        <li>Fórmula 1: $r8%</li>
        <li>Tênis: $r9%</li>
        <li>Outro: $r10%</li>
        ";  
}

include ("pattern/header.html");
?>

<section id="hero" class="hero">
    <div class="container position-relative formulario">
        <div class="row gy-5 d-flex justify-content-center">
    
    <h2>Resultados do Formulário</h2>

    <h3>Pergunta 1: Em geral, como você avalia a usabilidade do site?</h3>
    <ul>
        <?php result(1); ?>
    </ul>

    <h3>Pergunta 2: Qual o nível de conforto ao navegar pelo site?</h3>
    <ul>
        <?php result(2); ?>
    </ul>

    <h3>Pergunta 3: De acordo com seus conhecimentos, como você classifica os assuntos tratados no site?</h3>
    <ul>
        <?php result(3); ?>
    </ul>

    <h3>Pergunta 4: De acordo com sua experiência, classifique o conteúdo que o site te proporcionou!</h3>
    <ul>
        <?php result(4); ?>
    </ul>

    <h3>Pergunta 5: Qual seu esporte preferido?</h3>
    <ul>
        <?php result2(); ?>
    </ul>

        </div>
    </div>
</section>

<?php
include ("pattern/footer.html");

?>