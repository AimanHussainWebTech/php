<?php


$Num1 = $_POST['fnum'];
$Num2 = $_POST['Snum'];
$op = $_POST['op'];
switch ($op) {
    case 'add':
        echo "Sum of $Num1 and $Num2 = " . $Num1 + $Num2;
        break;
    case 'sub':
        echo "Sub of $Num1 and $Num2 = " . $Num2 - $Num1;
        break;
        case 'multi':
            echo "Multi of $Num1 and $Num2 = " . $Num2 * $Num1;
            break;
            case 'div':
                echo "Divide of $Num1 and $Num2 = " . $Num2 / $Num1;
                break;
        
    

    
}






// ?>