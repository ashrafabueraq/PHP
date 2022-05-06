<?php

function br(){
    echo '</br>';
    echo '</br>';

}
//1.	Create a script using a for loop to add all the integers between 0 and 30 and display the total. 

for($i = 0 ; $i <=30; $i++){

    echo $i.'</br>';

}


br();


// 2.	Create a script to generate the following pattern, using the nested for loop. 


$A = 'A';
$B = 'B';
$C = 'C';
$E = 'E';
for ($i = 0 ; $i <= 4 ; $i++){
    echo $A;
}
echo '</br>';

for ($i = 0 ; $i <= 2 ; $i++){

    echo $A;   
}
for($i = 0 ; $i < 2; $i++ ){
    echo $B;

}

echo '</br>';

for($i = 0 ; $i < 2; $i++ ){
    echo $A;

}
for ($i = 0 ; $i <= 2 ; $i++){

    echo $C;   
}

echo '</br>';

for ($i = 0 ; $i <= 4 ; $i++){
    echo $E;
}

br();

// 4.	Create a script to generate the following pattern, using the nested for loop

for ($i = 0 ; $i < 1; $i++){
    echo 1;

}
for ($i = 0 ; $i < 4; $i++){
    echo 0;

}
echo '</br>';
for ($i = 0 ; $i < 1; $i++){
    echo 0;

}
for ($i = 0 ; $i < 1; $i++){
    echo 2;

}
for ($i = 0 ; $i < 3; $i++){
    echo 0;

}

echo '</br>';

for ($i = 0 ; $i < 2; $i++){
    echo 0;

}
for ($i = 0 ; $i < 1; $i++){
    echo 3;

}
for ($i = 0 ; $i < 2; $i++){
    echo 0;

}



echo '</br>';

for ($i = 0 ; $i < 3; $i++){
    echo 0;

}
for ($i = 0 ; $i < 1; $i++){
    echo 4;

}
for ($i = 0 ; $i < 1; $i++){
    echo 0;

}
echo '</br>';

for ($i = 0 ; $i < 4; $i++){
    echo 0;

}
for ($i = 0 ; $i < 1; $i++){
    echo 5;

}

br();

 
//5.	Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. 


 $n = 5;
 $x = 1;
 for($i=1;$i<=$n-1;$i++)
 {
  $x*=($i+1); 
 }
 echo "The factorial of  $n = $x"."\n";

 br();

//6.	Write a program to calculate and print the Fibonacci sequence using a for loop.
//Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

$f1 = 0;
$f2 = 1;
$n = 20 ;
echo $f1;
echo '<br/>';
echo $f2;
echo '<br/>';

for($i = 0; $i < $n; $i++) {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    echo $f3 ."<br />"; 
}

br();




//    9.	Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **



for ($i = 0 ; $i < 1; $i++){
    echo 1;

}
echo'<br/>';

$sum = 1;
for ($i = 0 ; $i < 2; $i++){
     
   
    $sum += 1;
    echo $sum;

}
echo'<br/>';

$sum = 3;
for ($i = 0 ; $i < 3; $i++){
     
   
    $sum += 1;
    echo $sum;

}
echo'<br/>';

$sum = 6;
for ($i = 0 ; $i < 4; $i++){
     
   
    $sum += 1;
    echo $sum;

}

echo'<br/>';

$sum = 10;
for ($i = 0 ; $i < 5; $i++){
     
   
    $sum += 1;
    echo $sum;

}