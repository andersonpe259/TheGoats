<?php
require_once ("config/Conection.php");
$controller = new Conection();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtenha os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $controller->login($usuario, $senha);
   
}
include ("pattern/header.html");
?>
<section id="hero" class="hero">
 <div class="container position-relative avaliacao">
      <div class="row gy-5 d-flex justify-content-center">
            <form action="admin.php" method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário"/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha"/>
            </div>

            

            <!-- Submit button -->
            <input type="submit" class="btn btn-warning btn-sm" value="Enviar Respostas">

            <!-- Register buttons -->
            </form>
      </div>
    </div>
</section>
<?php
include ("pattern/footer.html");
?>