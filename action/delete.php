<?php
include "../connect.php";
$confirmForm = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
	$confirmForm = true;
	$id = $_POST['id'];
}

if($confirmForm) {
	$start = microtime(true);

	$query = $conn->query("SELECT * FROM `produkt` WHERE id_produkt =".$id.";");
	$row = $query->fetch_assoc();

	$conn->query("DELETE FROM `produkt` WHERE id_produkt =".$row['id_produkt'].";");
	$conn->query("DELETE FROM `cena_netto` WHERE id_cena_netto =".$row['id_cena_netto'].";");
	$conn->query("DELETE FROM `cena_brutto` WHERE id_cena_brutto =".$row['id_cena_brutto'].";");
	$conn->query("DELETE FROM `ilosc` WHERE id_ilosc =".$row['id_ilosc'].";");
	$conn->query("DELETE FROM `nazwa` WHERE id_nazwa =".$row['id_nazwa'].";");
	$conn->query("DELETE FROM `opis` WHERE id_opis =".$row['id_opis'].";");

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