(function() {

	"use strict";
	
	// set variabelen		
	var	$menucall = document.querySelector('#callmenu');
	var	$menu = document.querySelector('#main');
	var	$articles = document.querySelectorAll('aside article');
	
	// navigatie variabelen
	var	$homebutton = document.querySelector('#Home');
	var $video	= document.querySelector('#Video');
	var $audio = document.querySelector('#Audio');
	var $form = document.querySelector('#Form');
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

	$video.onclick=function(){
		$articles[0].classList.remove('fadeIn');
		$articles[1].classList.add('fadeIn');
		$articles[2].classList.remove('fadeIn');
		$articles[3].classList.remove('fadeIn');
	}

	$audio.onclick=function(){
		$articles[0].classList.remove('fadeIn');
		$articles[1].classList.remove('fadeIn');
		$articles[2].classList.add('fadeIn');
		$articles[3].classList.remove('fadeIn');
	}

	$form.onclick=function(){
		$articles[0].classList.remove('fadeIn');
		$articles[1].classList.remove('fadeIn');
		$articles[2].classList.remove('fadeIn');
		$articles[3].classList.add('fadeIn');
	}


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

	//movie vars
	var $movie = document.querySelector('#movie');
	var $playMovie = document.querySelector('#playmovie');
	var $stopMovie = document.querySelector('#stopmovie');
	var $muteSound = document.querySelector('#muteSound')
	
	$playMovie.onclick=function(){
		$movie.play();
	};
	$stopMovie.onclick=function(){
		$movie.pause();
	};
	$muteSound.onclick = function(){
			$movie.muted = !$movie.muted;
	}

	
	// functie voor reponsive menu
	$menucall.onclick=function(){
		$menu.classList.add('showmenu');
		}; 
	
	$menu.onclick=function(){
		$menu.classList.remove('showmenu');
		}; 	


})();
