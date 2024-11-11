<?php

$element = array(20,60,95,50,65,78,63,71,45,10,100);

$search = 60;

$found = 0;
for ($i = 0; $i < count($element); $i++) {
    if ($element[$i] == $search) {
        $found = 1;
        break;
    }
}

if ($found) {
    echo "Element found ";
} else {
    echo "Element not found ";
}
?>