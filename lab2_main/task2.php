<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab</title>
</head>
<body>

<h2>Task2.1</h2>
<?php
    function search_duplicates($array){

        $duplicates = [];
        $duplicates  = array_filter(array_count_values($array), function($count){
            return $count>1;
        });
        echo  "Числа які повторюються : ".implode(',',array_keys($duplicates));
    }

    $arr = array(1, 2, 3, 4, 2, 5, 6, 1, 7, 3, 9, 7, 1);
    search_duplicates($arr);

?>    
<h2>Task2.2</h2>
<?php

    function generate_animal_name($parts) {

        $name = '';
        $name_parts  = rand(2,count($parts) - 1);
        shuffle($parts);
        
        for($i = 0; $i<$name_parts;$i++){
            $name .= $parts[$i];
        }

        echo "Ім'я вашої тварини : ".$name;

    }

    $arr = array('Мо','Ка','Со','Ку','Ра','Пу');
    $cat_name = generate_animal_name($arr);

?>

<h2>Task2.3</h2>
<?php

function createArray() {
        
    $size = rand(3,7);
    $arr = [];

    for($i = 0; $i <= $size; $i++){
        $arr[$i] = rand(10,20);
    }
    return $arr;
}

function mergeAndSortArrays($array1, $array2) {
   
    $uniqueArray = array_unique(array_merge($array1, $array2));
    sort($uniqueArray);

    return $uniqueArray;
}

$array1 = createArray();
$array2 = createArray();
$resultArray = mergeAndSortArrays($array1, $array2);

for ($i = 0; $i < count($resultArray); $i++) {
    echo $resultArray[$i] . " ";
}

?>
<h2>Task.2.4</h2>
<?php

$userAgeArray = [
    'Name1' => 15,
    'Name2' => 32,
    'Name3' => 54,
    'Name4' => 12,
];

$consts = ['name', 'age'];

function sortHashMap($hash_arr, $sortBy)
{
    global $consts;

    if ($sortBy == $consts[0]) {
        asort($hash_arr);
    } elseif ($sortBy == $consts[1]) {
        ksort($hash_arr);
    } else {
        echo 'Something is going wrong';
    }

    return $hash_arr;
}

$sortedArr = sortHashMap($userAgeArray, $consts[1]);
print_r($sortedArr);
?>


</body>
</html>