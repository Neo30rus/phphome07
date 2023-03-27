<?php

$arr = [

    [

        'name' => 'Стул 1',

        'price' => 20,

        'category' => 1,

    ],

    [

        'name' => 'Стул 2',

        'price' => 210,

        'category' => 2,

    ],

    [

        'name' => 'Стул 3',

        'price' => 15,

        'category' => 2,

    ],

];
usort($arr, function ($a, $b){
    return $a['price'] <=> $b['price'];
});
var_dump($arr);
?>
