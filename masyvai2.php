<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 3 ****** </h3>

<?php
// 3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės 
// raidės A, B, C ir D, o ilgis 200. 
// Suskaičiuokite kiek yra kiekvienos raidės.
echo "Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. <br> Suskaičiuokite kiek yra kiekvienos raidės.";
echo '<br>';
$array = [];
$arrayRandom = "ABCD";
for ($i = 0; $i < 200; $i++) {
    array_push($array, $arrayRandom[rand(0, 3)]);
}

// for ($i=0; $i < 200 ; $i++) { 
//     $randArray = shuffle($array);
//     array_push($array, $randArray);
// }

echo "<b> Sumaišytų raidžių masyvas (ilgis 200): <br> </b>";
echo '<pre>';
print_r($array);
echo '</pre><br>';
echo "<b> Suskaičiuotos raidės masyve su 'array_count_values' f-ja: <br> </b>";
echo '<pre>';
print_r(array_count_values($array));
echo '</pre>';

?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 4 ****** </h3>
<?php
// 4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
sort($array);
echo "<b> Išrūšiuotos raidės masyve su 'sort' f-ja: <br> </b>";
echo '<pre>';
print_r($array);
echo '</pre>';
  
?>


<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 5 ****** </h3>
<?php
// 5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
// Sudėkite masyvus, sudėdami atitinkamas reikšmes.
// Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.
echo "Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą.<br>
Sudėkite masyvus, sudėdami atitinkamas reikšmes.<br>
Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.<br>";
$one = [];
$two = [];
$three = [];
$abc = "ABCD";
for ($i = 0; $i < 200; $i++) {
    array_push($one, $abc[rand(0, 3)]);
}
for ($i = 0; $i < 200; $i++) {
    array_push($two, $abc[rand(0, 3)]);
}
for ($i = 0; $i < 200; $i++) {
    array_push($three, $abc[rand(0, 3)]);
}
$newArray = [];
for ($i = 0; $i < 200; $i++) {
    array_push($newArray, ($one[$i]. $two[$i]. $three[$i]));
}

echo '<pre>';
print_r ($newArray);
echo '</pre><br>';
echo '<pre>';
echo "Unikalių reikšmių kombinacijų viso yra:". count(array_count_values($newArray));
echo '</pre>';
echo '<br><br>';
echo "Unikalių reikšmių kombinacijų viso yra:";
  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 6 ****** </h3>
<?php
// 6.	Sugeneruokite du masyvus, kurių reikšmės yra 
// atsitiktiniai skaičiai nuo 100 iki 999. 
// Masyvų ilgiai 100. 
// Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
echo "Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. <br>
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).<br>";
$arrayOne = [];
$randomOne[rand(100, 999)]);
for ($i=0; $i < 100 ; $i++) { 
    # code...
}
  
$arrayTwo = [];
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 7 ****** </h3>
// 7.	Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
// kurios yra pirmame 6 uždavinio masyve, 
// bet nėra antrame 6 uždavinio masyve.

<?php


  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 8 ****** </h3>
// 8.	Sugeneruokite masyvą iš elementų, 
// kurie kartojasi abiejuose 6 uždavinio masyvuose.

<?php


  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 9 ****** </h3>
// 9.	Sugeneruokite masyvą, kurio indeksus sudarytų 
// pirmo 6 uždavinio masyvo reikšmės, 
// o jo reikšmės iš būtų antrojo masyvo.
<?php


  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 10 ****** </h3>
// 10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
// Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
// Trečias, pirmo ir antro suma. 
// Ketvirtas- antro ir trečio suma. 
// Penktas trečio ir ketvirto suma ir t.t.
<?php


  
?>