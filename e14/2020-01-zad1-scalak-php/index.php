<?php
$db = new PDO("mysql:host=localhost;dbname=sklep", "root", "");
$kw1 = $db->query("SELECT id, nazwa, opis, cena FROM podzespoly WHERE cena < 1000;");
$data = $kw1->fetchAll();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nasz sklep komputerowy</title>
    <link rel="stylesheet" href="styl8.css">
</head>
<body>
    <header>
        <div class="menu">
            <a href="index.php">Główna</a>
            <a href="procesory.html">Procesory</a>
            <a href="ram.html">RAM</a>
            <a href="grafika.html">Grafika</a>
        </div>
        <div class="logo">
            <h2>Podzespoły komputerowe</h2>
        </div>
    </header>
    <main class="glowny">
        <h1>Dzisiejsze promocje</h1>
        <table>
            <thead>
                <tr>
                    <th>NUMER</th>
                    <th>NAZWA PODZESPOŁU</th>
                    <th>OPIS</th>
                    <th>CENA</th>
                </tr>
            </thead>
            <?php foreach($data as $d):  ?>
            <tr>
                <td><?= $d['id']?></td>
                <td><?= $d['nazwa']?></td>
                <td><?= $d['opis']?></td>
                <td><?= $d['cena']?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <footer>
        <div class="stopka"><img src="scalak.jpg" alt="promocje na procesory"></div>
        <div class="stopka">
            <h4>Nasz Sklep Komputerowy</h4>
            <a href="http://www.edata.pl/" target="blank">Współpracujemy z hurtownią edata</a></div>
        <div class="stopka">zadzwoń: 601 602 603</div>
        <div class="stopka"><p>Stronę wykonał: pt21lipiecw</p></div>
    </footer>
</body>
</html>

<?php
    $db=null;
?>