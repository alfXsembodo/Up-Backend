<?php

// $nama = "alfares";

// $pesan = "selamat datang {$nama}";
// $pesan2 = 'selamat datang {$nama}';

// echo $pesan, "<br>", $pesan2;

// $namaDepan = "Silva Tria";
// $namaBelakang = "Alfares";

// $namaLengkap = $namaDepan . " " . $namaBelakang;
// echo $namaLengkap;

// $nama = "Peter";
// $namaLengkap = $nama .= " Parker";
// echo $namaLengkap;

// $i = 5;
// echo "Hasil akhir: " . $i + 3;

// $string = "Silva Tria Alfares anak baik tidak pernah telat, berkuliah di polinema jurusan Teknologi Informasi";
// echo strlen($string);

// echo str_word_count($string);

// echo substr($string, 0, 18);

// echo substr($string, 6, 18);

// echo substr($string, 6);

// echo substr($string, -6);

// echo strtoupper($string);

// echo strrev($string);

// echo strpos($string, "alfa");
// echo strpos($string, "Alfa");
// echo stripos($string, "alfa");

// $judulBerita = "Alfamart lebih murah dari Indomaret";
// echo "Judul Baru: " . str_replace("lebih murah", "lebih mahal", $judulBerita);

// ## coba 10 function

// 1. explode(separator, string, limit)
$string = "A,l,f,a";
var_dump(explode(",", $string));

// 2. implode(separator, array)
$array = ['alfa', 'anak', 'baik!'];
echo implode(" ", $array);

// 3. htmlspecialchars(string)
$string = "<b>makan bang</b>";
echo $string, "<br>", htmlspecialchars($string);

// 4. join(separator, array)
$array = ["alfa", "windi", "winda"];
echo join(" ", $array);

// 5. lcfirst(string)
echo lcfirst("Makan Alfa");

// 6. md5()
$string = "makan makan sampai siang";
echo md5($string);

// 7. currency_format()
// $number = 1000000;
// setlocale(LC_MONETARY, "id-ID");
// echo money_format("Harga bajunya : %i", $number);

// 8. number_format(number, decimals, decimalpoint, separator)
$number = 500000;
echo number_format($number, 0, ".", ".");

// 9. substr_count(string, substring, start, length)
$string = "Michelle pacarnya alfa. Alfa si anak PPLSB. alfa anak PPL paling keren";
echo substr_count($string, "Alfa");

// 10. substr_replace(string, replacement, start, length)
$string = "Bidadari Teknologi Informasi ada banyak, saya bingung";
echo substr_replace($string, "Bidadari Tersyantik", 0, 8);

// 11. trim(string, charlist)
$string = "Senja makan kopi sambil minum burger";
echo trim($string, "Smb");

// 12. ucfirst(string)
$string = "sudahi saja hubungan ini";
echo ucfirst($string);

// 13. wordwrap(string,width,break,cut)
$string = "Tetaplah berjuang untuk sebuah harapan";
echo wordwrap($string, 15, "<br>\n");