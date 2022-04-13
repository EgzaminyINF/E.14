<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grzybobranie</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="tytulowy">
        <h1>Czas na grzyby!</h1>
    </div>
    <div id="miniatura">
        <a href="podgrzybek.jpg"><img src="podgrzybek-miniatura.jpg" alt="Grzybobranie"></a>
    </div>
    <div id="lewy">
        <h3>Grzyby jadalne</h3>
        <?php
            //skrypt 1
            $polaczenie = mysqli_connect('localhost', 'root', '', 'grzybobranie');
            $zapytanie1 = "SELECT id, nazwa, potoczna FROM grzyby WHERE jadalny = 1";
            $wynik1 = mysqli_query($polaczenie, $zapytanie1);
            while($wiersz1 = mysqli_fetch_array($wynik1)){
                echo "<p>$wiersz1[0]. $wiersz1[1] ($wiersz1[2])</p>";
            }
        ?>
        <h3>Polecamy do zup</h3>
        <ul>
            <?php
                //skrypt 2
                $zapytanie2 = "SELECT grzyby.potoczna, rodzina.nazwa FROM grzyby, rodzina, potrawy WHERE rodzina.id=grzyby.rodzina_id and grzyby.potrawy_id=potrawy.id AND potrawy.nazwa like 'zupa'";
                $wynik2 = mysqli_query($polaczenie, $zapytanie2);
                while($wiersz2 = mysqli_fetch_array($wynik2)){
                    echo "<li>$wiersz2[0], rodzina: $wiersz2[1]</li>";
                }
                
            ?>
        </ul>
    </div>
    <div id="prawy">
        <?php
            //skrypt 3
            $zapytanie3 = "SELECT nazwa, nazwa_pliku FROM grzyby";
            $wynik3 = mysqli_query($polaczenie, $zapytanie3);
            while($wiersz3 = mysqli_fetch_array($wynik3)){
                echo "<img src='$wiersz3[1]' title='$wiersz3[0]'>";
            }        
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        <p>Autor: PESEL</p>
    </div>
</body>
</html>