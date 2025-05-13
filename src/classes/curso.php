<?php
 
class Curso {
    public $titulo;
    private $aluno;
    public $horas;
    public $dias;
 
    // Construtor com validação
    public function __construct($titulo, $aluno, $horas,$dias) {
 
        if (empty($titulo)) {
            throw new Exception("O campo titulo é obrigatório.");
        }    
        if (empty($aluno)) {
            throw new Exception("O campo aluno é obrigatório.");
        }
        if (empty($horas)) {
            throw new Exception("O campo horas é obrigatório.");
        }
   
 
        $this->titulo = $titulo;
        $this->aluno = $aluno;
        $this->horas = $horas;
        $this->dias = $dias;
   
    }
 
    // Getter do CPF (encapsulamento)
    public function getaluno() {
        return $this->aluno;
    }
 
    // Método para exibir os dados
    public function exibirDados() {
        echo "<p>Titulo: <strong>$this->titulo</strong><br>";
        echo "Aluno: <strong>" . $this->getaluno() . "</strong></br>";
        echo "Horas: <strong>$this->horas</strong><br>";  
        echo "Dias: <strong>$this->dias</strong><p>";    
    }
}
 