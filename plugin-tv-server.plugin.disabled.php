<?php
/*
@name PluginTV
@author Clément GIRARD <clement.girard4@gmail.com>
@link https://sites.google.com/site/clementgirard4/
@licence CC by nc sa
@version 1.0.0
@description Gestion de la télé par VLC et flux m3u
*/
//Commande vocal
/*function tv_vocal_command(&$response,$actionUrl){
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' quitte VLC',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' quitte la télé',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' éteint VLC',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' éteint la télé',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' ferme VLC',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' ferme la télé',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Exit','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC plein écran activé',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_FullScreenOn','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC plein écran désactivé',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_FullScreenOff','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC remettre le son',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeUnMute','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC mettre le volume à 100%',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_Volume100','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC baisser volume minimum',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeMin','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC couper le son',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeMute','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC monter volume maximum',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeMax','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC baisser volume',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeDown','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' VLC monter volume',
		'url'=>$actionUrl.'?action=vocalinfo_VLC_VolumeUp','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' lance la télé',
		'url'=>$actionUrl.'?action=vocalinfo_launchTV','confidence'=>'0.88'
		);
	$response['commands'][] = array(
		'command'=>VOCAL_ENTITY_NAME.' lance VLC',
		'url'=>$actionUrl.'?action=vocalinfo_launchVLC','confidence'=>'0.88'
		);
}

function tv_action(){
	global $_,$conf;

	switch($_['action']){

		case 'vocalinfo_VLC_Exit':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/Exit.bat'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;			
		case 'vocalinfo_VLC_FullScreenOn':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/FullScreenOn.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;	
		case 'vocalinfo_VLC_FullScreenOff':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/FullScreenOff.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_VLC_VolumeMute':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeMute.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_VLC_VolumeUnMute':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeUnMute.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_VLC_VolumeMax':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeMax.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_VLC_VolumeMin':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeMute.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_VLC_Volume100':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeUnMute.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;			
		case 'vocalinfo_VLC_VolumeDown':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeDown.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;		
		case 'vocalinfo_VLC_VolumeUp':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/VolumeUp.jar'),
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_launchTV':
			$response = array('responses'=>array(
			//array('type'=>'command','program'=>'http://localhost:8080/requests/status.xml?command=in_play&input=http://mafreebox.freebox.fr/freeboxtv/playlist.m3u'),
			array('type'=>'command','program'=>'C:/Program Files/yana/plugins/plugin-tv/Launch.jar'),
			array('type'=>'talk','sentence'=>'C\'est parti, je lance la télé. Qu\'est-ce qu\'on regarde ce soir ?')
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
		case 'vocalinfo_launchVLC':
			$response = array('responses'=>array(
			array('type'=>'command','program'=>'C:/Program Files/VideoLAN/VLC/vlc.exe'),
			//array('type'=>'command','program'=>$conf->get('plugin_tv_pathvlc')),
			array('type'=>'talk','sentence'=>'Je lance VLC, veux-tu regarder la télé ?')
			)
			);
			$json = json_encode($response);
			echo ($json=='[]'?'{}':$json);
		break;
	}
}*/

//Si vous utiliser la base de donnees a ajouter
include('PluginTV.class.php');

//Cette fonction va generer un nouveau element dans le menu horizontal
function tv_plugin_menu(&$menuItems){
	global $_;
	$menuItems[] = array('sort'=>10,'content'=>'<a href="index.php?module=PluginTV"><i class="icon-th-large"></i> PluginTV</a>');
}

//Cette fonction va generer un nouveau element dans le menu de préférences
function tv_plugin_setting_menu(){
	global $_;
	echo '<li '.(isset($_['section']) && $_['section']=='PluginTV'?'class="active"':'').'><a href="setting.php?section=PluginTV"><i class="icon-chevron-right"></i> Plugin TV</a></li>';
	
}

//Cette fonction décrit le contenu de l'élément du menu de préférence
function tv_plugin_setting_page(){
	global $myUser,$_,$conf;
	
	if(isset($_['section']) && $_['section']=='PluginTV' ){
		if($myUser!=false){
			$psManager = new PluginTV();
			$sets = $psManager->populate();

	//Gestion des modifications
			if (isset($_['id'])){
				$id_mod = $_['id'];
				$selected = $psManager->getById($id_mod);
				$description = $selected->getFai();
				$button = "Modifier";
			}
			else
			{
				$description =  "Ajout d'un paramètre";
				$button = "Ajouter";
			} 

			?>

			<div class="span9 userBloc">


				<h1>Plugin TV</h1>
				<p>Gestion des paramètres</p>  

				<form action="action.php?action=tv_add_tv" method="POST"> 
					<fieldset>
						<legend><? echo $description ?></legend>

						<div class="left">
							<label for="FAI">FAI</label>
							<? if(isset($selected)){echo '<input type="hidden" name="id" value="'.$id_mod.'">';} ?>
							<input type="text" value="<? if(isset($selected)){echo $selected->getFai();} ?>" id="FAI" name="FAI" placeholder="Nom du FAI"/>
							<label for="pathm3u">Lien m3u de votre fournisseur d'accès pour regarder la télé sur VLC</label>
							<input type="text" value="<? if(isset($selected)){echo $selected->getPathm3u();} ?>" name="pathm3u" id="pathm3u" placeholder="ex : http://mafreebox.freebox.fr/freeboxtv/playlist.m3u"/>
<label for="pathclient">Chemin de l'install du plugin TV sur votre PC client</label>
							<input type="text" value="<? if(isset($selected)){echo $selected->getPathclient();} ?>" name="pathclient" id="pathclient" placeholder="ex: C://Program Files/yana/plugins/plugin-tv/"/>
<label for="pathvlc">Chemin d'installation de VLC</label>
							<input type="text" value="<? if(isset($selected)){echo $selected->getPathvlc();} ?>" name="pathvlc" id="pathvlc" placeholder="ex: C://Program Files/VideoLAN/VLC/"/>
						</div>

						<div class="clear"></div>
						<br/>
							<p style="float: left;"><button type="submit" class="btn"><? echo $button; ?></button>
							</p>
							<p style="float: right;"><a class="btn" href="setting.php?section=PluginTV&save=true&myUser=<?php $myUser ?>"><i class="icon-check icon-black"></i> Enregistrer</a><a class="btn" href="setting.php?section=PluginTV"><i class="icon-remove icon-black"></i> Annuler</a>
							</p>
					</fieldset>
					<br/>
				</form>

				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>FAI</th>
							<th>Lien m3u</th>
							<th>Chemin client</th>
							<th>Chemin vlc</th>
							<th></th> 
						</tr>
					</thead>

					<?php foreach($sets as $ps){ ?>
					<tr>
						<td><?php echo $ps->getFai(); ?></td>
						<td><?php echo $ps->getPathm3u(); ?></td>
						<td><?php echo $ps->getPathclient(); ?></td>
						<td><?php echo $ps->getPathvlc(); ?></td>
						<td><?php if($ps->getId()){
							?><a class="btn" href="action.php?action=tv_delete_tv&id=<?php echo $ps->getId(); ?>"><i class="icon-remove"></i></a>
						<?php }
						else "";
						?>
							<a class="btn" href="setting.php?section=PluginTV&id=<?php echo $ps->getId(); ?>"><i class="icon-edit"></i></a></td>
						</tr>
						<?php } ?>
					</table>
<p style="float: right;"><a class="btn btn-danger" href="setting.php?section=PluginTV&reset=true">Reset</a>
</p>
</div>

				<?php 

					if (isset($_GET['save'])){ // On les données envoyées
					  if ($_GET['save']=="true"){
						tv_edit_constant();
						}
					}
					if (isset($_GET['reset'])){ // On les données envoyées
					  if ($_GET['reset']=="true"){
						tv_reset_constant();
						}
					}
					
				}else{ ?>

				<div id="main" class="wrapper clearfix">
					<article>
						<h3>Vous devez être connecté</h3>
					</article>
				</div>
				<?php
			}
		}
	}

	function tv_action_tv(){
		global $_,$myUser,$conf;

		//Erreur dans les droits sinon!
		$myUser->loadRight();

		switch($_['action']){

			case 'tv_add_tv':
			$right_toverify = isset($_['id']) ? 'u' : 'c';
			if($myUser->can('PluginTV',$right_toverify)){
				$ps = new PluginTV();
				if ($right_toverify == "u"){$ps = $ps->load(array("id"=>$_['id']));}
				$ps->setFai($_['FAI']);
				$ps->setPathm3u($_['pathm3u']);
				$ps->setPathclient($_['pathclient']);
				$ps->setPathvlc($_['pathvlc']);
				$ps->save();

			$conf->put('plugin_tv_pathclient',$_['pathclient']);
			$conf->put('plugin_tv_pathvlc',$_['pathvlc']);
			header('location:setting.php?section=PluginTV');	
			}
						else
			{
				header('location:setting.php?section=PluginTV&error=Vous n\'avez pas le droit de faire ça!');
			}
			
			break;

			case 'tv_delete_tv':
			if($myUser->can('PluginTV','d')){
				$psManager = new PluginTV();
				$psManager->delete(array('id'=>$_['id']));
				header('location:setting.php?section=PluginTV');
			}
			else
			{
				header('location:setting.php?section=PluginTV&error=Vous n\'avez pas le droit de faire ça!');
			}

			break;
			}
		}

// Modifier le fichier de constant
function tv_edit_constant(){
		global $_,$myUser;

		//Erreur dans les droits sinon!
		$myUser->loadRight();	
		
	if(isset($_['section']) && $_['section']=='PluginTV' ){
		if($myUser!=false){
			$psManager = new PluginTV();
			$sets = $psManager->populate();

			foreach($sets as $ps){
				$body = $ps->getPathm3u();
			}
			
			
			$handle = fopen("../yana-server/plugins/plugin-tv-server/plugin-tv-client/pathm3u.txt", "r+");

			ftruncate($handle,0);// on vide le fichier
			fseek($handle, 0); // On remet le curseur au début du fichier
			fputs($handle, $body); // On écrit le nouveau nombre de pages vues
			fclose($handle);
		}
		else {
			?>
			<div id="main" class="wrapper clearfix">
				<article>
					<h3>Vous devez être connecté</h3>
				</article>
			</div>
			<?php
		}
	}
}
function tv_reset_constant(){
		global $_,$myUser;

		//Erreur dans les droits sinon!
		$myUser->loadRight();	
		
	if(isset($_['section']) && $_['section']=='PluginTV' ){
		if($myUser!=false){
			
			include 'uninstall.php';
			include 'install.php';
			
			$psManager = new PluginTV();
			$sets = $psManager->populate();
			$body = "";
			
			$handle = fopen("../yana-server/plugins/plugin-tv-server/plugin-tv-client/pathm3u.txt", "r+");

			ftruncate($handle,0);// on vide le fichier
			fseek($handle, 0); // On remet le curseur au début du fichier
			fputs($handle, $body); // On écrit le nouveau nombre de pages vues
			fclose($handle);
			
			}
		else {
			?>
			<div id="main" class="wrapper clearfix">
				<article>
					<h3>Vous devez être connecté</h3>
				</article>
			</div>
			<?php
		}
	}
}
			
			
			
Plugin::addCss("/css/style.css"); 
//Plugin::addJs("/js/main.js"); 

Plugin::addHook("setting_menu", "tv_plugin_setting_menu"); //Ajoute un item à la liste du menu de préférence
Plugin::addHook("setting_bloc", "tv_plugin_setting_page"); //Ajoute le contenu du menu de préférences
Plugin::addHook("action_post_case", "tv_action_tv"); //Ajoute les actions menu de préférences

//Plugin::addHook("action_post_case", "tv_action");    
//Plugin::addHook("vocal_command", "tv_vocal_command");

//Plugin::addHook("menubar_pre_home", "ps_plugin_menu");  
//Plugin::addHook("home", "ps_plugin_page");  
?>
