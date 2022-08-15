<?php

$subActions = ["tease","group"];
$subActionCount = count($subActions);
$subAction = $subActions[rand(0, $subActionCount - 1)];
if ($subAction == "tease") {
    $subSrc = $sub.'/footu.png';
    $htmltag = htmlentities("<a href='$subSrc'><img src='$subSrc' style='width:20%;position:relative;'></a><br>", ENT_QUOTES);
    echo $htmltag;
} elseif ($subAction == "group") {
    $subSrc = $sub.'/footu.png';
    $objSrc = $obj.'/footu.png';
    $htmltag = htmlentities("<a href='$subSrc'><img src='$subSrc' style='width:20%;position:relative;'></a> <a href='$objSrc'><img src='$objSrc' style='width:20%;position:relative;'></a><br>", ENT_QUOTES);
    echo $htmltag;
}
