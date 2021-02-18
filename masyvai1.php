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
echo "Masyvas FOREACH būdu / mažiau kodo nei su FOR ciklu: "; 
echo '<br>';
print_r($masyvas);
echo '</pre>';

echo '****************';
Echo "<br> Yra budas su FOR ciklu bet tinkamas tik vienmaciui masyvui:";
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
echo "Kitas masyvo spausdinimo būdas:"; 
foreach($masyvas as $index => $value) {
    echo '<br>';
    echo $index.' >>> '.$value;
 }



  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 2 ****** </h3>
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
echo "2.c SĄLYGA: <br> Suskaičiuokite visų reikšmių sumą <br><br>";
 $sum = 0; 
 for ($i=0; $i < count($masyvas) ; $i++) { 
    $sum += $masyvas[$i];
 }
echo '<br>';
echo "2.b ATSAKYMAS:<br>";
echo "<b> Visų reikšmių suma šiame masyve yra $sum </b> ";
echo '<br><br>';

// ********************* 
//array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
//The length of array increases by the number of variables pushed.
echo "2.d SĄLYGA: <br> Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes <br> minus tos reikšmės indeksas.<br><br>";
$newMasyvas = [];
    for($i = 0; $i < count($masyvas); $i++) {
        array_push($newMasyvas, ($masyvas[$i] - $i));
    }
    echo "2.d ATSAKYMAS <br><b>(sugeneruotas naujas masyvas):<br></b>";
    echo '<pre>';
    print_r($newMasyvas);
    echo '</pre>';
    echo '<br>';

// ********************* 
echo "2.e SĄLYGA: <br> Papildykite masyvą papildomais 10 elementų <br> su reikšmėmis nuo 5 iki 25, <br> kad bendras masyvas padidėtų iki indekso 39;.<br><br>";
for($i = 0; $i < 10; $i++) {
    array_push($newMasyvas, rand(2, 25));
}
echo "2.e ATSAKYMAS <br><b> (papildytas naujas masyvas iki indekso 39):<br></b>";
echo '<pre>';
print_r($newMasyvas); 
echo '</pre>';
echo '<br>';

// *********************  foreach (iterable_expression as $key => $value)
// additionally assign the current element's key to the $key variable on each iteration.
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
echo '2.f ATSAKYMAS <br>';
echo '<b>Porinis masyvas: </b>';
echo '<pre>';
print_r($evenMasyvas);
echo '</pre><br>';

echo '<b>NEporinis masyvas: </b>';
echo '<pre>';
print_r($oddMasyvas);
echo '</pre>';
echo '<br>';

// ********************* array_replace — Replaces elements from passed arrays into the first array
// %  - dalyba be liekanos (pvz 10 % 6 = 2 ( o, ne 1.6666))
echo '2.g  SĄLYGA: <br> Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15';
echo '<br>';
$new2GMasyvas = $masyvas;

for ($i = 0; $i < count($new2GMasyvas); $i++) {
    if (($i % 2 === 0) && ($new2GMasyvas[$i] > 15)) {
        $replacement = array($i => 0);
        $new2GMasyvas = array_replace($new2GMasyvas, $replacement);
    }
}

echo '2.g ATSAKYMAS <br>';
echo '<b> dar vienas naujas masyvas: </b>';
echo '<pre>';
print_r($new2GMasyvas);
echo '</pre><br>';
echo '<br>';

// *********************  BREAK - programos stabdymas
echo '2.h  SĄLYGA: <br> Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10. <br>';
echo ('MAN NEAIŠKU - KURIME MASYVE? sename? naujame? nes  daug prikurta...');
echo '<br>';
for ($i=0; $i < count($masyvas); $i++) { 
    if ($masyvas[$i] > 10) {
        break;
    }
}
echo '<br><br>';
echo '2.h ATSAKYMAS <br>';
echo $i;
echo '<br>';


// *********************  unset — Unset a given variable
echo '2.i  SĄLYGA: <br> Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą. <br>';
echo '<br>';
for ($i=0; $i < count($masyvas) ; $i++) { 
    if ($i % 2 ===0 ){
        unset($masyvas[$i]);
    }
}
echo '<br><br>';
echo '2.i ATSAKYMAS <br>';
echo '<pre>';
print_r($masyvas);
echo '</pre><br>';

?>
