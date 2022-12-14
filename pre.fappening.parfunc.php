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
$subArousal = 10 ** $subRatio;

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
$objArousal = 10 ** $objRatio;
