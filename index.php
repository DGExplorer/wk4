<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

echo "<br>"#2"<br>";
$date = str_replace('-', '/', $date);
echo $date; .  "is the new formated date.<br>";

echo "<br>"#3"<br>";
$result = strnatcasecmp($date, $tar);
if ($result > 0) {
	echo "the future"<br>";
}	elseif ($result < 0) {
	echo "the past"<br>";
}	elseif ($result = 0) {
	echo "Ooops."<br>";
}


?>