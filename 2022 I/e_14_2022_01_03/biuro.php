<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turystyka moja pasja</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Podróże z uśmiechem</h1>
    </div>
    <div id="ciasteczka">
        <?php
            //skrypt 1
            
            if(isset($_COOKIE['ciastko'])){
                echo "Witaj ponownie na naszej stronie";
            } else {
                echo "Witaj! Nasz strona używa ciasteczek";
            }
            setcookie("ciastko", "1");
        ?>
    </div>
    <div id="lewy">
        <h2>Nasze wycieczki</h2>
        <ol>
            <li>autokarowe
                <ul>
                    <li>po Polsce</li>
                    <li>do Niemiec i Czech</li>
                </ul>
            </li>
            <li>samolotem
                <ul>
                    <li>Grecja</li>
                    <li>Barcelona</li>
                    <li>Wenecja</li>
                </ul>
            </li>
        </ol>
        <h2>Pobierz dokument</h2>
        <p><a href="regulamin.txt">Regulamin biura podróży</a></p>
        <p><a href="http://galeria.pl" target="_blank">Zdjęcia z naszych wycieczek</a></p>
    </div>
    <div id="prawy">
        <table>
            <tr>
                <td><img src="polska.jpg" alt="Zwiedzanie Krakowa"></td>
                <td><img src="wlochy.jpg" class="foto" alt="Wenecja i nie tylko"></td>
            </tr>
            <tr>
                <td><img src="grecja.jpg" alt="Gorące greckie wyspy"></td>
                <td><img src="hiszpania.jpg" alt="Słoneczna Barcelona"></td>
            </tr>
        </table>
    </div>
    <div id="stopka">Stronę przygotował: PESEL</div>
</body>
</html>