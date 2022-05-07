<?php


function br(){
    echo '<br/>';
    echo '<br/>';
}

// Write a PHP script that will display the colors as unordered list : 

$colors = array('white', 'green', 'red');

for($i = 0 ; $i < 3; $i++){

    echo '<ul>';
    echo '<li>'.$colors[$i].'</li>';
    echo '</ul>';

}


br();


// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 

$cities = array("Netherlands" => "Amsterdam ", "Greece" => "Athens", "Germany" => "Berlin ");


foreach ($cities as $country => $capital){

    echo 'the capital '.$country.'is : '.$capital.'<br/>';
}


br();

// Write a PHP script to display the first element of the above array. 

$color = array(4 => 'white', 6 => 'green', 11 => 'red');

echo $color[4];

br();

//Write a PHP script to sort the following associative array depending on the key value 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

foreach($fruits as $key => $val){

    echo $key." = ".$val.'<br/>';

}

br();

// Write a PHP script to get the shortest/longest string length from an array


$words =  array("abcd","abc","de","hjjj","g","wer");
$max = strlen($words[0]);
$min = strlen($words[0]);
foreach($words as $value){
    if($max < strlen($value))
        $max = strlen($value);
    
    if($min > strlen($value))
        $min = strlen($value);
}
echo "<br>";
echo "The shortest array length is $min. The longest array length is $max";



br();


