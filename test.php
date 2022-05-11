
<form action="test.php" method="post">

    <input type="text" name="num1">
    <input type="text" name="num2">

    <input type="submit"  name="add" value="+">
</form>


<?php

if(isset($_POST['add'])){
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    
    $add = $num1 + $num2;

    echo $add;
    
    
}


?>