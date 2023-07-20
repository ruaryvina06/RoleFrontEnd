# RoleFrontEnd
Test Internship
Waktu Kompleksitas (Time Complexity):
Proses perulangan dalam fungsi isBalancedBracket melalui setiap karakter dalam string input memerlukan waktu O(n), di mana n adalah panjang string input. Ini karena kita harus memeriksa setiap karakter dalam string untuk menentukan apakah itu adalah tanda buka atau tanda tutup.
Selain itu, operasi array_push dan array_pop pada stack memiliki kompleksitas karena mereka melakukan operasi di ujung stack yang konstan.

Ruang Kompleksitas (Space Complexity):
Dalam fungsi isBalancedBracket, kita menggunakan stack untuk menyimpan tanda buka yang belum ditutup. Jumlah elemen dalam stack maksimal sama dengan jumlah tanda buka yang belum ditutup dalam string.
Dalam kasus terburuk, jika semua tanda buka belum ditutup (misalnya: "((((((..."))), maka stack dapat mencapai panjang maksimal n (panjang string input).
