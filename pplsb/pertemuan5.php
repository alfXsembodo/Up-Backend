<?php

// # STURKTUR KENDALI 

// for
// for( $i = 0; $i < 10; $i++ ) {
//     echo "The number is $i <br>";
// }

// while
// $x = 0;

// while( $x <= 5 ) {
//     echo "The number is $x <br>";
//     $x++;
// }

// foreach
// $age = ["Alfa" => 17, "Bagus" => 30, "Okan" => 50];
// foreach( $age as $x => $val ) {
//     echo "$x = $val<br>";
// }

// continue
// for( $x = 0; $x < 10; $x++ ) {
//     if( $x == 4 ) {
//         continue;
//     }

//     echo "The number is $x <br>";
// }

// ### PRAKTIKUM

// a
// $satu = [
//     [1, 2, 3, 4, 5],
//     [2, 1, 2, 3, 4],
//     [3, 2, 1, 2, 3],
//     [4, 3, 2, 1, 2],
//     [5, 4, 3, 2, 1]
// ];

// $dua = [
//     6, 7, 8, 9, 10
// ];

// D -> looping matrix
$satu = [
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2]
];

$dua = [
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2],
    [2, 2, 2, 2, 2]
];

// for( $i = 0; $i < count($dua); $i++ ) {
//     for( $j = 0; $j < count($dua) + 1; $j++ ) {
//         echo $dua[$i][$j] . " ";
//     }

//     echo "<br>";
// }

// echo (((2 * 2) + (2 * 2) + (2 * 2) + (2 * 2) + (2 * 2)) * 4) * 25;
// echo (2 * 2) + (2 * 2) + (2 * 2) + (2 * 2) + (2 * 2);

// $hasil = 0;

// for( $i = 0; $i < count($dua); $i++ ) {
//     for( $j = 0; $j < count($dua[0]); $j++ ) {
//         // echo $dua[$i][$j];
//     }

//     echo "<br>";
// }

// 1

// for( $i = 0; $i < count($satu); $i++ ) {
//     echo "[ ";
//     for( $j = 0; $j < count($satu); $j++ ) {
//         echo $satu[$i][$j] . " ";
//     }
//     echo " ]<br>";
// }

// echo "<br>   X<br><br>";


// for( $i = 0; $i < count($dua); $i++ ) {
//     echo "[ ";
//     for( $j = 0; $j < count($dua) - 1; $j++ ) {
//         echo $dua[$i][$j] . " ";
//     }
//     echo " ]<br>";
// }

// echo "<br> = <br><br>";

// 2
// $baris1 = 5;
// $kolom1 = 5;

// $baris2 = 5;
// $kolom2 = 4;

// $matrix1 = [];
// $matrix2 = [];

// for( $i = 0; $i < $baris1; $i++ ) {
//     $barisBaru = [];

//     for( $j = 0; $j < $kolom1; $j++ ) {
//         $barisBaru = [2];
//     }

//     $matrix1 += $barisBaru;
//     $barisBaru = [];
// }

// var_dump($matrix1);

// E - pola segitiga

// 1
// for( $i = 0; $i < 5; $i++ ) {
//     for( $j = 0; $j < 5; $j++ ) {
//         if( $i + $j == 5) {
//             break;
//         } else {
//             echo "* ";
//         }
//     }

//     echo "<br>";
// }
// echo "<br>";

// 3
// for( $i = 0; $i < 5; $i++ ) {
//     for( $j = 0; $j < 5; $j++ ) {
//         if( $i == $j ) {
//             break;
//         } else {
//             echo "* ";
//         }
//     }

//     echo "<br>";
// }
// echo "<br>";

echo "# Pola 1 <br><br>";
$pola = 5;
for( $i = 1; $i <= $pola; $i++ ) {
    for( $j = 1; $j <= $i; $j++ ) {
        echo "* ";
    }

    echo "<br>";
}
echo "<br><br><br>";

echo "# Pola 2 <br><br>";
for( $i = 1; $i <= $pola; $i++ ) {
    for( $j = $pola; $j >= $i; $j-- ) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br><br><br>";

echo "# Pola 3 <br><br>";
for( $i = 1; $i <= $pola; $i++ ) {
    for( $j = 1; $j < $i; $j++ ) {
        echo " ";
    }

    for( $k = $pola; $k >= $i; $k-- ) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br><br><br>";

// for( $i = 5; $i > 0; $i-- ) {
//     for( $j = 5; $j > 0; $j-- ) {
//         if( $j == 5  ) {
//             echo $i . " ";
//         } else {
//             echo $j . " ";
//         }
//     }

//     echo "<br>";
// }

// echo "<br>";

// for( $i = 0; $i < 5; $i++ ) {
//     for( $j = 0; $j < 5; $j++ ) {
//         if( $j == 0  ) {
//             echo $i . " ";
//         } else {
//             echo $j . " ";
//         }
//     }

//     echo "<br>";
// }