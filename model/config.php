<?php

function connect() {
	$host = 'us-cdbr-iron-east-04.cleardb.net';
	$db_name = 'heroku_e1ae645ff156a0c';
	$db_user = 'b5b81ce59931b1';
	$db_password = '15730c11';
    return new PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password);
}
?>