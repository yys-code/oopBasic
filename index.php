<?php
    include "inc/header.php";
    include "inc/function.php";
    ?>


<form action="" method="post">
    <table>
        <tr>
            <lable>Enter first number: </lable>
            <input type="number" name="fnum" placeholder="First Number">
        </tr>
        <br>
        <br>
        <tr>
            <lable>Enter Second number: </lable>
            <input type="number" name="snum" placeholder="Second Number">
        </tr>
        <br>
        <br>
        <tr>
            <input type="submit" value="Submit" name="submit">
        </tr>
    </table>
</form>


<?php
if (isset($_POST['submit'])){
    $numOne = $_POST['fnum'];
    $numTwo = $_POST['snum'];

    if (empty($numOne) or empty($numTwo)){
        echo "<span style='Color: #EE6554'>Faild must not be empty.</span>";
    }else {
        echo "First Number is $numOne and Second number is $numTwo <br>";
        $cal = new Calculetion;
        $cal->add($numOne, $numTwo);
        $cal->sub($numOne, $numTwo);
        $cal->mul($numOne, $numTwo);
        $cal->divi($numOne, $numTwo);
    }
}
?>

















<?php include "inc/footer.php"; ?>
