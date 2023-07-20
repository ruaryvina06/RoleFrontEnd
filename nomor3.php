<?php
function isBalancedBracket($string)
{
    $stack = [];
    $bracketPairs = ['(' => ')', '[' => ']', '{' => '}'];

    foreach (str_split($string) as $char) {
        if (array_key_exists($char, $bracketPairs)) {
            // Tanda buka, masukkan ke dalam stack
            array_push($stack, $char);
        } else {
            // Tanda tutup
            if (empty($stack) || $bracketPairs[array_pop($stack)] !== $char) {
                // Jika stack kosong atau tidak sesuai tanda tutupnya, maka string tidak seimbang
                return "NO";
            }
        }
    }

    // Jika stack masih ada elemen, berarti ada tanda kurung yang belum ditutup
    return (empty($stack)) ? "YES" : "NO";
}

// Contoh penggunaan fungsi dengan sampel input
$input1 = "{[()]}";
$input2 = "{[(])}";
$input3 = "{{[()]}[]}";

echo isBalancedBracket($input1) . PHP_EOL; // Output: YES
echo isBalancedBracket($input2) . PHP_EOL; // Output: NO
echo isBalancedBracket($input3) . PHP_EOL; // Output: YES
