<?php
$conectare = mysqli_connect('localhost','root','','autentificare');
if(!$conectare)
{
	die('Conectarea la baza de date nu a reusit');
}	
?>