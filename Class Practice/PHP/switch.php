<?php
$num1=3;
$num2=4;

$operation="+";

switch($operation){
    case("+"):
        echo "Sum is ";
        echo $num1 + $num2;
        break;
    case("-"):
        echo "Difference is ";
        echo $num1 - $num2;
        break;  
    case("/"):
        echo "Result after Division is ";
        echo $num1 / $num2;
        break;      
    case("*"):
        echo "Result after Multiplication is ";
        echo $num1 * $num2;
        break;
}
echo "<br/>";
echo "Numbers from 1-10 are: ";
echo "<br/>";
for($i=1;$i<=10;$i++){
    echo $i;
}

?>