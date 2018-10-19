<?php

// Kintamieji:

$integer = 1;
$string = "Lukas";
$bool = true; // = 1
$bool = false; // = 0


$name = "Lukas";
$a = "Tekstas";
$a = 1234;
$a = "1234";

$array = [1, 2, 3, 3, 4, 5];
$array = ["Lukas", "Tomas", 1234, 4321];

// Integers

$value = 99;
$value--; // sumažinta vienu
$value += 100; // padidinti simtu = value + 100
$value -= 10; // sumazinti 10
$value = $value / 8 + 7;
echo $value;

// String

$name = "Lukas";
$surname = "Chrapovickis";

$fullName = $name . " " . $surname;
$fullName .= " dar papildomas tekstas";

echo $fullName;

// Bool

$namas_dega = true;

// if ($namas_dega == true) {
// 	echo "gaisras!";
// } else {
// 	echo "viskas gerai.";
// }

// ->

echo $namas_dega ? "gaisras!" : "viskas gerai.";

// array

$names = ["Petras", "Jonas", "Stasys", "Kazys"];

echo $names[0];

echo "<hr><pre>";

$user_1 = [
	"name" => "Petras", 
	"surname" => "Petrauskas",
	"age" => 55,
	"weight" => 80
];
$user_2 = [
	"name" => "Jonas", 
	"surname" => "Jonaitis",
	"age" => 35,
	"weight" => 55
];
$user_3 = [
	"name" => "Stasys", 
	"surname" => "Stasaitis",
	"age" => 70,
	"weight" => 77
];

echo $user_1["age"];

echo "<hr>";

print_r($user_1);

echo "<hr>";

var_dump($user_1);


$users = [];
$users = [$user_1, $user_2, $user_3];

print_r($users);

echo $users[2]['surname'];


$kaina = 89;

$kaina_su_pvm = getVatPrice($kaina * $vat);

function getVatPrice($price, $vat = 0.21) {
	$vatPrice = $price * (1 + $vat);
	return $vatPrice;
}


