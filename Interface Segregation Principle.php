<?php
    interface Movable {
        public function move();
    }
    
    interface Flyable {
        public function fly();
    }
    
    class Car implements Movable {
        public function move() {
            // el código para moverse
        }
    }
    
    class Airplane implements Movable, Flyable {
        public function move() {
            // el código para moverse
            }
            public function fly() {
                // el código para volar
            }
        }            
?>