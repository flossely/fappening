<?php

$subActions = ['sex'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "sex") {
    $subRating += $objArousal * 10;
    $objRating += $subArousal * 10;
    $subScore += $subArousal;
    $objScore += $objArousal;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$spacedictus[$proLingo]['sex'].' '.$objFullName.' ('.$objRating.')<br>';
}