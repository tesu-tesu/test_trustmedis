<?php


$x = [3, 5, 4, 6, 12, 4, 2, 7, 3 ];
$y = [3, 1, 12, 4, 2, 9, 0, 11, 2 ];


$longest_element = [];
$longest_element_continue = [];

for ($i = 0; $i < count($x); $i++) {
    for ($j = 0; $j < count($y); $j++) {
        if ($x[$i] == $y[$j]) {
            $temp = [];
            array_push($temp, $x[$i]);
            if (count($x) > ($i + 1) && count($y) > ($j + 1)) {
                if ($x[$i + 1] == $y[$j + 1]) {
                    $k = 1;
                    while ($x[$i + $k] == $y[$j + $k]) {
                        array_push($temp, $x[$i + $k]);
                        $k++;
                        if (count($x) <= ($i + $k)) {
                            break;
                        }
                    }
                }
            }
            if (count($longest_element) < count($temp)) {
                $longest_element = $temp;
            }
        }
    }
}

echo ("X = ");
foreach ($x as $x) {
    echo ($x . " ");
}

echo nl2br(" \r\n ");

echo ("Y = ");
foreach ($y as $y) {
    echo ($y . " ");
}

echo nl2br(" \r\n ");
echo nl2br(" \r\n ");

echo nl2br("count same element : " . count($longest_element) . "\r\n");

echo nl2br("same element :\r\n");
foreach ($longest_element as $flag) {
    echo nl2br($flag . "\r\n");
}
