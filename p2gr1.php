<html>
<head>
  <meta charset="UTF-8">
</head>
<body>

<?php


/* 2. Wyświetl zawartość utworzonego pliku z zachowaniem układu.
* Sprawdź ilość wszystkich liczb. Porównaj wynik z informacją z poprzedniego polecenia.
* Napisz skrypt, który w przypadku, gdy wartości te się zgadzają, dopisze do pliku tekst "POPRAWNE".  */


$numbersArray = Array(); //tablica do wpisywania liczb z pliku

$fileRead = fopen("plik.txt", "r"); //r - odczyt

while(!feof($fileRead)) { //dopóki nie jest koniec pliku
  $line = trim(fgets($fileRead));

  $numbersArray = explode(" ", $line); //dopisanie liczb do tablicy

  $numbersCount += count($numbersArray); //zliczanie ilości liczb w pliku
}

fclose($fileRead);

$fileAppend = fopen("plik.txt", "a"); //a - dopisanie do pliku

//sprawdzenie, czy wartości się zgadzają
if($numbersCount==$countNumbers) { //porównanie z wartością z polecenia 1
  fputs($fileAppend, " POPRAWNE");
}

fclose($fileAppend);
 ?>

 </body>
 </html>
 
