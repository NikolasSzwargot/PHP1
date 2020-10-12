  
<?php
  $text = <<<T
    zsk - Zespół
    Szkół
    Komunikacji<br>
  T;

  echo $text;
  echo nl2br($text);

  $name = "JanUSz";

  echo strtolower($name);
  echo '<br>';
  echo strtoupper($name);

  $name = "jaNUSz koWalskI";
  echo '<br>';
  echo ucfirst($name);

  echo '<br>';
  echo ucwords($name);

  $name = <<<T
  janusz
  T;
  echo '<br>';
  echo ucfirst($name);

  $lorem = <<<LOREM
  Lorem ipsum dolor sit amet, consectetur
  adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  Excepteur sint occaecat cupidatat non proident,
  sunt in culpa qui officia deserunt mollit anim id est laborum.
LOREM;
echo '<br>';
echo $lorem;
echo wordwrap($lorem, 40, '<br>');

$allstar = <<<SHRECK
Somebody once told me, the world is gonna roll me I ain't the sharpest tool in the shed She was looking kind of dumb with her finger and her thumb In the shape, of an "L" on her forehead Well, the years start coming and they don't stop coming Fed to the rules and I hit the ground running Didn't make sense not to live for fun Your brain gets smart but your head gets dumb So much to do, so much to see So what's wrong with taking the backstreets? You'll never know if you don't go You'll never shine if you don't glow Hey now, you're an All Star, get your game on, go play Hey now, you're a rock star get the show on, get paid All that glitters is gold Only shooting stars break the mold It's a cool place, and they say it gets colder You're bundled up now but wait 'til you get older But the media men beg to differ Judging by the hole in the satellite picture The ice we skate, is getting pretty thin The waters getting warm so you might as well swim My world's on fire, how about yours That's the way I like it and I never get bored Hey now, you're an All Star, get your game on, go play Hey now, you're a rock star, get the show on, get paid All that glitters is gold Only shooting stars break the mold Hey now, you're an All Star, get your game on, go play Hey now, you're a rock star, get the show on, get paid And all that glitters is gold Only shooting stars Somebody once asked Could I spare some change for gas? "I need to get myself away from this place" I said, "Yep, what a concept I could use a little fuel myself And we could all use a little change" Well, the years start coming and they don't stop coming Fed to the rules and I hit the ground running Didn't make sense not to live for fun Your brain gets smart but your head gets dumb So much to do, so much to see So what's wrong with taking the backstreets? You'll never know if you don't go (go) You'll never shine if you don't glow Hey now, you're an All Star, get your game on, go play Hey now, you're a rock star, get the show on, get paid And all that glitters is gold Only shooting stars break the mold And all that glitters is gold Only shooting stars break the mold
SHRECK;

echo '<br>';
echo $allstar;
echo wordwrap($allstar, 40, '<hr>');

ob_clean();

//usuwanie białyh znaków
$name = "Łukasz";
$name1 = "  Łukasz ";

echo strlen($name);
echo mb_strlen($name);

echo mb_strlen($name1);
echo mb_strlen(ltrim($name1));
echo mb_strlen(rtrim($name1));
echo mb_strlen(trim($name1));

//przeszukiwanie ciagów znaków
$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = strstr($address, 'tel');
echo $search, '<br>';

$address = "Poznań, ul. Polna 7, tel. (61) 123-45-67";
$search = stristr($address, 'Tel');
echo $search, '<br>';

//substr
$name = "Janusz";
echo substr($name, 3); //usz
echo substr($name, 3, 2); //us

echo substr(strstr('zsk@gmail.com','@'), 1); //gmail.com

//przetwarzanie ciagów znaków
$replace = str_replace("%imię%", "Janusz", "Masz na imię: %imię%");

$login = "bączek";
$censure = array('ą','ę','ś','ć','ż','ź','ć','ł','ń');
$replace = array('a','e','s','c','z','z','c','l','n');

$correctLogin = str_replace($censure, $replace, $login);

echo <<<LOGIN
  Login: $login<br>
  Login po zamianie: $correctLogin<br>
LOGIN;
 ?>