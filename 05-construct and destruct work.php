<?php
include "inc/header.php";
include "inc/function.php";
?>

<?php
echo "Work with construct and destruct <br>";
class userData{
    public $name;
    public $age;
    public $id;

    public function __construct($user, $id){
        $this->name = $user;
        $this->age = $id;

        echo "User name is: {$this->name} and age is: {$this->age}";
    }

    public function __destruct(){
        unset($this->name);
        unset($this->age);
    }
}
$user = "Labiba";
$id = 23;
$info = new userData($user, $id);


?>













<?php include "inc/footer.php"; ?>
