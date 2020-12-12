<?php
include "inc/header.php";
include "inc/function.php";
?>

<?php
echo "Using Static Keyword in OOP <br>";

class userInfo{
    public $user;
    public $userAge;
    public static $id="1642CSE00575";
    const NAME = "A.A.Jahid";
    public static $age= 28;

    public function __construct($user, $userAge){
        $this->user = $user;
        $this->userAge = $userAge;
        echo "User Name is {$this->user}, age {$this->userAge}, also id is ".self::$id."<br>";

    }
    public static function display(){
        echo " This is your full Name: ".userInfo::NAME;
        echo " Age is : ".self::$age;
    }
    public function __destruct(){
        unset($this->user);
        unset($this->userAge);
    }
}
$user = "Yeahyea Sarker (Navil),";
$userAge = 28;
$name = "A.A.Jahid";
$info = new userInfo($user, $userAge);
userInfo::display();
?>













<?php include "inc/footer.php"; ?>