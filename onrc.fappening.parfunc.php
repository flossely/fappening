<?php

$subActions = ['sex'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "sex") {
    $subRating += $objArousal * $objModeDiff;
    $objScore += $objArousal;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$diction[$proLingo]['action']['666'].' '.$objFullName.' ('.$objRating.')<br>';
}
