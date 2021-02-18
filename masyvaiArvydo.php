<?php

$ABCZ = 'ABCZ';
for ($i = 0; $i < 200; $i++) {
    $randomABCD1[] = $ABCZ[rand(0,3)];
    $randomABCD2[] = $ABCZ[rand(0,3)];
    $randomABCD3[] = $ABCZ[rand(0,3)];
}

foreach($randomABCD1 as $key => $_) {
    $bendrasMasyvas[] = $randomABCD1[$key].$randomABCD2[$key].$randomABCD3[$key];
}


_d($bendrasMasyvas);

$unikalios = [];
$po1karta = [];

foreach($bendrasMasyvas as $val) {
    if (!in_array($val, $unikalios)) {
        $unikalios[] = $val;
    }
}

foreach($bendrasMasyvas as $key => $val) {
    unset($bendrasMasyvas[$key]);
    if (!in_array($val, $bendrasMasyvas)) {
        $po1karta[] = $val;
    }
    $bendrasMasyvas[$key] = $val;
}


_dc(count($unikalios));
_dc(count($po1karta));

?>
