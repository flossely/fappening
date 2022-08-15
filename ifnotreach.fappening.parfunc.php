<?php

$subActions = ["tease"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "tease") {
    $subSrc = $sub.'/footu.png';
    $htmlstr = "<a href='".$subSrc."'><img src='".$subSrc."' style='width:20%;position:relative;'></a><br>";
    $htmltag = htmlentities($htmlstr);
    echo $htmltag;
}
