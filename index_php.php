<?php

$text = file_get_contents("text.json");
$jsonDecode = json_decode($text);
// var_dump($jsonDecode[0]);
echo "created - email owner - currrecy local - amout - estimated day <br>";
foreach ($jsonDecode as $key => $value) {
    echo $value->object_created . " - " . $value->object_owner . " - " . $value->currency_local . " - " . $value->amount_local . " - " . $value->estimated_days . "<br>";
}