<?php
echo "Hello !";
$username = "mnetkabel";
echo "<br>";
echo $username;
$age = 26;
echo "<br>";
echo $age;
$varBool = true;
echo "<br>";
echo $varBool;
$varArray = ["String", 666];
echo "<br>";
echo $varArray [0];
echo "<br>";
echo $varArray [1];

$assocArray = ["user" => "Gosho", "age" => 55];
echo "<br>";
echo $assocArray["user"];

echo "<br>";
for ($i = 0; $i <2; $i++){
    echo "<br>";
    echo $varArray[$i];
};

echo "<br>";
foreach($assocArray as $element){
    echo "<br>";
    echo $element;
};