<?php
    abstract class Shape {
        abstract public function area();
    }
    
    class Square extends Shape {
        private $side;
        
        public function __construct($side) {
            $this->side = $side;
        }
        
        public function area() {
            return $this->side * $this->side;
        }
    }
    
    class Circle extends Shape {
        private $radius;
        
        public function __construct($radius) {
            $this->radius = $radius;
        }
        
        public function area() {
            return pi() * $this->radius * $this->radius;
        }
    }
    
?>