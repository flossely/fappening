<?php

if (file_get_contents($sub.'/ratio')) {
    $subRatioFile = file_get_contents($sub.'/ratio');
    if (is_numeric($subRatioFile)) {
        $subRatio = $subRatioFile;
    } else {
        $subRatio = 0;
    }
} else {
    $subRatio = 0;
}

if (file_get_contents($sub.'/bshp')) {
    $subBshpFile = file_get_contents($sub.'/bshp');
    if (is_numeric($subBshpFile)) {
        $subBshp = $subBshpFile;
    } else {
        $subBshp = 1;
    }
} else {
    $subBshp = 1;
}
if (file_get_contents($sub.'/fshp')) {
    $subFshpFile = file_get_contents($sub.'/fshp');
    if (is_numeric($subFshpFile)) {
        $subFshp = $subFshpFile;
    } else {
        $subFshp = 1;
    }
} else {
    $subFshp = 1;
}

if (file_get_contents($obj.'/ratio')) {
    $objRatioFile = file_get_contents($obj.'/ratio');
    if (is_numeric($objRatioFile)) {
        $objRatio = $objRatioFile;
    } else {
        $objRatio = 0;
    }
} else {
    $objRatio = 0;
}

if (file_get_contents($obj.'/bshp')) {
    $objBshpFile = file_get_contents($obj.'/bshp');
    if (is_numeric($objBshpFile)) {
        $objBshp = $objBshpFile;
    } else {
        $objBshp = 1;
    }
} else {
    $objBshp = 1;
}
if (file_get_contents($obj.'/fshp')) {
    $objFshpFile = file_get_contents($obj.'/fshp');
    if (is_numeric($objFshpFile)) {
        $objFshp = $objFshpFile;
    } else {
        $objFshp = 1;
    }
} else {
    $objFshp = 1;
}

$subLibido = 10 ** $subFshp;
$objLibido = 10 ** $objFshp;

$subArousal = round($subLibido * ($subRatio / 4));
$objArousal = round($objLibido * ($objRatio / 4));
