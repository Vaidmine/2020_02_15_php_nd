<h2 style="color:rgb(0, 200, 255); padding-left:80px;">***** VIENMAČIAI MASYVAI ****** </h2>
<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 1 ****** </h3>

<?php
// 1.	Sugeneruokite masyvą iš 30 elementų 
// (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];
foreach(range(1,30) as $value) {
    $masyvas[] = rand(5,25);
}
echo '<pre>';
echo "Masyvas FOREACH būdu (mažiau kodo rašmo nei su FOR ciklu): "; 
echo '<br>';
print_r($masyvas);
echo '</pre>';

echo '****************';
Echo "<br> Yra būdas su FOR ciklu bet jis labiau tinkamas TIK vienmaciui masyvui:";
$masyvas = [];
for ($i = 0; $i < 30; $i++) {
    array_push($masyvas, rand(5, 25));
}

echo '<pre>';
echo "Vienas masyvo spausdinimo būdas:"; 
echo '<br>';
print_r($masyvas);
echo '</pre>';
echo '********************';

echo '<br>';
echo "Kitas masyvo spausdinimo būdas, - taip pat matosi ir INDEX (eiles nr) ir VALUE(reikšmė):"; 
foreach($masyvas as $index => $value) {
    echo '<br>';
    echo $index.' >>> '.$value;
 }



  
?>

<?php
// 2.	Naudodamiesi 1 uždavinio masyvu:
// a)	Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b)	Raskite didžiausią masyvo reikšmę;
// c)	Suskaičiuokite visų reikšmių sumą;
// d)	Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e)	Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f)	Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g)	Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h)	Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i)	Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2A ****** </h3>';
echo "2.a SĄLYGA: <br> Naudodamiesi 1 uždavinio masyvu suskaičiuokite kiek masyve yra reikšmių didesnių už 10";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '<br>';
    $count = 0;
    for($i = 0; $i < count($masyvas); $i++) {
        if($masyvas[$i] > 10) {
            $count++;
        }
    }
echo '<br>';
echo "2.a ATSAKYMAS:<br>";
echo "<b>Reikšmių didesnių už 10 šiame masyve yra $count </b> ";
echo '<br><br>';  

// ********************* 'count' Counts all elements in an array, or something in an object.
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2B ****** </h3>';
echo "2.b SĄLYGA: <br> Raskite didžiausią masyvo reikšmę";
echo '<br><br>';

$biggest = 0;
for($i = 0; $i < count($masyvas); $i++) {
    if($masyvas[$i] >= $biggest) {
        $biggest = $masyvas[$i];
        $vieta = $i;
    }
}
echo "2.b ATSAKYMAS: <br>";
echo "<b>Didžiausia masyvo reikšmė $biggest jos pozicija yra: $vieta <br></b>";
echo '<br>';
  
// ********************* += adding numeric values
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2C ****** </h3>';
echo "2.c SĄLYGA: <br> Suskaičiuokite visų reikšmių sumą <br><br>";
 $sum = 0; 
 for ($i=0; $i < count($masyvas) ; $i++) { 
    $sum += $masyvas[$i];
 }
echo '<br>';
echo "2.c ATSAKYMAS:<br>";
echo "<b> Visų reikšmių suma šiame masyve yra $sum </b> ";
echo '<br><br>';

// ********************* 
//array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
//The length of array increases by the number of variables pushed.
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2D ****** </h3>';
echo "2.d SĄLYGA: <br> Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes <br> minus tos reikšmės indeksas.<br><br>";
$newMasyvas = [];
    for($i = 0; $i < count($masyvas); $i++) {
        array_push($newMasyvas, ($masyvas[$i] - $i));
    }
    echo "2.d ATSAKYMAS <br><b>(sugeneruotas naujas masyvas su ciklu FOR):<br></b>";
    echo '<pre>';
    print_r($newMasyvas);
    echo '</pre>';
    echo '<br>';

echo "*************************";
$newMasyvas = [];
foreach ($masyvas as $key => $value){
    $element = $value - $key;
    array_push($newMasyvas, $element);
}
echo "2.d ATSAKYMAS <br><b>(sugeneruotas naujas masyvas su FOREACH <br>
kai Naujas masyvas = Value - Key </b>";
    echo '<pre>';
    print_r($newMasyvas);
    // _d($newMasyvas);
    // _dc($newMasyvas);
    echo '</pre>';
    echo '<br>';
 

echo "*************************";
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2E ****** </h3>';
echo "2.e SĄLYGA: <br> Papildykite masyvą papildomais 10 elementų <br> su reikšmėmis nuo 5 iki 25, <br> kad bendras masyvas padidėtų iki indekso 39;.<br><br>";
for($i = 0; $i < 10; $i++) {
    $papildymas = rand(2, 25);
    array_push($newMasyvas, $papildymas);
}
echo "2.e ATSAKYMAS <br><b> (papildytas naujas masyvas iki indekso 39):<br></b>";
echo '<pre>';
print_r($newMasyvas); 
_d($newMasyvas); 
echo '</pre>';
echo '<br>';

// *********************  foreach (iterable_expression as $key => $value)
// additionally assign the current element's key to the $key variable on each iteration.
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2F ****** </h3>';
echo "2.f  SĄLYGA: <br> Iš masyvo elementų sukurkite du naujus masyvus. <br> Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių<br><br>";
echo '<br>';
$evenMasyvas = [];
$oddMasyvas = [];
foreach ($newMasyvas as $key => $value) {
    if ($key % 2 === 0) {
        array_push($evenMasyvas, $key);
    } else {
        array_push($oddMasyvas, $key);
    }
}
echo '2.f nauji PORINIAI IR NEPORINIAI masyvai <br>';
echo '<b>Porinis masyvas: </b>';
echo '<pre>';
print_r($evenMasyvas);
echo '</pre><br>';

echo '<b>NEporinis masyvas: </b>';
echo '<pre>';
print_r($oddMasyvas);
echo '</pre>';
echo '<br>';

// *********************
// array_replace — Replaces elements from passed arrays into the first array
// %  - dalyba be liekanos (pvz 10 % 6 = 2 ( o, ne 1.6666))
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2G ****** </h3>';
echo '2.g  SĄLYGA: <br> Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15';
echo '<br>';
$new2GMasyvas = $masyvas;

for ($i = 0; $i < count($new2GMasyvas); $i++) {
    if (($i % 2 === 0) && ($new2GMasyvas[$i] > 15)) {
        $replacement = array($i => 0);
        $new2GMasyvas = array_replace($new2GMasyvas, $replacement);
    }
}

echo '2.g PORINIAI MASYVAI turi būti 0, jeigu jie didesni už 15  <br>';
echo '<b> dar vienas naujas masyvas: </b>';
echo '<pre>';
print_r($new2GMasyvas);
echo '</pre><br>';
echo '<br>';
// ********************* KITAS BUDAS
echo '2.g PORINIAI MASYVAI turi būti 0, jeigu jie didesni už 15 <br>
kitas budas <br>';
$evenMasyvas = [];
$oddMasyvas = [];
for ($i=0; $i < count($new2GMasyvas) ; $i++) { 
   if ($i ==0 || $i %2 == 0){
       array_push($evenMasyvas, $new2GMasyvas[$i]);
   } else {
       array_push($oddMasyvas, $new2GMasyvas[$i]);
   }
}

for ($i=0; $i < count($evenMasyvas); $i++) { 
    if($evenMasyvas[$i] > 15) {
        $evenMasyvas = 0;
    }
}

echo '<pre>';
print_r($evenMasyvas);
echo '</pre><br>';
echo '<br>';

// *********************  BREAK - programos stabdymas
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2H ****** </h3>';
echo '2.h  SĄLYGA: <br> Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10. <br>';
echo ('NEAIŠKU - KURIME MASYVE? sename? naujame? o-O...');
echo '<br>';
for ($i=0; $i < count($new2GMasyvas); $i++) { 
    if ($evenMasyvas[$i] > 10) {
        break;
    }
}
echo '<br><br>';
echo '2.h ATSAKYMAS <br>';
echo "h) Didesnio uz 10 elemento indeksas: $i". "<br>";
echo '<br>';


// *********************  unset — Unset a given variable
echo '<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2I ****** </h3>';
echo '2.i  SĄLYGA: <br> Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą. <br>';
echo '<br>';
for ($i = 0; $i < 39; $i++) {
    if ($i == 0 || $i % 2 == 0) {
        unset($masyvas[$i]);
    } 
}
echo '<pre>';
print_r($masyvas);
echo '</pre><br>';

 


?>
