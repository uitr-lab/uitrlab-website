<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UiTR Lab Software | Transportation Micro-simulation Software</title>
	<style type="text/css">
		
		header {
		    height: 300px;
		    background: black;
		    background: linear-gradient(0, #00000030, #00000090);
		    border-bottom: 10px solid #145cab;
		    box-shadow: 0 0 5px #00000099;

		    position: relative;
    		overflow: hidden;
		}

		header video{
			opacity: 0.3;
		    filter: grayscale(0.8);
		    left: 0;
		    bottom: -150px;
		    position: absolute;
		    width: 100vw;
		    min-height: 1000px;
		    min-width: 1500px;
		}

		body, html {
		    margin: 0;
		    font-family: sans-serif;
		    color: #333333;
		}

		

		header + section>* {
			
			margin-left: auto;
    		margin-right: auto;
		}
		
		section>h1 {
		    color: #333333;
		    font-size: 30px;
		}

		section.main>h1 {
		    font-size: 40px;
		    color: #135cab;
		}


		div#ubc7-logo {
		    position: absolute;
		    top: 10px;
		    left: 10px;
		    background-image: url(https://cdn.ubc.ca/clf/7.0.4/img/ubc7-clf-sprite-white.png);
		    background-repeat: no-repeat;
		    width: 115px;
		    height: 115px;
		    color: transparent;

			background-position: 32px 14px;
			margin-left: -15px;
			min-width: 115px;

		}

		div#ubc7-logo:after {
		    content: "";
		    background-image: url(uitr-white.png);
		    width: 200px;
		    height: 80px;
		    display: inline-block;
		    position: absolute;
		    left: 100%;
		    top: 19px;
		    background-size: contain;
		    background-repeat: no-repeat;
		    background-position: center;
		}

		div#ubc7-logo>a {
		    color: transparent;
		}

		header nav {
			position: absolute;
			right: 10px;
			top: 10px;
			margin-left: 150px;
		}

		
		nav a, a.btn{
			display: inline-block;
			padding: 10px 20px;
			text-decoration: none;
			color: #333333;
			font-size: 20px;
			border-radius: 3px;
			margin: 5px;
		}

		header nav a {
			backdrop-filter: blur(4px);
			background-color: #ffffff1c;
			text-shadow: 0 0 10px #ffffff9e, 0 0 5px #ffffff9e;
		}

		a.geoportal-btn {
			background-color: #ce3211;
			color: white;
			text-shadow: 0 0 5px #00000075;
			font-weight: 100;
			box-shadow: 0 0 3px #0000007a;
		}

		a.download-btn{
			background: #145cab;
    		color: white;
		}
		
		section {
		    text-align: center;
		    margin: auto;
		    max-width: 1000px;
		
		    padding: 30px;

		    position: relative;
		    min-height: 300px;
		}

		
		section>h1:first-child, section>h2:first-child 
		{
			margin-top: 80px;
		}

		section.city-pano:after {
			position: absolute;
			width: 100vw;
			content:"";
			background: rgba(0,0,0,0.05);
			height: 100%;
			left: calc( 50% - 50vw );
			z-index: -1;
			top: 0;
			background-image: url("citypano.jpg");
			background-size: cover;
			background-position: center;
			opacity: 0.2;
			filter: grayscale(1);
			border-top: 1px solid black;
			border-bottom: 1px solid black;
		}


		section.feature:after {
			position: absolute;
			width: 100vw;
			content:"";
			background: rgba(0,0,0,0.05);
			height: 100%;
			left: calc( 50% - 50vw );
			z-index: -1;
			top: 0;
			opacity: 0.2;
			border-top: 1px solid black;
			border-bottom: 1px solid black;
		}

		section>img:first-child {
		    float: left;
		    height: 200px;
		    border-radius: 5px;
		    box-shadow: 0 0 4px #000000b3;
		    margin: 14px 60px;
		}

		section.right-img{
			text-align: right;
		}

		section.left-img{
			text-align: left;
		}

		section.right-img>img:first-child {
			float: right;
		}


		section ul {
		    text-align: left;
		    line-height: 30px;
		}

		section.right-img ul {
			text-align: right;
			list-style: none;
		}

		section>img:first-child + h2 {
		    text-align: left;
		}

		section.right-img>img:first-child + h2 {
		    text-align: right;
		}



		section p {
		    line-height: 27px;
		}


	</style>
</head>
<body>
	<header>
		
		<video preload="none" autoplay="autoplay" loop="loop" muted="muted">
			<source src="simulation.mp4" type="video/mp4">
		</video>


		<div id="ubc7-logo">
            <a href="https://www.ubc.ca" title="The University of British Columbia (UBC)">The University of British Columbia</a>
        </div>

		<nav>
			<a href="https://uitr.ok.ubc.ca/" >UiTR Lab</a>
			<a href="https://caaf.uitrlab.ok.ubc.ca/" >Climate Action Awareness</a>
			<a href="https://survey.uitrlab.ok.ubc.ca/" >Survey Tool</a>
			<a href="https://geoportal.uitrlab.ok.ubc.ca/" class="geoportal-btn" >Geoportal</a>
		</nav>

	</header>
	<section class="main">
		
		<h1>UiTR Lab Software and Tools</h1>
		<h2>Transportation simulation Geoportal</h2>
		<p>An agent-based integrated transportation and land use modelling system that integrates population demographics, location choice, vehicle ownership, and daily activities within a unified modelling framework to predict the changes in land use pattern, transportation network and the environment over time and space for an entire urban region </p>

	</section>
	<section class="city-pano">
		<img src="okanagan.png" />
		<h2>Geoportal overview and capabilities</h2>
		 <ul>
			<li>Test the impacts of unprecedented events such as COVID-19</li>
			<li>Disentangle the interactions among transportation, and individual decisions</li>
			<li>Emissions and residential energy consumption</li>
		</ul> 
		<a href="https://geoportal.uitrlab.ok.ubc.ca/" class="download-btn btn">View</a>

	</section>
	<section class="right-img">
		<img src="filetransfer.png" />
		<h2>File Transfer Tool</h2>
		 <ul>
			<li>Share sensitive datasets with our data analysts</li>
			<li>Hosted securely on UBC servers</li>
		</ul> 
		<a href="https://uploader.uitrlab.ok.ubc.ca" class="more-btn btn">View more</a>
		
	</section>
	<section class="feature">
		<h2>Survey Tool</h2>
		<p>The UiTR Survey tool is a visual interface for quickly designing and publishing complex surveys, and forms.</p>
		<a href="https://survey.uitrlab.ok.ubc.ca" class="more-btn btn">View more</a><a href="https://survey.uitrlab.ok.ubc.ca/survey-tool-demo" class="more-btn btn">Try the demo</a>

	</section>
</body>
</html>