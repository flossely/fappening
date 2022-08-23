<?php

$subActions = ['fap', 'group'];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "fap") {
    $subRating += 2 * $subArousal;
    $subScore += 2 * $subArousal;
    echo $turnNum." : ".$subHalfNotation." ".$spacedictus[$proLingo]["fap"]."<br>";
} elseif ($subAction == "group") {
    $subRating += 10 * $objArousal;
    $objRating += 10 * $subArousal;
    $subScore += 20 * $subArousal;
    $objScore += 20 * $objArousal;
    echo $turnNum." : ".$subHalfNotation.' '.$spacedictus[$proLingo]["sex"]." ".$objHalfNotation."<br>";
}
