<?php
/* 
	Le code contenu dans cette page ne sera �xecut� qu'� l'activation du plugin 
	Vous pouvez donc l'utiliser pour cr�er des tables SQLite, des dossiers, ou executer une action
	qui ne doit se lancer qu'� l'installation ex :
	
*/
$url = 'http://www.mon-ip.com/info-adresse-ip.php';
htmlspecialchars(implode('', file($url)));
$mystring1 = htmlspecialchars(implode('', file($url)));
$findme1   = 'FAI';
$pos1 = strpos($mystring1, $findme1);
$substr1 = substr($mystring1, $pos1+6);
$mystring2 = $substr1;
$findme2   = 'Réseau';
$pos2 = strpos($mystring2, $findme2)-33;
$length2 = strlen($mystring2);
$nbtocut = -$length2+($pos2);
$substr2 = substr($mystring2, 0, $nbtocut);
if ($substr2 == "Iliad/Free"){
$pathm3u = "http://mafreebox.freebox.fr/freeboxtv/playlist.m3u";
}

require_once('PluginTV.class.php');
$ps = new PluginTV();
$ps->create();

$s1 = New Section();
$s1->setLabel('PluginTV');
$s1->save();

$r1 = New Right();
$r1->setSection($s1->getId());
$r1->setRead('1');
$r1->setDelete('1');
$r1->setCreate('1');
$r1->setUpdate('1');
$r1->setRank('1');
$r1->save();

$ps = new PluginTV();
$ps->setFai($substr2);
$ps->setPathm3u($pathm3u);
$ps->setPathclient("");
$ps->setPathvlc("");
$ps->save();

?>
