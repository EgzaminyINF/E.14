<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Podzespoły komputerowe</title>
    <link rel="stylesheet" href="styl_1.css">
</head>
<body>
    <div id="logo">
        <h1>Sklep komputerowy</h1>
    </div>
    <div id="menu">
        <a href="index.php">Główna</a>
        <a href="procesory.html">Procesory</a>
        <a href="ram.html">RAM</a>
        <a href="grafika.html">Grafika</a>
        <a href="hdd.html">HDD</a>
    </div>
    <div id="glowny">
        <h2>Lista aktualnie dostępnych podzespołów</h2>
        <table>
            <tr>
                <th>NAZWA PODZESPOŁU</th>
                <th>OPIS</th>
                <th>CENA</th>
            </tr>
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "sklep");
                $zapytanie = "SELECT nazwa, opis, cena FROM podzespoly WHERE dostepnosc = 1";
                $wynik = mysqli_query($polaczenie , $zapytanie);
                while($wiersz = mysqli_fetch_array($wynik)){
                    echo "<tr>
                        <td>$wiersz[0]</td>
                        <td>$wiersz[1]</td>
                        <td>$wiersz[2]</td>
                    </tr>";
                }
                mysqli_close($polaczenie);
            ?>
        </table>
    </div>
    <div id="stopka1">
        <h3>Sklep Komputerowy</h3>
        <p>ul. Legnicka 61, Wrocław</p>
        <p>Współpracujemy z hurtownią <a href="http://www.ddata.pl" target="_blank">ddata</a></p>
    </div>
    <div id="stopka2">
        <p>Stronę wykonał: PESEL</p>
    </div>
    <div id="stopka3">
        <p>zadzwoń do nas: 71 506 50 60</p>
    </div>
    <div id="stopka4">
        <img src="sklep.jpg" alt="sklep komputerowy">
    </div>
</body>
</html>