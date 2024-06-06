<?php
$db = new PDO("mysql:host=localhost;dbname=przychodnia", "root", "");
$kw1 = $db->query("SELECT id, imie, nazwisko FROM pacjenci;");
$dane1 = $kw1->fetchAll();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia</title>
    <link rel="stylesheet" href="przychodnia.css">
</head>
<body>
    <header><h1>PRAKTYKA LEKARZA RODZINNEGO</h1></header>
    <main>
        <div class="lewy">
            <h3>LISTA PACJENTÓW</h3> <br>
            <?php foreach($dane1 as $d): ?>
                <p><?= $d['id'] . " " . $d['imie'] . " " . $d['nazwisko']?></p>
            <?php endforeach;?>
            <br><br>
            <form action="pacjent.php" method="post">
                <label for="id">Podaj id:</label> <br>
                <input type="number" name="id" id="id">
                <button type="submit">Pokaż dane</button>
            </form>
            <h3>LEKARZE</h3>
            <ul>
                <li>pn - śr</li>
                <ol>
                    <li>Anna Kwiatkowska</li>
                    <li>Jan Kowalewski</li>
                </ol>
                <li>czw - pt</li>
                <ol>
                    <li>Krzysztof Nowak</li>
                </ol>
            </ul>
        </div>
        <div class="prawy">
            <h2>INFORMACJE SZCZEGÓŁOWE O PACJENCIE</h2>
            <p>Brak wybranego pacjenta</p>
        </div>
    </main>
    <footer>
        <p>utworzone przez: pt21lipiecw</p>
        <a href="kwerendy.txt">Pobierz plik z kwerendami</a>
    </footer>
</body>
</html>

<?php
$db = null;
?>