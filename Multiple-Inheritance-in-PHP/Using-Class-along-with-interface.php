<?php

    class A { 
        public function insideA() { 
        echo "I am in class A"; 
        } 
    } 
    
    interface B { 
        public function insideB(); 
    } 
    
    class Multiple extends A implements B { 
    
        function insideB() { 
            echo "\nI am in interface"; 
        } 
    
        public function insidemultiple() { 
        echo "\nI am in inherited class"; 
        } 
    } 
    
    $geeks = new multiple(); 
    $geeks->insideA(); 
    $geeks->insideB(); 
    $geeks->insidemultiple();

?>