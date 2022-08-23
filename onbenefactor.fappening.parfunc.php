<?php

$subActions = ['sex'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "sex") {
    $subRating += $subRating * $objArousal;
    $objRating += $subRating * $subArousal;
    $subScore += $subArousal;
    $objScore += $objArousal;
    echo $turnNum." : ".$subFullName.' '.$spacedictus[$proLingo]["sex"]." ".$objFullName."<br>";
}
