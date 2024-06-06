<?php setcookie('cookiename', true, time()+3600);

$db = new PDO("mysql:host=localhost;dbname=egzamin;", "root", "");
$kw1 = $db->query("SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas DESC;");
$dane1 = $kw1->fetchAll();
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odloty samolotów</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <header>
        <div class="baner1"><h2>Odloty z lotniska</h2></div>
        <div class="baner2"><img src="./zad6.png" alt="logotyp"></div>
    </header>
    <main>
        <h4>tabela odlotów</h4>
        
        <table>
            <tr>
                <thead>
                    <th>lp.</th>
                    <th>numer rejsu</th>
                    <th>czas</th>
                    <th>kierunek</th>
                    <th>status</th>
                </thead>
            </tr>
            <?php foreach($dane1 as $d): ?>
            <tr>
                <td><?= $d['id']?></td>
                <td><?= $d['nr_rejsu']?></td>
                <td><?= $d['czas']?></td>
                <td><?= $d['kierunek']?></td>
                <td><?= $d['status_lotu']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <footer>
        <div class="stopka1"><a href="./kw1.jpg" target="_blank">Pobierz obraz</a></div>
        <div class="stopka2">
            <?php if(isset($_COOKIE['cookiename'])) {
                echo "<p><strong>Miło nam, że nas znowu odwiedziłeś</strong></p>";
            } else {
                echo "<p><em>Dzień dobry! Sprawdź regulamin naszej strony</em></p>";
            }
            ?>
        </div>
        <div class="stopka3">Autor: pt21lipeicw</div>
    </footer>
</body>
</html>