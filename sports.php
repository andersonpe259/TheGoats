<?php 
require ("pattern/Preinformations.php");
require ("pattern/GeneratorHtml.php");

$informacoes = new Preinformations();
$gerador = new GeneratorHtml();

$url = $_GET['page'];
$pre_html = $informacoes->html;
$modalidade = $informacoes->informacoes[$url];
$html = $gerador->gerarHtml($pre_html, $modalidade);

include ("pattern/header.html");
echo "
<main id='main'>
<!-- ======= Secao Atletas ======= -->
<section id='about' class='about'>
  <div class='container' data-aos='fade-up'>
  <div class='section-header'>
        <h2>".$url."</h2>
    </div>";
echo $html;
echo "
</div>
</section><!-- End secao Atletas Section -->
</main><!-- End #main -->";

include ("pattern/footer.html");