<?php
echo "Normal array<br>";
$value = array("Rajan","Kunwar","Ram");
echo $value[0].",".$value[1].",".$value[2]."<br>";

echo "<br>Array pop<br>";
array_pop($value);
print_r($value);
echo "<br>";

echo "<br>array push<br>";
array_push($value,"ERajan","kUNWAR");
foreach ($value as $key) {
	echo $key."<br>";
}
echo "<br>array merge<br>";
$car=["Rolls","Jaguar"];
$model=[05,24];
print_r(array_merge($Rolls,$Jaguar));
echo "<br>array sum<br>";
$n1=array(24,25,31);
$n2=array_sum($n1);
echo $n2;
echo "<br>array slice<br>";

$name=array("Rajan","Kunwar","ASphalt","Harry");
print_r(array_slice($name, 3));

echo "<h1>string function</h1>";
echo "The substr of the string is:".substr("Rajan",1);
echo "<br>";
echo "The length of the string is:".strlen("Student");
echo "<br>";
echo "The replace form of the string is:".str_replace
("average student","collage student","Junior student");
echo "<br>";
$name="Rajan";
echo trim($name,"Nickname");
echo "<br>";
echo strpos("hello there,how are you there","thank you");
echo "<br>";
echo strtolower("Something fun");
echo "<br>";
echo strtoupper("Doing assignments");
?>