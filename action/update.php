<?php
include "../connect.php";
$confirmForm = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
	$confirmForm = true;
	$id = $_POST['id'];
	$zmiana = $_POST['zmiana'];
	$wartoscZmiany = $_POST['wartosc-zmiany'];
}

if($confirmForm) {
	$start = microtime(true);
	
	$query = $conn->query("SELECT * FROM `produkt` WHERE id_produkt =".$id.";");
	$row = $query->fetch_assoc();

	$conn->query("UPDATE ".$zmiana." SET ".$zmiana." = '".$wartoscZmiany."' WHERE id_".$zmiana." = ".$row["id_$zmiana"].";");

	 // Do zrobienia (jesli jest zmieniana cena brutto lub ilosc oblicz cene netto )
	if($zmiana == "cena_brutto") {
		$netto = ((23 * $wartoscZmiany / 100) + $wartoscZmiany);
		$conn->query("UPDATE cena_netto SET cena_netto =".$netto."WHERE id_cena_netto=".$row['id_cena_netto'].";");
	}

	$finish = microtime(true);
	$duration = $finish - $start;

	$conn->query("INSERT INTO `ip`(ip) VALUES ('".$_SERVER['REMOTE_ADDR']."');");
	$idIp = $conn->insert_id;

	$conn->query("INSERT INTO `czas_wykonywania_zapytan`(czas_wykonywania_zapytan) VALUES (".$duration.");");
	$idDuration = $conn->insert_id;

	$conn->query("INSERT INTO `statystyki_zapytan`(id_czas_wykonywania_zapytan, id_ip) VALUES (".$idDuration.", ".$idIp.");");
}

header("Location: ../index.php?id=main-content");
exit;