<?php

$subActions = ["tease","group"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "tease") {
    if (file_exists($sub.'/arousal')) {
        $subArousal = file_get_contents($sub.'/arousal');
    } else {
        $subArousal = 1;
    }
    $subRating += 10 * $subArousal;
    $subScore += 20 * $subArousal;
    echo turnFormat($paradigm, $today) .
        " : " .
        $subModeSign .
        $sub .
        "[" .
        $subRating .
        "] " .
        $spacedictus[$lingua]["fap"] .
        "<br>";
} elseif ($subAction == "group") {
    if (file_exists($sub.'/arousal')) {
        $subArousal = file_get_contents($sub.'/arousal');
    } else {
        $subArousal = 1;
    }
    if (file_exists($obj.'/arousal')) {
        $objArousal = file_get_contents($obj.'/arousal');
    } else {
        $objArousal = 1;
    }
    $subRating += 10 * $subArousal;
    $objRating += 10 * $objArousal;
    $subScore += 20 * $subArousal;
    $objScore += 20 * $objArousal;
    echo turnFormat($paradigm, $today) .
        " : " .
        $subModeSign .
        $sub .
        "[" .
        $subRating .
        "] " .
        $spacedictus[$lingua]["sex"] .
        " " .
        $objModeSign .
        $obj .
        "[" .
        $objRating .
        "] <br>";
}
