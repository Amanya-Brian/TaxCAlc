<?php

echo "<link rel='stylesheet' type='text/css' href='tax.css'>";

$name = $_POST["Name"];
$salary = $_POST["Salary"]; 
$residence = $_POST["status"];
$allowances = $_POST["Allowances"];
$month = $_POST["month"];
$remMonth = NULL;
$Bal = NULL;
$chargeableIncome = NULL;
$incomeTax = NULL;
$annualTax = NULL;

if($month == "Jan" || $month == "01" || $month == "January"){
    $GLOBALS['remMonth'] = 12 - 1;
}
if($month == "Feb" || $month == "02" || $month == "February"){
    $GLOBALS['remMonth'] = 12 - 2;
}
if($month == "Mar" || $month == "03" || $month == "March"){
    $GLOBALS['remMonth'] = 12 - 3;
}
if($month == "Apr" || $month == "04" || $month == "April"){
    $GLOBALS['remMonth'] = 12 - 4;
}
if($month == "May" || $month == "05" || $month == "May"){
    $GLOBALS['remMonth'] = 12 - 5;
}
if($month == "Jun" || $month == "06" || $month == "June"){
    $GLOBALS['remMonth'] = 12 - 6;
}
if($month == "Jul" || $month == "07" || $month == "July"){
    $GLOBALS['remMonth'] = 12 - 7;
}
if($month == "Aug" || $month == "08" || $month == "August"){
    $GLOBALS['remMonth'] = 12 - 8;
}
if($month == "Sep" || $month == "09" || $month == "September"){
    $GLOBALS['remMonth'] = 12 - 9;
}
if($month == "Oct" || $month == "10" || $month == "October"){
    $GLOBALS['remMonth'] = 12 - 10;
}
if($month == "Nov" || $month == "11" || $month == "November"){
    $GLOBALS['remMonth'] = 12 - 11;
}
if($month == "Dec" || $month == "12" || $month == "December"){
    $GLOBALS['remMonth'] = 12 - 12;
}


if($residence=="Resident"){
    $chargeableIncome = $salary - $allowances;
    if($chargeableIncome < 235000){
        $incomeTax = $chargeableIncome;
        $annualTax = $incomeTax * $remMonth;
    }
    else if($chargeableIncome < 335000){
        $Bal = $chargeableIncome - 235000;
        $incomeTax= 0.1 * $Bal;
        $annualTax = $incomeTax * $remMonth; 
    }
    else if($chargeableIncome < 410000){
        $Bal = $chargeableIncome - 335000;
        $incomeTax= (0.2 * $Bal) + 10000;
        $annualTax = $incomeTax * $remMonth; 
    }
    else{
        if($chargeableIncome < 10000000){
            $Bal = $chargeableIncome - 410000;
            $incomeTax= (0.3 * $Bal) + 25000;
            $annualTax = $incomeTax * $remMonth;
        }
        else{
            $Bal = $chargeableIncome - 10000000;
            $incomeTax = ((0.3 * ($chargeableIncome - 410000)) + 25000) + (0.1 * $Bal) ;
            $annualTax = $incomeTax * $remMonth;
        } 
    }

    echo "<h2>Here are your tax details:</h2><br><br>";
    echo "<center><table cellpadding='10px'>
    
    <tr>
    <td><strong>Name:</strong></td>
    <td>".$name."</td>
    </tr>

    <tr>
    <td><strong>Salary:</strong></td>
    <td>".$salary."</td>
    </tr>

    <tr>
    <td><strong>Monthly Tax:</strong></td>
    <td>".$incomeTax."</td>
    </tr>

    <tr>
    <td><strong>Rest of the year:</strong></td>
    <td>".$annualTax."</td>
    </tr>

    </table></center>";

    echo "<br><br><br>";
    echo "For more information on how these values are obtained, please<a href='https://www.ura.go.ug/Resources/webuploads/INLB/PAYE%20New%20Rates.compressed.pdf'> Click Here.</a>";
    echo "<br><br><br>";
    
    echo "<h3>Thank you for using our tax calculator!</h3>";
}

else {
    if($residence=="NonResident"){
        $chargeableIncome = $salary - $allowances;
        if($chargeableIncome < 335000){
            $incomeTax = 0.1 * $chargeableIncome;
            $annualTax = $incomeTax * $remMonth;
        }
        else if($chargeableIncome < 410000){
            $Bal = $chargeableIncome - 335000;
            $incomeTax = (0.2 * $Bal) + 33500;
            $annualTax = $incomeTax * $remMonth; 
        }
        else{
            if($chargeableIncome < 10000000){
                $Bal = $chargeableIncome - 410000;
                $incomeTax= (0.3 * $Bal) + 48500;
                $annualTax = $incomeTax * $remMonth;
            }
            else{
                $Bal = $chargeableIncome - 10000000;
                $incomeTax = ((0.3 * ($chargeableIncome - 410000)) + 25000) + (0.1 * $Bal) ;
                $annualTax = $incomeTax * $remMonth;
            } 
        }
    
        echo "<h2>Here are your tax details:</h2><br><br>";
        echo "<center><table cellpadding='10px'>
        
        <tr>
        <td><strong>Name:</strong></td>
        <td>".$name."</td>
        </tr>
    
        <tr>
        <td><strong>Salary:</strong></td>
        <td>".$salary."</td>
        </tr>
    
        <tr>
        <td><strong>Monthly Tax:</strong></td>
        <td>".$incomeTax."</td>
        </tr>
    
        <tr>
        <td><strong>Rest of the year:</strong></td>
        <td>".$annualTax."</td>
        </tr>
    
        </table></center>";

        echo "<br><br><br>";
        echo "For more information on how these values are obtained, please<a href='https://www.ura.go.ug/Resources/webuploads/INLB/PAYE%20New%20Rates.compressed.pdf'> Click Here.</a>";
        echo "<br><br><br>";
    
        echo "<h3>Thank you for using our tax calculator!</h3>";
    }
}