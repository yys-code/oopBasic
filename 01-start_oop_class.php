<?php
    include "inc/header.php";



//    class Person{
//        public $name="Yeahyea Sarker.";
//        public $age;
//        public $job;
//
//
//        public function personName(){
//            echo "Person Name is : ".$this->name;
//        }
//        public function personAge($value){
//            echo "Person Age is : ".$this->age= $value;
//        }
//    }
//    $personDetails = new Person;
//    $personDetails->personName();
//    $personDetails->personAge(18);


    class PerDe{//Create a object
        public $name;//public is access modifiare and $name is variable
        public $age;
        public $email;

        public function perName(){
            echo "This is your name: ".$this->name="Yeahyea Sarker,"."<br>";
        }
        public function perAge($value){
            echo "This is your age: ".$this->age=$value.",<br>";
        }
        public function perEmail(){
            echo "This is your Email: ".$this->email="name@gmail.com";
        }



    }
    $info = new PerDe();
    $info->perName()." ".$info->perAge(25)."  ".$info->perEmail();



















    include "inc/footer.php";
        ?>




