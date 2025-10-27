<?php
// 1
$name = "Max";
$age = 47;
$height = 1.82;
echo $name . " " . $age . " " . $height;

// 2
$firstName = "Maximilian Karl";
$lastName = "Kochaniewicz";
$fullName = $firstName . " " . $lastName;
echo $fullName;

// 3
$x = 3.14;
echo gettype($x);

// 4
$number = "42";
$number = (int)$number;
$result = $number + 8;
echo $result;

// 5
$colors = ["červená", "zelená", "modrá"];
echo $colors[1];

// 6
$score = 75;
if ($score > 90) {
    echo "Výborně";
} elseif ($score >= 60 && $score <= 89) {
    echo "Dobře";
} else {
    echo "Zkus to znovu";
}

// 7
$x = 13;
if ($x % 2 == 0) {
    echo "Sudé číslo";
} else {
    echo "Liché číslo";
}

// 8
$name = "Adam";
if (str_starts_with($name, "A")) {
    echo "Začíná na A";
} else {
    echo "Nezačíná na A";
}

// 9
$loggedIn = false;
$status = $loggedIn ? "Přihlášen" : "Odhlášen";
echo $status;

// 10
$items = [];
if (empty($items)) {
    echo "Žádné položky";
} else {
    echo "Máme " . count($items) . " položek";
}

// 11
function greet($name) {
    return "Hello, $name!";
}
echo greet("Eva");

// 12
function add($a, $b) {
return $a + $b;
}
echo add(3, 4);

// 13
function isEven($num) {
    return $num % 2 === 0;
}
var_dump(isEven(6));

// 14
function average($numbers) {
    if (count($numbers) === 0) return 0;
    return array_sum($numbers) / count($numbers);
}
echo average([2, 4, 6]);

// 15
function countVowels($string) {
$string = mb_strtolower($string, 'UTF-8');
$vowels = ['a','e','i','o','u','á','é','í','ó','ú','y','ý','ě','ů'];
$count = 0;
foreach (mb_str_split($string) as $ch) {
    if (in_array($ch, $vowels, true)) $count++;
}
return $count;
}
echo countVowels("Anežka");

// 16
$text = "ahoj";
echo strrev($text);

// 17
$word = "php";
$word = ucfirst($word);
echo $word;

// 18
$sentence = "Banana a ananas.";
echo substr_count(mb_strtolower($sentence, 'UTF-8'), "a");

// 19
$sentence = "I'm learning Laravel and PHP.";
if (str_contains($sentence, "Laravel")) {
    echo "Contains";
} else {
    echo "Does not contain";
}

// 20
$sentence = "Hele, to je skvěle";
echo str_replace("e", "3", $sentence);

// 21
$numbers = [1, 2, 3, 4, 5];
$doubles = array_map(fn($n) => $n * 2, $numbers);
print_r($doubles);

// 22
$names = ['Eva', 'Jan', 'Eva', 'Petr'];
$unique = array_values(array_unique($names));
print_r($unique);

// 23
$a = [1, 2];
$b = [3, 4];
$both = array_merge($a, $b);
print_r($both);

// 24
$names = ['Eva','Jan','Petr'];
echo in_array('Jan', $names, true) ? "Ano" : "Ne";

// 25
$numbers = [9, 2, 5, 1, 7];
sort($numbers);
print_r($numbers);

// 26
function findLongestWord($words) {
    $longest = "";

    foreach ($words as $word) {

        if (strlen($word) > strlen($longest)) {
            $longest = $word;
        }
    }

    return $longest;
}

$words = ["pes", "kočka", "motýl", "slunce"];
echo findLongestWord($words);

// 27
function sumEvenNumbers($numbers) {
    $even = array_filter($numbers, fn($n) => $n % 2 === 0);
    return array_sum($even);
}
echo sumEvenNumbers([1,2,3,4,5,6]);

// 28
function reverseWords($sentence) {

    $words = explode(" ", $sentence);

    $reversed = array_reverse($words);

    return implode(" ", $reversed);
}

echo reverseWords("Ahoj, jak se máš");

// 29
function hasDuplicates($array) {

    $unique = array_unique($array);


    return count($array) != count($unique);
}

$test1 = [1, 2, 3, 2];
$test2 = [1, 2, 3, 4];

echo hasDuplicates($test1) ? "Má duplikáty" : "Nemá duplikáty";

// 30
function uniqueLetters($string) {

    $string = strtolower($string);

    $letters = str_split($string);

    $letters = array_filter($letters, function($char) {
        return $char != ' ';
    });

    $unique = array_unique($letters);

    return array_values($unique);
}

print_r(uniqueLetters("Ahoj ahoj"));











