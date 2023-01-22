<?php
    abstract class Bird {
        abstract public function fly();
    }
    
    class Sparrow extends Bird {
        public function fly() {
            // el código para volar
        }
    }
    
    class Ostrich extends Bird {
        public function fly() {
            // El avestruz no puede volar, pero se puede sustituir la clase base Bird
        }
    }
    
?>