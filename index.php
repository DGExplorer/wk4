<?php

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

// Begin programming excercises 
echo "<br>";

// dont want to overwrite original vars
$dateOriginal = $date; 

// #2
echo "<br>#2<br>";
$date = str_replace('-', '/', $date);
echo $date . " is the new formatted date.<br>";

// #3
echo "<br>#3<br>";
if ($date > $tar) echo "The Future <br>";
elseif ($date < $tar) echo "The Past <br>";
else echo "Oops <br>";

// #4
echo "<br>#4<br>";
$lastPos = 0;
$positions = array();
while (($lastPos = strpos($dateOriginal, "-", $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen("-");
}
foreach ($positions as $value) {
    echo "position: " . $value ."<br>";
    $dateOriginal[$value] = " ";
}

// #5
echo "<br>#5<br>";
$dateLength = array();
$dateLength = (explode(" ",$dateOriginal));
echo count($dateLength) . " words in \$date string<br/>";


}

?>