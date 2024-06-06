<?php
$db = new PDO('mysql:host=localhost;dbname=ee09;', 'root', '');
$kw1 = $db->query("INSERT INTO `ratownicy` (`id`, `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES (NULL, '{$_POST['numer']}', '{$_POST['ratownik1']}', '{$_POST['ratownik2']}', '{$_POST['ratownik3']}');");

if($kw1) {
    echo "Do bazy zostało wysłane zapytanie: INSERT INTO `ratownicy` (`id`, `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`) VALUES (NULL, " . $_POST['numer'] . ", " . $_POST['ratownik1'] . ", " . $_POST['ratownik2'] . ", " . $_POST['ratownik3'] . ");";
}

$db = null;
?>