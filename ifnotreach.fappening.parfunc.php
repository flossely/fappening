<?php

$subActions = ["fap"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "fap") {
    $subRating += 2 * $subArousal;
    $subScore += 2 * $subArousal;
    echo $turnNum." : ".$subHalfNotation." ".$spacedictus[$proLingo]["fap"]."<br>";
}
