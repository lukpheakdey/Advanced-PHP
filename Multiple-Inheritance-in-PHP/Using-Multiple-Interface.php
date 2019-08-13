<?php

    interface C { 
        public function insideC(); 
    } 
    
    interface B { 
        public function insideB(); 
    } 
    
    class Multiple implements B, C { 
    
        // Function of the interface B 
        function insideB() { 
            echo "\nI am in interface B"; 
        } 
    
        // Function of the interface C 
        function insideC() { 
            echo "\nI am in interface C"; 
        } 
    
        public function insidemultiple() 
        { 
            echo "\nI am in inherited class"; 
        } 
    } 
    
    $geeks = new multiple(); 
    $geeks->insideC(); 
    $geeks->insideB(); 
    $geeks->insidemultiple(); 
?>