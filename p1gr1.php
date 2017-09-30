<html>
<head>
  <meta charset="UTF-8">
</head>
<body>

<?php


/* 1. Napisz skrypt, ktory losuje do pliku liczby az do wylosowania wartosci STOP po M liczb w każdym wierszu.
* Losowane liczby muszą być podzielnymi przez K. STOP, M i K to stałe.
* Podaj informację o ilości liczb wpisanych w pliku. */

//definicja stałych
define("M", 5);
define("K", 2);
define("STOP", 10);

//definicja zmiennych
$minRand = 1; $maxRand = 100;
$mCurrentNumber = 0; //zmienna pomocnicza służąca do sprawdzania ilości liczb w wierszu
$countNumbers = 0; //licznik ilości liczb wpisanych do pliku

$file = fopen("plik.txt", "w"); //w - zapis

if(STOP%K!=0) {
  print("STOP musi być podzielne przez K!");
  exit();
}

else {

  do {

    do {

      $num = rand($minRand, $maxRand); //losowanie liczby

    } while($num%K!=0); //zatrzymaj, jeśli liczba podzielna przez K

    $mCurrentNumber++; //dodaj liczbę do licznika

    if($mCurrentNumber==M) { //sprawdź, czy wiersz jest już zapełniony
      fputs($file, $num . "\r\n"); //dopisz do pliku ostatnią liczbę i przejdź do kolejnego wiersza
      $mCurrentNumber = 0; //licz od początku
    }
    else { //wiesz nie jest pełny - dopisanie liczby w aktualnym wierszu
      fputs($file, $num . " "); //dopisz do pliku liczbę i odstęp
    }

    $countNumbers++; //zwiększ licznik wszystkich liczb

  } while($num!=STOP); //zatrzymaj po wylosowaniu STOP

}

print("Liczb w pliku: " . $countNumbers);


fclose($file);

 ?>

 </body>
 </html>
