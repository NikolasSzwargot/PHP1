<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Zmienne</title>
  </head>
  <body>
    <?php
      $name='Krystyna';
      echo 'Imię: $name<br>';
      echo "Imię: $name<br>";
      echo 'tekst<br>';

      //typy danych
      // boolean
      //zapisuj zmienne bez polskich znaków, w języku angielskim.
      $prawda = true;
      $false = false;

      echo $prawda;
      echo $false, '<br>';

      //integer
      $bin = 0b1010;
      $dec = 10;
      $oct = -10;
      $hex = 0x10;

      echo "$hex<br>";

      //składnia heredoc
      $name="Natalia";
      $text = <<<LABEL
      Imię: $name
      Nazwisko: Fiona
      <hr>
      LABEL;

    echo $text;

    echo <<<L
    Heredoc 2<br>
    Imię: $name<hr>
    L;

    //składnia nowdoc

    $text = <<<'L'
    Imię: $name
    Nazwisko: Fiona
    <hr>
    L;

    echo $text;

    $city = 'Poznań';
    echo "Nazwa zmiennej: \$city wartość: $city";
     ?>
   </body>
  </html>
