<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwierzęta</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div id="logo">
        <h1>KRĘGOWCE</h1>
    </div>
    <div id="menu">
        <a href="ryby.html">RYBY</a>
        <a href="ptaki.html">PTAKI</a>
        <a href="ssaki.html">SSAKI</a>
    </div>
    <div id="lewy">
        <h2>SSAKI</h2>
        <ul>
            <?php
                $polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
                $zapytanie1 = "SELECT gatunek, obraz FROM zwierzeta WHERE Gromady_id = 5";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while($wiersz1 = mysqli_fetch_array($wynik1)){
                    echo "<li><a href='$wiersz1[1]'>$wiersz1[0]</a></li>";
                }
            ?>
        </ul>
        <img src="wilk.jpg" alt="Wilk szary, gromada ssaki">
    </div>
    <div id="prawy">
        <?php
            //skrypt 2
            $zapytanie2 = "SELECT gatunek, wystepowanie, czy_zagrozony FROM zwierzeta WHERE Gromady_id IN (1,4,5)";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz2 = mysqli_fetch_array($wynik2)){
                echo "<p>$wiersz2[0]</p>";
                echo "<p>Występowanie: $wiersz2[1],";
                if($wiersz2[2]==1)
                    echo " gatunek nie jest zagrożony</p>";
                else
                    echo " gatunek  jest zagrożony</p>";
                echo "<hr>";
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        Stronę o zwierzętach przygotował: PESEL
    </div>
</body>
</html>