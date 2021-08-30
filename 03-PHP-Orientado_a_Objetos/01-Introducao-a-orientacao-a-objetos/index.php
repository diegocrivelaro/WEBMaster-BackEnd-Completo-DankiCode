<?php
    /*
    Classe Pessoa{
        Atributo Nome (Variável)
        Atributo Idade (Variável)
        Atributo Peso (Variável)

        Método Crescer() (Função)
        Método Comer() (Função)
        Método Anabolismo() (Função)
    }
    */

    class Pessoa{
        // Objeto Pessoa

        private $nome = "Diego";
        private $idade = "18";
        private $peso = 60;
        // Atributos

        public function comer(){
            echo "Estou comendo";
            $this->crescer(); // Chamando o método crescer dentro do método comer
        }

        private function crescer(){
            echo "Estou crescendo";
        }
        // Métodos
        // Quando eu digo PRIVATE, eu estou afirmando que o método/atributo só estará disponível dentro da classe.
    }

    // Chamar a classe -> Instânciar
    $pessoa1 = new Pessoa;
    $pessoa2 = new Pessoa;

    $pessoa1->comer();

?>
