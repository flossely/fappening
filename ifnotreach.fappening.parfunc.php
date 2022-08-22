<?php

$subActions = ["tease"];
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
    echo $turnNum .
        " : " .
        $subModeSign .
        $sub .
        "[" .
        $subRating .
        "] " .
        $spacedictus[$proLingo]["fap"] .
        "<br>";
}
