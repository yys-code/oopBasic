<?php
include "inc/header.php";
include "inc/function.php";
?>

<?php

    class Person{
        public $name;
        public $age;

        public function __construct($name, $age) {//__construct automatic loaded without diclaretion this method
            $this->name = $name;
            $this->age = $age;
        }
        public function personDetail(){
            echo "Person name is {$this->name} and Age is {$this->age}";
        }
    }
    $info = new Person('Navil Sarker', 28);
    $info->personDetail();




?>













<?php include "inc/footer.php"; ?>
