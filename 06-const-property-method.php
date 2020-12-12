<?php
include "inc/header.php";
include "inc/function.php";
?>

<?php
echo "Using const in oop <br>";

    class UserData{
        public $user;
        public $userId;
        const FNAME = "Yeahyea Sarker (Navil)."; //This call is const property and this calling way is first write const then Const Name with capital letter also you can't change this value as like other property.

        public function __construct($userName,$userId){
            $this->user = $userName;
            $this->userId = $userId;
            echo "Username is {$this->user} and userId is {$this->userId}";
        }

        public function display()
        {
            echo "Full name is ".UserData::FNAME ;//:: it's name is scope resolution operator and this is the way of call the const property.

        }

        public function __destruct()
        {
           unset($this->user);
           unset($this->userId);
        }

    }

    $user = "Navil";
    $id = "25";
    $info = new userData($user, $id);
    echo "<br/>";
    $info->display();
    echo "<br/>";
?>













<?php include "inc/footer.php"; ?>
