<?php
include "../connect.php";
$confirmForm = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {
	$confirmForm = true;
	$nazwa = $_POST['nazwa'];
	$cena = $_POST['cena'];
	$ilosc = $_POST['ilosc'];
	$kategoria = $_POST['kategoria'];
	$opis = $_POST['opis'];
	$ocena = $_POST['ocena'];
	$netto = ((23 * $cena / 100) + $cena);
}

if($confirmForm) {
	$start = microtime(true);
	$insertNazwa = $conn->query("INSERT INTO `nazwa`(nazwa) VALUES('".$nazwa."');");
	$idNazwa = $conn->insert_id;
	$insertCena = $conn->query("INSERT INTO `cena_brutto`(cena_brutto) VALUES('".$cena."');");
	$idCena = $conn->insert_id;
	$insertCenaNetto = $conn->query("INSERT INTO `cena_netto`(cena_netto) VALUES('".$netto."');");
	$idCenaNetto = $conn->insert_id;
	$insertIlosc = $conn->query("INSERT INTO `ilosc`(ilosc) VALUES('".$ilosc."');");
	$idIlosc = $conn->insert_id;
	$selectKateogria = $conn->query("SELECT id_kategoria FROM `kategoria` WHERE kategoria = '".$kategoria."';");
	$idKategoria = $selectKateogria->fetch_assoc();
	$insertOpis = $conn->query("INSERT INTO `opis`(opis) VALUES('".$opis."');");
	$idOpis = $conn->insert_id;
	$selectOcena = $conn->query("SELECT id_ocena FROM `ocena` WHERE ocena ='".$ocena."';");
	$idOcena = $selectOcena->fetch_assoc();

	$conn->query("INSERT INTO `produkt`(id_cena_netto, id_podatek, id_cena_brutto, id_ilosc, id_kategoria, id_nazwa, id_ocena, id_opis) VALUES(".$idCenaNetto.", 3, ".$idCena.", ".$idIlosc.", ".$idKategoria['id_kategoria'].", ".$idNazwa.", ".$idOcena['id_ocena'].", ".$idOpis.");");

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