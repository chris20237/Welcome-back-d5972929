<?php

$readline = readline();
$boom = explode(" ", $readline);

if ($boom[0] == $boom[1]) {
    echo "In balans";
} else {
    echo "Niet in balans";
}
