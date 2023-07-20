<?php
function dense_ranking($scores, $gits_scores)
{
    // Menghapus nilai duplikat dari daftar skor
    $unique_scores = array_values(array_unique($scores));

    $ranking = array();

    // Menghitung peringkat berdasarkan daftar skor unik
    for ($i = 0; $i < count($unique_scores); $i++) {
        $ranking[$unique_scores[$i]] = $i + 1;
    }

    // Menghitung peringkat GITS dalam setiap permainan
    $gits_ranking = array();
    foreach ($gits_scores as $score) {
        // Jika skor GITS tidak ada dalam daftar skor unik, berarti peringkatnya setelah yang terakhir
        if (!in_array($score, $unique_scores)) {
            $gits_ranking[] = count($unique_scores) + 1;
        } else {
            $gits_ranking[] = $ranking[$score];
        }
    }

    return $gits_ranking;
}

// Contoh penggunaan fungsi dengan sampel input
$scores = array(100, 100, 50, 40, 40, 20, 10);
$gits_scores = array(5, 25, 50, 120);

$result = dense_ranking($scores, $gits_scores);

// Menampilkan hasil output
foreach ($result as $ranking) {
    echo $ranking . " ";
}
