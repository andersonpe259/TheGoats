<?php

include("pattern/header.html");
?>
<section id="hero" class="hero">
    <div class="container position-relative avaliacao">
        <div class="row gy-5 d-flex justify-content-center">
            <a href="form.php">
                <button type="button" class="btn btn-warning btn-lg btn-block">Nova Avaliação</button>
            </a>

            <a href="admin.php">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Resultados(Somente Admins)</button>
            </a>
            
            
        </div>
    </div>
</section>
<?php include("pattern/footer.html"); ?>