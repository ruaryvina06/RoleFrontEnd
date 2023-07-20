<?php
function sloanes_oeis($n)
{
    $result = '';
    $current_number = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result .= $current_number;

        if ($i < $n) {
            $result .= '-';
        }

        $current_number += $i;
    }

    return $result;
}

// Input yang diberikan bisa berasal dari form, URL parameter, atau input lainnya.
// Untuk contoh ini, kita asumsikan input adalah 7.
$input = 7;
$output = sloanes_oeis($input);
echo "Input: $input\n";
echo "Output: $output\n";
