<?php
include "inc/header.php";
include "inc/function.php";
?>

<?php

    class Person{
        public $name;
        public $age;
        public $id;

        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }
       public function setId($id){
            $this->id = $id;
       }
       public function __destruct(){
//            if(! empty($this->id)){
//                echo "Saving Person";
//            }
           mysqli_close();
       }
    }
    $info = new Person("Yeahyea Sarker", 25);
    $info->setId(12);
    unset($info);

?>













<?php include "inc/footer.php"; ?>
