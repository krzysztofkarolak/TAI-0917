<html>
<head>
  <meta charset="UTF-8">
</head>
<body>

<?php


/* 3. Utwórz plik "dane.txt" według poniższego wzoru.
* Wczytaj plik, a następnie wypisz dane na stronie internetowej przy zachowanym układzie.
* Podaj informację o ilości liczb znajdujących się w ostatnim wierszu oraz o ilości liczb w pliku, które są podzielne przez 2.
*
*
* WZÓR
* 1 3 4 5 6
* 7 6 3 5 2
* 2 6 4
*/

$numbersArray = Array(); //tablica do wpisywania liczb z pliku
$countDivNumbers = 0; //licznik liczb podzielnych przez 2

$fileRead = fopen("dane.txt", "r"); //r - odczyt

while(!feof($fileRead)) {
  $line = fgets($fileRead);

  $lineArray = explode(" ", $line);

  //sprawdzenie, czy liczby z tablicy są podzielne przez 2
  for($i=0;;$i++) {

    if($lineArray[$i]==null) { //sprawdź, czy wartość w tablicy istnieje
      break; //przerwij pętlę for, zakoncz sprawdzanie tablicy
    }

    if($lineArray[$i]%2==0) { //jeśli liczba podzielna przez 2
      $countDivNumbers++; //zwiększ licznik
    }
  }

  print($line . "<br>"); //wypisz wiersz i przejdź do kolejnego

  if(feof($fileRead)) { //jeśli jest to ostatni wiersz
    $lastRowCount = count($lineArray);
    print("<br>Liczb w ostatnim wierszu: " . $lastRowCount);
  }
}

print("<br>Liczb podzielnych przez 2: " . $countDivNumbers);

fclose($fileRead);
 ?>

 </body>
 </html>
