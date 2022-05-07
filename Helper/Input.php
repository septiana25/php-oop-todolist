<?php
function input(string $info): string
{
    echo "$info : \n";
    $result = fopen("php://stdin","r");
    return trim(fgets($result));
}