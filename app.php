<?php

$age = 23;
if ($age >= 0 && $age <= 14) {
    echo "Child";
} elseif ($age > 14 && $age <= 24) {
    echo "Young";
} elseif ($age > 24 && $age <= 64) {
    echo "Adult";
} elseif ($age > 64) {
    echo "Old";
}


/**
 * 0-14 = Çocuk
 * 15-24 = Genç
 * 25-64 = Yetişkin
 * 65+ = Yaşlı
 * 
 * İyi çalışmalar.
 * Teşekkür ederim :)
 */
