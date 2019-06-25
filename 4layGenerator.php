<?php
function alayGenerator($text){
    $text = strtolower($text);
    $datasheet = [
        "a" => ['4', '@', '@'],
        "b" => ['B', 'b', 'B'],
        "c" => ['C', 'c', 'C'],
        "d" => ['D', 'd', 'D'],
        "e" => ['3', '3', 'E'],
        "f" => ['F', 'f', 'F'],
        "g" => ['9', '9', 'G'],
        "h" => ['H', 'h', 'H'],
        "i" => ['1', 'I', '1'],
        "j" => ['J', 'j', 'J'],
        "k" => ['K', 'k', 'K'],
        "l" => ['L', 'l', 'L'],
        "m" => ['M', 'm', 'M'],
        "n" => ['N', 'n', 'N'],
        "o" => ['O', "0", 'o'],
        "p" => ['P', 'p', "P"],
        "q" => ['Q', 'q', "Q"],
        "r" => ['R', 'r', 'R'],
        "s" => ['5', '5', '$'],
        "t" => ['T', 't', 'T'],
        "u" => ['U', 'u', 'U'],
        "v" => ['V', 'v', 'V'],
        "w" => ['w', 'W', 'w'],
        "x" => ['x', 'X', 'X'],
        "y" => ['y', 'Y', 'y'],
        "z" => ['z', 'Z', 'z']
    ];
    $alpabet = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $start = 0;
    $total = 25;
    $now = "";
    $result = "";
    $storage = $text;
    for($start=0; $start<=$total; $start++){
        $rand = randomize();
        $now = $alpabet[$start];
        $result = preg_replace("/".$now."/", $datasheet[$now][$rand], $storage);
        $storage = $result;
    }
    return $storage;
}

function randomize(){
    return mt_rand(0, 2);
}