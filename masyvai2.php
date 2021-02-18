<h2 style="color:rgb(0, 200, 255); padding-left:80px;">***** VIENMAČIAI MASYVAI ****** </h2>
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
echo '<br>';
$masyvasPirmas = [];
$masyvasAntras = [];
for ($i=0; $i < 100 ; $i++) { 
    $randomReiksmes01 = rand(100, 999);
    array_push($masyvasPirmas, $randomReiksmes01);
    $randomReiksmes02 = rand(100, 999);
    array_push($masyvasAntras, $randomReiksmes02);
}
 //*****************************/

$masyvasTrecias = [];
foreach($masyvasPirmas as $value){
    if(!in_array($value, $masyvasTrecias)){
        array_push($masyvasTrecias, $value);
    }
}
echo " <b> Vienas naujas masyvas su unikaliomis reikšmėmis </b> ";
echo '<pre>';
print_r ($masyvasTrecias);
echo '</pre><br>';

 //*****************************
 // !in_array — Checks if a value exists in an array
 // array_push — Push one or more elements onto the end of array

$masyvasKetvirtas = [];
foreach($masyvasAntras as $value){
    if(!in_array($value, $masyvasKetvirtas)){
        array_push($masyvasKetvirtas, $value);
    }
}
echo " <b> Kitas naujas masyvas su unikaliomis reikšmėmis </b> ";
echo '<pre>';
print_r ($masyvasKetvirtas);
echo '</pre><br>';
 
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 7 ****** </h3>
<?php
 // 7.	Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
// kurios yra pirmame 6 uždavinio masyve, 
// bet nėra antrame 6 uždavinio masyve.
echo " Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, <br>
kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.<br>";

///count — Count all elements in an array, or something in an object
$arrayKazkoksDar = [];
for ($i = 0; $i < count($masyvasTrecias); $i++) {
    if(!in_array($masyvasTrecias[$i], $masyvasKetvirtas)) {
        array_push($arrayKazkoksDar, $masyvasTrecias[$i]);
    }
}
echo " <b> Kažkoks dar vienas naujas masyvas su unikaliomis reikšmėmis </b> ";
echo '<pre>';
print_r($arrayKazkoksDar);
echo '</pre><br>';


?>


<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 8 ****** </h3>

<?php
// 8.	Sugeneruokite masyvą iš elementų, 
// kurie kartojasi abiejuose 6 uždavinio masyvuose.
echo " Sugeneruokite masyvą,iš elementų, <br>
kurie kartojasi abiejuose 6 uždavinio masyvuose.<br>";

$kartojasi = [];
for ($i = 0; $i < count($masyvasTrecias); $i++) {
    if (in_array($masyvasTrecias[$i], $masyvasKetvirtas)) {
        array_push($kartojasi, $masyvasTrecias[$i]);
    }
}
echo '<pre>';
print_r($kartojasi);
echo '</pre>';
echo '<br><br>';

  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 9 ****** </h3>

<?php
// 9.	Sugeneruokite masyvą, kurio indeksus sudarytų 
// pirmo 6 uždavinio masyvo reikšmės, 
// o jo reikšmės iš būtų antrojo masyvo. (galima daryti su array_combine)
echo "Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, <br>
o jo reikšmės iš būtų antrojo masyvo.<br>";
$jauDarosiVisiskaNesamone = [];
for($i = 0; $i < count($masyvasTrecias); $i++) {
    $jauDarosiVisiskaNesamone[$masyvasTrecias[$i]] = $masyvasKetvirtas[$i];

}
echo "????....";
echo '<pre>';
print_r($jauDarosiVisiskaNesamone);
echo '</pre>';


 
?>
  

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 10 ****** </h3>

<?php
// 10.	Sugeneruokite 10 skaičių masyvą pagal taisyklę: 
// Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25.
// Trečias yra pirmo ir antro suma. 
// Ketvirtas- antro ir trečio suma. 
// Penktas trečio ir ketvirto suma ir t.t.

$skaiciuMasyvas = [];
for ($i=0; $i < 10 ; $i++) { 
    if ($i < 2) {
        $skaiciuMasyvas[$i] = rand(5, 25);
    } else {
        $skaiciuMasyvas[$i] = ($skaiciuMasyvas[$i - 2] + $skaiciuMasyvas[$i - 1]);
    }
}

echo "10 skaičių masyvas, kai du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. <br>
Trečias yra pirmo ir antro suma. Ketvirtas- antro ir trečio suma ir t.t. ";
echo '<pre>';
print_r($skaiciuMasyvas);
echo '</pre>';
  
?>