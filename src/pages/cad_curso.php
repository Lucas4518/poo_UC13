<?php
require __DIR__ . "/../classes/curso.php";
 
 
 
 
//inciando as variaveis
$titulo = $aluno = $horas = $dias = "";
$cursocriado = false;
 
//Cadastrando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = trim($_POST["titulo"]);
    $aluno = trim($_POST["aluno"]);
    $horas = trim($_POST["horas"]);
    $dias = trim($_POST["dias"]);
    try {
        $curso = new Curso($titulo, $aluno, $horas, $dias);
        $cursocriado = true;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
    }
}
 
?>
 
 
<h2>Cadastro do curso</h2>
 
<form method="post" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="titulo" class="form-label">titulo:</label>
        <input type="text" name="titulo" id="titulo" class="form-control"
            value="<?= htmlspecialchars($titulo) ?>">
    </div>
 
    <div class="col-md-4">
        <label for="aluno" class="form-label">aluno:</label>
        <input type="text" name="aluno" id="aluno" class="form-control"
            value="<?= htmlspecialchars($aluno) ?>">
    </div>
 
    <div class="col-md-2">
        <label for="horas" class="form-label">horas:</label>
        <input type="number" name="horas" id="horas" class="form-control"
            value="<?= htmlspecialchars($horas) ?>">
    </div>
    <div class="col-md-2">
        <label for="dias" class="form-label">Dias:</label>
        <input type="text" name="dias" id="dias" class="form-control"
            value="<?= htmlspecialchars($dias) ?>">
    </div>
 
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>
<?php
if ($cursocriado) {
    echo "<h3>Dados do Curso Cadastrado:</h3>";
    $curso->exibirDados();
}
?>
