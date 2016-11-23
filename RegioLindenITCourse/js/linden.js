(function() {

	"use strict";
	
	// set variabelen		
	var	$menucall = document.querySelector('#callmenu');
	var	$menu = document.querySelector('#main');
	var	$articles = document.querySelectorAll('aside article');
	
	// navigatie variabelen
	var	$homebutton = document.querySelector('#home');
	
	// #####    -->  maak hier 3 nieuwe variabelen voor de overige SVG buttons
	
	
	
		
	// fade 1e artikel in
	$articles[0].classList.add('fadeIn');
	
	// functies om diverse artikelen te laten in/uitfaden
	$homebutton.onclick=function(){
		$articles[0].classList.add('fadeIn');
		$articles[1].classList.remove('fadeIn');
		$articles[2].classList.remove('fadeIn');
		$articles[3].classList.remove('fadeIn');
		}; 
	
	// #####    -->  maak hier 3 nieuwe functies zoals de bovenstaande voor de overige SVG buttons
	
	
	
		
	// audio variabelen	
	var	$sound = document.querySelector('#sound');		
	
	var	$playsound = document.querySelector('#playsound');
	var	$stopsound = document.querySelector('#stopsound');		
	
	// bediening van video en audio
	$playsound.onclick=function(){
		$sound.play();
		}; 
	$stopsound.onclick=function(){
		$sound.pause();
		}; 
		
	
	// #####    -->  maak hier de bediening voor de videobuttons zaosl hierboven de audio. 
	// #####    -->  Anaylyseer de HTML van de audio en video en let goed op de ID's
	
	
	
	
	
	// functie voor reponsive menu
	$menucall.onclick=function(){
		$menu.classList.add('showmenu');
		}; 
	
	$menu.onclick=function(){
		$menu.classList.remove('showmenu');
		}; 	


})();
