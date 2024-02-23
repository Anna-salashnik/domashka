<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Салашник </title>
</head>
<body>

<?php
$a=5;
$b=12;
$c=7.5;
$d=true;
$f=false;
$stroka1='привет';
$stroka2='мир';
$stroka3='Салашник';

echo "a=$a <br>";
echo "b=$b <br>";
echo "c=$c <br>";
echo "d=$d <br>";
echo "f=$f <br>";
echo "stroka1=$stroka1 <br>";
echo "stroka2=$stroka2 <br>";
echo "stroka3=$stroka3 <br> <br>";

$summa=$a+$b+$c;
$raznost=$b-$c;
$proizvedenie=$a*$b*$c;
$chactnoe=$b/$a;
$delenie=$b%$a;

echo "summa=$summa <br>";
echo "raznost=$raznost<br>";
echo "proizvedenie=$proizvedenie <br>";
echo "chactnoe=$chactnoe <br>";
echo "delenie=$delenie <br>";

$konkatenchia=$stroka1 . $stroka2 . $stroka3;
echo "konkatenchia=$konkatenchia <br>";

?>
<hr>

<p> Сегодняшняя дата: </p> 
<?php
echo date ('l, F jS Y.');
echo "<hr>";

echo date ('l, d M Y.');
echo "<hr>";

echo date ('D, j/m/Y.');
echo "<hr>";

echo date ('D, j.m.Y.');
echo "<hr>";

echo date ('D, j F Y.');
echo "<hr>";

echo date ('l, F jS G:i.');
echo "<hr>";


?>


</body>