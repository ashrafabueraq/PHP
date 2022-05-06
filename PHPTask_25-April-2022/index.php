
<?php

function b(){

    echo ' <br>';
    echo ' <br>';
}


function check_year($year){

    if ($year % 400 == 0){

        echo 'this is leap year  ';
    
    }
    else if ($year % 100 == 0){
        echo ' this is not leap year ';
    }
    else if ($year % 4 == 0){
    
        echo ' this is a leap year';
    
    }else {
        echo 'this is not leap year';
    }

}

$year = 1900;
check_year($year);


b();

function check_temperature($temperature){
    if ($temperature > 25 ){

        echo 'It is summertime';

    }else{
        echo ' It is wintertime';
    }
}

$temperature = 27;
check_temperature($temperature);

b();


function check_same($num1 , $num2){

    $sum = $num1 + $num2;

   if($num1 == $num2){

    echo $sum * 3;

   }
   else{
    echo $sum;
   }

}


check_same(2,2);



b();


function check_number($num1, $num2){
    $sum = $num1 + $num2;

    if($sum == 30){
        echo 'True';

    }else{
        echo 'False';
    }
}

check_number(10,10);


b();


$num = 20;

if($num % 3 == 0){
    echo ' True';
}else{
    echo ' False';
}


b();

$number1 =  50;

if ($number1 >= 20 &&  $number1 <= 50){

    echo ' True';

}else{
    echo ' False';
}


b();


$nm1 = 8;
$nm2  = 15;
$nm3 = 91;

if ($nm1 > $nm2 && $nm1 > $nm3){

    echo $nm1;
    
}else if ($nm2 > $nm1 && $nm2 > $nm3){
    echo $nm2;

}else{
    echo $nm3;
}


b();


$units = 251;


if ($units <= 50){

    echo $units * 2.50;

}
else if($units > 50 && $units <= 100){

    echo $units * 5;

}
else if ($units > 100 && $units <= 250){

    echo $units * 6.20;

}
else if ($units > 250){

   echo $units * 7.50;

}


b();


$vote = 15;

if ($vote > 0 && $vote < 18 ){
    echo 'it/s not eligible to vote';

}
else if ($vote >= 18){
    echo 'it/s a eligible to vote ';
}else{
    echo 'this is not right age ';
}



b();

$number = -60;

if ($number < 0 ){
    echo 'Negative  Number';
}
else if ($number == 0){
    echo ' Zero Number ';
}
else{
    echo ' Positive Number ';
}

b();

$cal1 = 50;
$cal2 = 12;
$operation = "Division";

if ($operation == "Addition"){
    $sum = $cal1 + $cal2;
    echo $cal1." + ".$cal2." = ".$sum;
}
else if ($operation == "Subtraction"){
    $sub = $cal1 - $cal2;
    echo $cal1." - ".$cal2." = ".$sub;
}
else if ($operation == "Multiplication"){
    $mult = $cal1 * $cal2;
    echo $cal1." * ".$cal2." = ".$mult;
}
else if ($operation == "Division"){
    $div = $cal1 / $cal2;
    echo $cal1." / ".$cal2." = ".$div;
}else{
    echo 'this is not true operation';
}

b();

 $numbers = array(60,86,95,63,90,84,79,62,50);
 $sum = 0;
 for($i = 0; $i < count($numbers); $i++)
     $sum += $numbers[$i];

 $avg = $sum / count($numbers);

 if($avg < 60){
     echo  $avg." F";
 }
 else if($avg < 70){
     echo $avg." D";  
 }
 else if($avg < 80){
     echo $avg." C";
 }
 else if($avg < 90){
    echo  $avg." B";
 }
 else if($avg < 100){
    echo  $avg." A";
 }