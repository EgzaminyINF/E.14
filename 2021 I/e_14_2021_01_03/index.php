<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dane o zwierzętach</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div id="baner">
        <h1>ATLAS ZWIERZĄT</h1>
    </div>
    <div id="formularz">
        <h2>Gromady:</h2>
        <ol>
            <li>Ryby</li>
            <li>Płazy</li>
            <li>Gady</li>
            <li>Ptaki</li>
            <li>Ssaki</li>
        </ol>
        <form action="index.php" method="post">
            Wybierz gromadę: 
            <input type="number" name="id" >
            <input type="submit" value="Wyświetl">
        </form>
    </div>
    <div id="lewy">
        <img src="zwierzeta.jpg" alt="dzikie zwierzęta">
    </div>
    <div id="srodkowy">
        <?php
            //skrypt 1
            $polaczenie = mysqli_connect('localhost', 'root', '', 'baza');
            if(isset($_POST['id'])){
                $id = $_POST['id'];
                if($id==1)
                    echo "<h2>RYBY</h2>";
                else if($id==2)
                    echo "<h2>PŁAZY</h2>";
                else if($id==3)
                    echo "<h2>GADY</h2>";
                else if($id==4)
                    echo "<h2>PTAKI</h2>";
                else if($id==5)
                    echo "<h2>SSAKI</h2>";
                $zapytanie1 = "SELECT gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id = $id";
                $wynik1 = mysqli_query($polaczenie, $zapytanie1);
                while($wiersz1 = mysqli_fetch_array($wynik1)){
                    echo "$wiersz1[0], $wiersz1[1]<br>";        
                }
            }
        ?>
    </div>
    <div id="prawy">
        <h2>Wszystkie zwierzęta w bazie</h2>
        <?php
            //skrypt 2
            $zapytanie2 = "SELECT zwierzeta.id, zwierzeta.gatunek, gromady.nazwa FROM zwierzeta, gromady WHERE zwierzeta.Gromady_id=gromady.id";
            $wynik2 = mysqli_query($polaczenie, $zapytanie2);
            while($wiersz2 = mysqli_fetch_array($wynik2)){
                echo "$wiersz2[0]. $wiersz2[1], $wiersz2[2]<br>";        
            }
            mysqli_close($polaczenie);
        ?>
    </div>
    <div id="stopka">
        <a href="http://atlas-zwierzat.pl" target="_blank">Poznaj inne strony o zwierzętach</a>
        , autor Atlasu zwierząt: PESEL
    </div>
</body>
</html>