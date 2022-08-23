<?php

$subActions = ["fap"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "fap") {
    $subRating += $subArousal;
    $subScore += $subArousal;
    echo $turnNum." : ".$subFullName." ".$spacedictus[$proLingo]["fap"]."<br>";
}
