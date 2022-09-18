<?php

$subActions = ['sex'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "sex") {
    $subRating += $objArousal * $coeffe;
    $objScore += $objArousal;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$spacedictus[$proLingo]['sex'].' '.$objFullName.' ('.$objRating.')<br>';
}
