---
aliases: 
cssclasses: 
tags:
  - ToDo/Submit
  - ToDo/Finish
  - 3aAPC/ITL12
date: 2024-11-21
deadline: 2024-11-26
hideFromQuery: false
link:
  - https://www.eduvidual.at/mod/assign/view.php?id=6816064
info:
---

# Primzahlenberechnung
---
- Autor: Ingo Schlapschy
- Schuljahr: 2024/25
- Lehrgang: 2
- Klasse: 3aAPC
- Gruppe: C
- Fach: ITL12
- Datum: 2024-11-21

---
## Angabe
Aufgabenstellung
1. Primzahlenberechnung:
	- Auf einer HTML Seite sind alle Primzahlen von 1 bis zur eingegeben Zahl auszugeben.
	- Tipp: Jede Zahl durch alle Zahlen von 2 bis n/2 dividieren
2. Logarithmus:
	- Ausgabe der Logarithmischen Funktion:
	- Berechne den Log(n) für alle Zahlen von 1 bis 100
	- ~~Gib jeweils Sterne in einer Zeile für jedes Ergebnis aus.~~  

---
### ToDo
- [x] PHP Projekt erstellen
	- [x] eingabe.html
	- [x] ausgabe.php
- [x] Primzahlen
	- [x] Eingabe einer Zahl n
	- [ ] Berechnung der Primzahlen < n
	- [ ] Ausgabe der Primzahlen
- [x] Logarithmus
	- [x] Ausgabe Log(n=1 ->100)
- [ ] Abgeben
## Lösung
### Primzahlen
#### Im Browser
![](attachment/6e4e73d7c3c5a4283995ab6dbdec9d8a.png)
![](attachment/4ea16be40f197c66b94cb2e3d69aca25.png)
#### index.html
```html
<!DOCTYPE html>
<html>
    <head>
        <title>Die Primzahlen bis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="ausgabe.php" method="post">
            <label>Zahl: <input type="number" name="myNumber"></label>
            <button>Senden</button>
        </form>
    </body>
</html>

```

#### ausgabe.php
```php
<?php

$myNumber = $_POST["myNumber"];
$Primzahlen = "";
if ($myNumber < "2") {
    echo "bitte Zahl >= 2 eingeben";
    
} else {
    $i = 2;
    while ($i<=$myNumber){
        $sqrt_i = sqrt($i);
        $isPrime = 1;
        $j = 2;
        while (($j <= $sqrt_i) AND ($isPrime == 1)){
            if(($i%$j)==0){
                $isPrime = 0;
            }
            $j++;
        }
        if ($isPrime == 1){
            $Primzahlen.=$i.", ";
            echo $i." ... Prim".nl2br("\n");
        } else {
            echo $i.nl2br("\n");
        }
        $i++;
    }
echo nl2br("\n\nDie Primzahlen bis ")
    .$myNumber." sind: ".nl2br("\n")
    .rtrim($Primzahlen,", ");
}

```

### Logarithmus
#### im Browser
![](attachment/e277b82a4d4f2eec7aa8f18e816616de.png)
![](attachment/656c411d5f47c23a232da0f7d028be8c.png)
#### index.html
```html
<!DOCTYPE html>
<html>
    <head>
        <title>Die Primzahlen bis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="prim.php" method="post">
            <label>Primzahlen bis: <input type="number" name="myNumber"></label>
            <button>Senden</button>
        </form>
        <br/>
        <form action="logarithmus.php" method="post">
            <button>Logarithmus bis 100</button>
        </form>
    </body>
</html>


```
#### logarithmus.php
```php
<?php

$myNumber = 100;

$i=1;
while ($i<=$myNumber) {
    echo "log(".$i.") = ".log($i);
    echo $i.nl2br("\n");
    $i++;
}
```
