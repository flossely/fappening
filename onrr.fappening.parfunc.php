<?php

$subActions = ['sex', 'foot'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "sex") {
    $subRating += $objArousal * 10;
    $objScore += $objArousal;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$spacedictus[$proLingo]['sex'].' '.$objFullName.' ('.$objRating.')<br>';
} elseif ($subAction == "foot") {
    $subRating += $objArousal * 100;
    $objScore += $objArousal;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$spacedictus[$proLingo]['foot'].' '.$objFullName.' ('.$objRating.')<br>';
}
