<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTRF Kelowna</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
</head>
<body>


	<style>

		@import url("/css/font-awesome.min.css");

		
		main, section {
		    width: 100vw;
		    height: 100vh;
		    text-align: center;
		    display: inline-block;
		    box-sizing: border-box;
		    padding: 10%;
		    position: relative;
		    overflow: hidden;
    		font-size: calc( 2vw + 10px );
    		text-shadow: 0 0 0.2em #00000085, 0 0 0.7em #000000cf, 0 0 1.5em #000000cf;
    		color: white;
		}
		section {
		    margin-top: -4px;
		}

		@keyframes slide {
		  0% {
		      left: -10%;
		  }
		  100% {
		      left: 0%;
		  }
		}

		@keyframes slideX {
		  0% {
		      left: 0%;
		  }
		  100% {
		      left: -10%;
		  }
		}

		main:after, section:after {
		    content: "";
		    width: 120%;
		    height: 120%;
		    position: absolute;
		    background-image: var(--bg);
		    top: -10%;
		    left: -10%;
		    background-size: cover;
		    z-index: -1;
		    background-position: center;
		    opacity: 1;
		}
		



		.markdown {
		     position: relative; 
		    z-index: 2;
		}
			


		body {
		    margin: 0;
		    overflow-y: hidden;
		    overflow-x: hidden;
		    font-family: 'Roboto', sans-serif;

		}

		main:nth-child(even), section:nth-child(even) {
		    background-color: #0000001c;
		}


		ul {
		    display: inline-block;
		}

		h1 {
		    margin-bottom: 0;
		}

		h2 {
		    margin-bottom: 0;
		}

		p {
		    margin: .5em 0;
		}

		.nav {
		    position: fixed;
		    bottom: 10px;
		    right: 10px;
		    z-index: 2;
		}


		.nav>button:first-child:before {
		    content: "\0f021";
		}

		.nav>button:first-child +button:before {
		    content: "\0f04b";
		}

		.nav>button:first-child +button +button:before {
		    content: "\0f051";
		}
		.nav>button{
		    font-size:0;
		    color:white;
		    text-shadow:0 0 3px black;
		    background:transparent;
		    border-color:transparent;
		}
		.nav>button:before{
		   font-family: 'FontAwesome';
		   font-size:calc( 15px + 1.5vw )
		}


		.nav>button:first-child +button.playing:before {
		    content: "\0f04c";
		    color: mediumaquamarine;
		}


		main{
			padding-top:0;
			text-align:left;
			padding-left: 5%;
		}


		

		main + section + section {
			padding-top:0;
			text-align:right;
			padding-right: 5%;
		}


		main + section + section + section{
			padding-top:0;
			text-align: left;
			padding-left: 5%;
		}


		

		main + section{
			text-align: left;
    		position: relative;
    		padding-left: 5%;
		}
		main + section>div.markdown {
		    position: absolute;
		    bottom: 7%;
		}


		main h2:after {
		    background: linear-gradient(20deg, #3fb9f0eb, #bb2db894,  #c55445,  #bb7951);
		    display: inline-block;
		    width: 1em;
		    height: 1em;
		    content: "";
		    vertical-align: text-top;
		    margin-left: 0.3em;
		    -webkit-mask-image: url(okanagan.png);
		    -webkit-mask-size: 173%;
		    -webkit-mask-position: center;
		    transform: scale(1.3);
		}

		main + section h1:before {
		    background: linear-gradient(358deg, #4186a4, #ff00f0ad);
		    display: inline-block;
		    width: 1em;
		    height: 1em;
		    content: "";
		    vertical-align: text-top;
		    margin-right: -1em;
		    -webkit-mask-image: url(curve.png);
		    -webkit-mask-size: 173%;
		    -webkit-mask-position: center;
		    transform: scale(1.6) translate(0.2em, -1em);
		}

		main + section + section h1:before {
		       
			    background: linear-gradient(115deg, #ff75d4ab, #e0c1198a);
		    display: inline-block;
		    width: 1em;
		    height: 1em;
		    content: "";
		    vertical-align: text-top;
		    margin-right: 0.3em;
		    -webkit-mask-image: url(sun.png);
		    -webkit-mask-size: 173%;
		    -webkit-mask-position: center;
		    transform: scale(1.2);
		}

		main + section + section + section h1:before {
		    
 			background: linear-gradient(29deg, #2ff5cbb3, #b0249dad);
			    display: inline-block;
			    width: 1em;
			    height: 1em;
			    content: "";
			    vertical-align: text-top;
			    margin-right: 0.3em;
			    -webkit-mask-image: url(wine.png);
			    -webkit-mask-size: 100%;
			    -webkit-mask-position: center;
			    transform: scale(1.5) translate(0, -0.2em);
		    

		}



		main.active>span.last, section.active>span.last {
		    z-index:1;
		}


		main.active>span, section.active>span {
		    position: absolute;
		    width: 100%;
		    height: 100%;
		    top: 0;
		    left: 0;
		     opacity: 0;
		    /* z-index: 1; */
		    transition: opacity 2s;
		    z-index:1;
		}

		main.active>span.active, section.active>span.active {
		    transition: opacity 1s;
		    opacity:1;
		    z-index:2;
		}

		

		main.active>span:after, section.active>span:after{
		    content: "";
		    width: 120%;
		    height: 120%;
		    position: absolute;
		    background-image: var(--bg);
		    top: -10%;
		    left: -10%;
		    background-size: cover;
		    z-index: -1;
		    background-position: center;
		    opacity: 1;


		}
		main.active.load>span, section.active.load>span {
		    visibility: hidden;
		}


		main.active:after, section.active:after {
		    animation: slide;
		    animation-duration: 10s;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		}

		main.active>span:after, section.active>span:after {
		    animation: slide;
		    animation-duration: 10s;
		    animation-iteration-count: infinite;
		    animation-direction: alternate;
		}


		main.active>span + span:after {
		    background-position: bottom center;
		}

	</style>

	<?php 


	class ShareContentLoader{

		protected $path='/srv/www/uploader/uploads/cd1c00fd1d/web/ctrf-kelowna';
		protected $source='/srv/www/uploader/uploads/0fd83451f1';

		public function __construct(){

			
			include_once __DIR__.'/../../lib/vendor/autoload.php';


		}

		protected function urlImg($file){

			if(file_exists($this->source.'/'.$file)){
				$rel=str_replace('/srv/www/uploader/', '', $this->source.'/'.$file);
				$id=md5($rel).'.jpg';

				return 'https://uploader.uitrlab.ok.ubc.ca/download.php?stub=0fd83451f1&hash='.$id;
			}

			return false;
		}


		public function renderSection($name, $tag='section'){



				echo '<'.$tag.' ';

				$basename=str_replace('.md', '', $name);
				$image=$basename.'.jpg';

				echo 'class="'.$basename.'" ';

				echo 'style="--bg:url(\''.$this->urlImg($image).'\');" ';

				echo '>';


				array_walk(scandir($this->source), function($name)use($image, $basename){

					if(strpos($name, $basename)===0&&$name!=$image&&strpos($name, '.jpg')>0){
						echo '<span ';
						echo 'style="--bg:url(\''.$this->urlImg($name).'\');" '; 
						echo '></span>';					}


				});


				?><div class="markdown"><?php
				$Parsedown = new \Parsedown();
	    		echo  $Parsedown->text(file_get_contents($this->source.'/'.$name));

	    		?></div><?php
			
				echo '</'.$tag.'>';



		}

	}


	$path='/srv/www/uploader/uploads/cd1c00fd1d/web/ctrf-kelowna';
	$source='/srv/www/uploader/uploads/0fd83451f1';

	
	$shareLoader=new ShareContentLoader();
	$shareLoader->renderSection('intro.md', 'main');

	?>

	<?php
		array_walk(scandir($source), function($name)use($source, $shareLoader){

			if(strpos($name, 'section')===0&&strpos($name, '.md')>0){
				$shareLoader->renderSection($name);
			}


		});
	?>

<div class="nav">
	<button onclick="window.scrollSection(0)">Restart</button>
	<button onclick="window.togglePlay(this)">Play</button>
	<button onclick="window.scrollSection()">Next</button>
</div>

<script type="text/javascript">
	
	(function(){

		var at=0;

		var sections=Math.round(document.body.scrollHeight/window.innerHeight);
		var play=false;


		var getSections=function(){
			return Array.prototype.slice.call(document.querySelectorAll('main, section'),0);
		}

		var getInnerSections=function(el){
			return Array.prototype.slice.call(el.querySelectorAll('span'),0);
		}



		var innerInterval=null;
		var scrollTo=function(arg){

			var to=arg.top;
			var section=Math.round(to/window.innerHeight);

			var activeEl=null;
			getSections().forEach(function(sec, i){
				if(i===section){
					setTimeout(function(){
						sec.classList.remove('load')
					}, 3000)
					sec.classList.add('active');
					sec.classList.add('load')
					
					activeEl=sec;
					return;
				}
				sec.classList.remove('active');
			});

			if(innerInterval){
				clearInterval(innerInterval);
				innerInterval=null;
			}
			innerInterval=setInterval(function(){

				var inners=getInnerSections(activeEl);
				setActive=0;
				inners.forEach(function(el, i){

					if(el.classList.contains('last')){
						el.classList.remove('last');
					}
					if(el.classList.contains('active')){
						setActive=i+1;
						el.classList.remove('active');
						el.classList.add('last');
					}
				})

				if(inners.length>setActive){
					inners[setActive].classList.add('active');
				}

			}, 6000);

			window.scrollTo(arg);
		}

		scrollTo({
			top: 0,
			left: 0,
			behavior: "instant"
		});

		window.onload=function(){
			scrollTo({
				top: 0,
				left: 0,
				behavior: "instant"
			});
		}

		var scrollToSection=function(to){

			if(typeof to =='number'&&to<sections){
				to=(Math.round(to)%sections)*window.innerHeight;
			}

			if(typeof to != 'number'){
				to=((Math.round(window.scrollY/window.innerHeight)+1)%sections)*window.innerHeight;
			}

			scrollTo({
				top: to,
				left: 0,
				behavior: to==0?"instant":"smooth",
			})
		};

		var _timeout=null;
		var scrollToLoop=function(to){
			scrollToSection(to);
			_timeout=setTimeout(scrollToLoop, 15000);
		};

		

		window.scrollSection=scrollToSection;
		

		var scrollAlign=function(to){

			if(typeof to != 'number'){
				to=((Math.round(window.scrollY/window.innerHeight))%sections)*window.innerHeight;
			}

			scrollTo({
				top: to,
				left: 0,
				behavior: "instant"
			});

		}


		var togglePlay=function(btn){
			if(play){
				play=false;
				if(_timeout){
					clearTimeout(_timeout);
				}
				if(btn){
					btn.classList.remove('playing');
				}

				return;
			}

			play=true;
			_timeout=setTimeout(scrollToLoop, 5000);
			if(btn){
				btn.classList.add('playing');
			}

		}

		window.togglePlay=togglePlay;

		window.addEventListener('resize', scrollAlign);

	})()

</script>

</body>
</html>
