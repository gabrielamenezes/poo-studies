<?php
    require_once("Animal.php")
    class Mamifero extends Animal {
        private $corPelo;

        public function locomover() {
            echo "<p>Correndo...</p>";
        }
        public function alimentar()
        {
            echo "<p>Mamando...</p>";
        }
        public function emitirSom()
        {
            echo "<p>Som de Mamífero</p>"
        }
        
        public function getCorPelo() {
            return $this->corPelo;
        }
        public function setCorPelo($corPelo) {
            $this->corPelo;
        }
    }

?>