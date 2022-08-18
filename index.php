<?php

// Topic:

// count
// sizeof
// array_count_values

// =============== count
// $array = ['blue', 'green', 'orange', 'black', 'red'];
// echo count($array); // 5

// $array = [
//     'color' => ['blue', 'green', 'orange', 'black', 'red'],
//     'fruit' => ['apple', 'mango', 'graph', 'orange', 'banana'],
// ];
// echo count($array); // 2

// $array = [
//     'color' => ['blue', 'green', 'orange', 'black', 'red'],
//     'fruit' => ['apple', 'mango', 'graph', 'orange', 'banana'],
// ];
// echo count($array, 1); // 12

// ================ sizeof
// $array = [
//     'color' => ['blue', 'green', 'orange', 'black', 'red'],
//     'fruit' => ['apple', 'mango', 'graph', 'orange', 'banana'],
// ];
// echo sizeof($array, 1); // 12


// =========== array_count_values
// $array = ['blue', 'green', 'orange', 'black', 'black', 'red'];
// dd(array_count_values($array)); blue => 1, green => 1, orange => 1, black => 2, red => 1

function dd(array $array) {
    echo  "<pre>";
    print_r($array);
    exit;
}

// $array = [
//     'color' => ['blue', 'green', 'orange', 'black', 'red'],
//     'fruit' => ['apple', 'mango', 'graph', 'orange', 'orange', 'banana'],
// ];
// dd(array_count_values($array)); // empty []

?>