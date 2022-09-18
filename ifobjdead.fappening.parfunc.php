<?php

$subActions = ["fap"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "fap") {
    $subRating += 1;
    $subScore += 1;
    echo $turnNum.' : '.$subFullName.' ('.$subRating.') '.$spacedictus[$proLingo]['fap'].'<br>';
}
