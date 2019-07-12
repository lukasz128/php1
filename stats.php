<?php
$visited = (!isset($_SERVER['HTTP_REFERER'])) ? '404' : $_SERVER['HTTP_REFERER'];

$conn->query("INSERT INTO `ip`(ip) VALUES ('".$_SERVER['REMOTE_ADDR']."');");
$idIp = $conn->insert_id;

$conn->query("INSERT INTO `user_agent`(user_agent) VALUES ('".$_SERVER['HTTP_USER_AGENT']."');");
$idAgent = $conn->insert_id;

$conn->query("INSERT INTO `domena`(domena) VALUES ('".gethostbyaddr($_SERVER['REMOTE_ADDR'])."');");
$idDomena = $conn->insert_id;

$conn->query("INSERT INTO `odwiedzone_podstrony`(odwiedzone_podstrony) VALUES ('".$visited."');");
$idVisited = $conn->insert_id;

$conn->query("INSERT INTO `statystyki`(id_ip, id_user_agent, id_domena, id_odwiedzone_podstrony) VALUES(".$idIp.", ".$idAgent.", ".$idDomena.", ".$idVisited.");");