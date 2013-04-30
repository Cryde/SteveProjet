<?php
// On inclus ici le haut de la page
include 'global_html/top.php';

// Eventuellement si tu as un menu commun à toutes les pages (décommente pour voir) : 
// include 'global_html/menu.php';

/*
 * C'est ici que la page va se charger en fonction de l'URL
 * Par exemple "tonsite.com/index.php?page=contact"
 * ira dans le switch au ""case"" 'contact' et incluera la page includes/contact.php
 * 
 */
if(!empty($_GET['page'])){
	
	switch($_GET['page']){
		
		case 'contact':
			include 'includes/contact.php';
		break;
		
		case 'faq' :
			include 'includes/faq.php';
		break;
		
		// etc ... autant que tu veux !
		
		/*
		case 'le_nom_de_la_page_que_tu_veux_voir_dans_lurl':
			include 'includes/la_page_a_charger_en_fonction_de_cette_url.php';
		break;		 
		 */
		
		// default est appelé quand il ne trouve rien dans les case avant !
		// On va admettre que le type à fait de la merde et donc que c'est une page qui 
		// existe pas
		default :
			include 'includes/404.php';
		break;
	}
}
else{
	// Par defaut si on arrive sur ton site faut charger un truc
	// et ça sera la page home !
	include 'includes/home.php';
}

// Bas de la page
include 'global_html/top.php';