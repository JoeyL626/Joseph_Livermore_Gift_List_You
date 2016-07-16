<?php

function connect() {
	$host = 'localhost';
	$db_name = 'giftlistyou';
	$db_user = 'root';
	$db_password = 'root';
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password);
}
?>