<?php
$db = new PDO("mysql:host=localhost;dbname=egzamin3", "root", "");
$kw1 = $db->query("SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC;");
$dane1 = $kw1->fetchAll();
$kw2 = $db->query("SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE wycieczki.dostepna = TRUE;");
$dane2 = $kw2->fetchAll();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header><h1>BIURO PODRÓŻY</h1></header>
    <main>
        <div class="lewy">
            <h2>KONTAKT</h2>
            <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 555666777</p>
        </div>
        <div class="srodkowy">
            <h2>GALERIA</h2>
            <div class="kontener">
                <?php foreach($dane1 as $d): ?>
                    <img src=<?=$d['nazwaPliku']?> alt="<?=$d['podpis']?>">
                <?php endforeach; ?>
            </div>
        </div>
        <div class="prawy">
            <h2>PROMOCJE</h2>
            <table>
                <tr>
                    <td>Jesień</td>
                    <td>Grupa 4+</td>
                    <td>Grupa 10+</td>
                </tr>
                <tr>
                    <td>5%</td>
                    <td>10%</td>
                    <td>15%</td>
                </tr>
            </table>
        </div>
    </main>
    <div class="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php foreach($dane2 as $d): ?>
            <p><?=$d['id'] . ". " . $d['dataWyjazdu'] . ", " . $d['cel'] . ", cena: " . $d['cena']?></p>
        <?php endforeach; ?>
    </div>
    <footer><p>Stronę wykonał: pt21lipiecw</p></footer>
</body>
</html>