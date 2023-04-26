<?php
$myDB = ['hassan', 'ali', 'amir', 'mehdi', 'mehrad'];
$name = $_GET['name'];
if (strlen($name) > 0) {
    $match = '';
    for ($i = 0; $i < count($myDB); $i++) {
        if (strtolower($name) == strtolower(substr($myDB[$i], 0, strlen($name)))) {
            if ($match == '') {
                $match = $myDB[$i];

            } else {
                $match = $match . ',' . $myDB[$i];
            }
        }
    }
}
echo ($match == '') ? 'no match' : $match;
?>