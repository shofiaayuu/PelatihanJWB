<?php
const PI = 3.14;

function hitungLuasLingkaran($radius)
{
    $luas = PI * $radius * $radius;
    return $luas;
}

$radius = 10;
$luasLingkaran = hitungLuasLingkaran($radius);

echo "Jari-jari lingkaran:  " . $radius . "\n\n,";

echo "Luas lingkaran: " . $luasLingkaran . "\n";
?>