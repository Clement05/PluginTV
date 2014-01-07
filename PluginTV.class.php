<?php

/*
 @nom: Personnal Settings
 @auteur: Clément Girard 
 @description:  Classer de paramètres personnels
 */

//Ce fichier permet de gerer vos donnees en provenance de la base de donnees

//Il faut changer le nom de la classe ici (je sens que vous allez oublier)
class PluginTV extends SQLiteEntity{

	
	protected $id,$fai,$pathm3u,$pathclient;
	protected $TABLE_NAME = 'plugin_PluginTV';
	protected $CLASS_NAME = 'PluginTV';
	protected $object_fields = 
	array(
		'id'=>'key',
		'fai'=>'string',
		'pathm3u'=>'string',
		'pathclient'=>'string',
		'pathvlc'=>'string'
	);

	function __construct(){
		parent::__construct();
	}

	function setId($id){
		$this->id = $id;
	}
	
	function getId(){
		return $this->id;
	}

	function getFai(){
		return $this->fai;
	}

	function setFai($fai){
		$this->fai = $fai;
	}

	function getPathm3u(){
		return $this->pathm3u;
	}

	function setPathm3u($pathm3u){
		$this->pathm3u = $pathm3u;
	}
	function getPathclient(){
		return $this->pathclient;
	}

	function setPathclient($pathclient){
		$this->pathclient = $pathclient;
	}
	function getPathvlc(){
		return $this->pathvlc;
	}

	function setPathvlc($pathvlc){
		$this->pathvlc = $pathvlc;
	}
}

?>
