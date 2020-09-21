<?php
// wersja PHP 7.4.9
echo PHP_VERSION;
//echo phpinfo();
// echo phpinfo();
// interpolacja

echo 'a','b'; //wyswietli a wyswietli b
echo 'a'.'b'; // dodaj a i b => wyswietli ab

$pow = 2 ** 10;

echo "<br>$pow<br>";

//operatory bitowe
// and &, or |, xor ^, not ~, <<, >>

$x = 0b1010;
echo "$x<br>";

$x = $x << 2;
echo "$x<br>";
$x = $x >> 3;
echo "$x<br>";

// porównanie <=>
$x = 1;
$y = 1;

echo $x <=> $y, "<br>";

if ($x === $y) {
  echo '$x jest identyczna $y<br>';
}
else {
  echo '$x nie jest identyczna $y<br>';
}

// sprawdz typ

echo gettype($x);
echo gettype($y), '<hr>';

$x = 1;
$x = $x++;

echo $x, '<br>'; // 1
$x=++$x;

echo $x, '<br>'; //2
$y=$x++;
echo $x, '<br>'; // 3
echo $y, '<br>'; // 2

$y =++$x*2-1;
echo $y, '<hr>';

// operatory rzutowania
// bool itp
$test1='1234abc5';
$test2=0;
$test2=10;

echo 'Typ danych $test1: ' ,gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>";
echo 'Typ danych $test1: ' ,gettype($test1);

echo 'Typ danych $test2: ' ,gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2<br>";
echo 'Typ danych $test2: ' ,gettype($test2);

echo 'Typ danych $test3: ' ,gettype($test3);
$test3=(unset)$test3;
echo "<br>$test3<br>";
echo 'Typ danych $test3: ' ,gettype($test3), '<br>';

##############################

//rozmiar typu integer

echo PHP_INT_SIZE,'<br>';

//kontrola typu zmiennych
//is_int(), is_string(), is_float(), is_bool(), is_null()

$x=1;
echo is_int($x),'<br>';
echo is_numeric($x),'<br>';
echo is_string($x),'<br>';
echo is_null($x),'<br>';

$w;
//operator ignorowania bledow @
echo @gettype($w);

?>
