<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 1 ****** </h3>

<?php
// 1.	Sugeneruokite masyvą iš 30 elementų 
// (indeksai nuo 0 iki 29), 
// kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$masyvas = [];
for ($i = 0; $i < 30; $i++) {
    array_push($masyvas, rand(5, 25));
}
echo '<pre>';
echo "Vienas masyvo spausdinimo būdas:"; 
echo '<br>';
print_r($masyvas);
echo '</pre>';
// *********************
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

echo "2.a SALYGA: <br> Naudodamiesi 1 uždavinio masyvu suskaičiuokite kiek masyve yra reikšmių didesnių už 10";
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

// *********************
echo "2.b SALYGA: <br> Raskite didžiausią masyvo reikšmę";
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
  
// *********************
echo "2.c SALYGA: <br> Suskaičiuokite visų reikšmių sumą;<br><br>";
 

echo '<br>';
echo "2.b ATSAKYMAS:<br>";
echo "<b> Visų reikšmių suma šiame masyve yra $sum </b> ";
echo '<br><br>'; 


?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 3 ****** </h3>
// 3.	Sugeneruokite masyvą, kurio reikšmės atsitiktinės 
// raidės A, B, C ir D, o ilgis 200. 
// Suskaičiuokite kiek yra kiekvienos raidės.

<?php


  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 4 ****** </h3>
// 4.	Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

<?php


  
?>


<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 5 ****** </h3>
// 5.	Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. 
// Sudėkite masyvus, sudėdami atitinkamas reikšmes.
// Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.

<?php


  
?>

<h3 style="color:rgb(0, 200, 255); padding-left:80px;">***** ND 6 ****** </h3>
// 6.	Sugeneruokite du masyvus, kurių reikšmės yra 
// atsitiktiniai skaičiai nuo 100 iki 999. 
// Masyvų ilgiai 100. 
// Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

<?php


  
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