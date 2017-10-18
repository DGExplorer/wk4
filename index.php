<?php
ini_set('display_errors','On');
error_reporting(E_ALL);

$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);


echo "<br>#2<br>";
$date = str_replace('-', '/', $date);
echo $date . " is the new formatted date.<br>";

echo "<br>#3<br>";
$result = strnatcasecmp($date, $tar);
if ($result > "0") {
    echo "The future<br>";
}    elseif ($result < "0") {
    echo "The past<br>";
}    elseif ($result = "0") {
    echo "Ooops.<br>";
}

echo "<br>#4<br>";
$lastPos = 0;
$positions = array();
while (($lastPos = strpos($date, "-", $lastPos))!== false) {
    $positions[] = $lastPos;
    $lastPos = $lastPos + strlen("-");
}
foreach ($positions as $value) {
    echo "position: " . $value ."<br>";
    $dateOriginal[$value] = " ";
}

echo "<br>#5<br>";
$dateLength = array();
$dateLength = (explode(" ",$dateOriginal));
echo count($dateLength) . " words in \$date string<br/>";

echo "<br>#6<br>";
$length = strlen($date);
echo "Length of \$date string: " . $length . "<br>";

echo "<br>#7<br>";
echo "ASCII of 1st character in \$date: " . ord($date[0]) . "<br>";

echo "<br>#8<br>";
$part = substr($date, 8, 2);
echo "The last two characters in \$date are: " . $part . "<br>";

echo "<br>#9<br>";
$dateNewArr = array();
$dateNewArr = explode('/', $date);
foreach ($dateNewArr as $i) 
    echo $i . " ";

echo "<br>";




?>