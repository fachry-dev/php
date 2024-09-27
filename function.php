<?php

// function sayHello()
// {
//     echo "Hello";
//     echo "World\n";
// }

// function sayName($nama)
// {
//     echo "my name is ($nama)\n";
// }

// sayName("FACHRY");
// sayName("Rizky");
// sayName("Wardana");

// function sayNameAndAge($nama, $umur =16)
// {
//     echo "my name is {$nama}\n";
//     echo "and my age is {$umur}";
// }

// sayNameAndAge("Bryan");

// function perhitungan (...$angka) //rest parameter
// {
//     $result = 0;
//     foreach($angka as $r){
//         $result *= $r; 
//     }
//     echo $result;
// }
// perhitungan(4, 5, 6, 7, 8);

function sum(int $a, int $b)
{
    var_dump($a, $b);
    $result = $a + $b;
    echo $result;
}