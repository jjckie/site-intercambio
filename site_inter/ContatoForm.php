<?php
class ContatoForm {
    private $nome;
    private $idade;
    private $dataViagem;
    private $continente;
    private $numeroPessoas;
    private $tempoViagem;
    private $email;
    private $telefone;

    public function __construct($nome, $idade, $dataViagem, $continente, $numeroPessoas, $tempoViagem, $email, $telefone) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->dataViagem = $dataViagem;
        $this->continente = $continente;
        $this->numeroPessoas = $numeroPessoas;
        $this->tempoViagem = $tempoViagem;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function getNome() {
        return $this->nome;
    }

    public function exibirDados() {
        echo "<p><strong>Nome:</strong> " . $this->nome . "</p>";
        echo "<p><strong>Idade:</strong> " . $this->idade . "</p>";
        echo "<p><strong>Data da Viagem:</strong> " . $this->dataViagem . "</p>";
        echo "<p><strong>Continente de Interesse:</strong> " . $this->continente . "</p>";
        echo "<p><strong>Número de Pessoas:</strong> " . $this->numeroPessoas . "</p>";
        echo "<p><strong>Tempo de Viagem:</strong> " . $this->tempoViagem . " dias</p>";
        echo "<p><strong>E-mail:</strong> " . $this->email . "</p>";
        echo "<p><strong>Telefone:</strong> " . $this->telefone . "</p>";
    }
}
?>
