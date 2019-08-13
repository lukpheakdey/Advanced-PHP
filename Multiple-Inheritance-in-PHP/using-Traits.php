<?php

    class A{
        public function sayHello(){
            echo "Hello";
        }
    }

    trait forEnglish{
        public function englishForEnglish(){
            echo " English Language";
        }
    }

    class Sample extends A {
        use forEnglish;
        public function internalSample(){
            echo "\nDisplay child B";
        }
    }

    $obj = new Sample();
    $obj->sayHello();
    $obj->englishForEnglish();
    $obj->internalSample();


?>