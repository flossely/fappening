<?php

function compareModes($s, $o) {
    return abs($s - $o);
}

if (file_get_contents($sub.'/arousal')) {
    $subArousalFile = file_get_contents($sub.'/arousal');
    if (is_numeric($subArousalFile)) {
        $subArousal = $subArousalFile;
    } else {
        $subArousal = 1;
    }
} else {
    $subArousal = 1;
}
if (file_get_contents($obj.'/arousal')) {
    $objArousalFile = file_get_contents($obj.'/arousal');
    if (is_numeric($objArousalFile)) {
        $objArousal = $objArousalFile;
    } else {
        $objArousal = 1;
    }
} else {
    $objArousal = 1;
}

$coeffe = compareModes($subMode, $objMode);
