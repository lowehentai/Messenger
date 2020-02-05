<?php
try {
	$db=new PDO("mysql:host=localhost;dbname=hentai;charset=utf8",'root','');
	//echo "veritabanı bağlantısı başarılı";
}
catch (PDOExpception $e) {
	echo $e->getMessage();
}
 ?>