<?php include "Header.php"?>
<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>FoodLOVERS</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 </head>
 <style>
	 *{
		 margin:0;
		 padding:0;
		 box-sizing: border-box;
		 font-family: sans-serif;
	 }
	 .container{
		 width: 100%;
		 height: auto;
		 background-color: #fff;
	 }
	 .main{
		 max-width: 1200px;
		 height: auto;
		 margin: 0 auto;
	 }

	 .slider{
		 width: 100%;
		 height: 500px;
		 background-image: url(https://mediabank.valkenhorst.nl/imagebank/images/263/image83500/c500x1400.jpg);
		 background-position: center;
		 display: flex;
		 align-items: center;
	 }
	 .slider .title{
		 width: 40%;
		 margin-left: 5%;
		 height: auto;
		 left: 9%;
	 }
	 .slider .title h1{
		 font-size:50px;
		 color: white;
		 line-height: 75px;
	 }
	 .slider .title h1 span{
		 color: orange !important;
		 font-size: 50px;
	 }
	 .slider .title p{
		 font-size: 15px;
		 color: white;
		 line-height: 1.5;
		 margin-top: 15px;
		 padding-right: 20px;
	 }
	 .slider .title .btn{
		 color: white;
		 background-color: green;
		 border-radius: 3px;
		 border-color: orange;
		 padding: 16px 30px;
		 text-align: center;
		 letter-spacing: 0.5px;
		 text-decoration: none;
		 margin-right: 10px;
		 line-height: 26px;
		 display: inline-block;
		 font-size: 25px;
		 font-family: Arial;
		 margin-top: 45px;
		 transition: 1s all;
	 }
	 .slider .title .btn:hover{
		 background-color: white;
		 color: green;
	 }
	 .flex-container{
		 margin-top: 250px;
		 clear: both;
		 float: left;
	 }
	 .main .flex-container .flex-items{
		 width: 20%;
		 display: inline-block;
		 text-align: center;
		 vertical-align: top;
		 margin-left: 46px;
	 }
	 .main .flex-container .flex-items h5{
		 font-size: 18px;
		 letter-spacing: 0.5px;
		 margin: 20px 0px;
	 }
	 .main .flex-container .flex-items p{
		 color: black;
	 }
	 .main .flex-container .flex-items2{
		 width: 33%;
		 height: auto;
		 float: left;
		 padding:0 15px;
	 }
	 .main .flex-container .flex-items2 h6{
		 letter-spacing: 3px;
		 font-size: 16px;
		 margin-bottom: 15px;
		 color: black;
	 }
	 .main .flex-container .flex-items2 h3{
		 letter-spacing: 0.5px;
		 font-size: 27px;
		 margin-bottom: 20px;
		 color: black;
		 line-height: 35px;
	 }
	 .main .flex-container .flex-items2 .read{
		 color: black;
		 text-decoration: none;
		 font-size: 25px;
		 border: 2px solid black;
		 background-color: yellow;
		 padding: 10px 25px;
		 transition: 0.3s all;
		 border-radius: 20px;
	 }
	 .flex-items2 ol{
		 margin-top: 15px;
		 margin-bottom: 40px;
	 }
	 .flex-items2 ol li{
		 padding-left: 20px;
		 color: #004C03;
		 margin: 0 0 10px;
		 font-size: 18px;
		 line-height: 23px;
		 font-style: italic;
	 }
	 .main .flex-container .flex-items2 .zoom img{
		 max-width: 300px;
		 height: 400px;
		 margin-left: 50px;
	 }
	 .alipon{
		 width: 100%;
		 padding: 72px 0px;
		 background-size: cover;
		 clear: both;
		 float: left;
	 }
	 .alipon .heading{
		 box-shadow: 5px 5px 5px #004C03;
	 }
	 .alipon .heading h2{
		 font-size: 35px;
		 line-height: 35px;
		 margin-bottom: 20px;
		 letter-spacing: 0.5px;
		 text-align: center;
		 color: #004C03;
	 }
	 .alipon .heading p{
		 width: 60%;
		 margin: 0 auto;
		 text-align: center;
		 line-height: 25px;
		 color: green;
	 }
	 .alipon .c-1{
		 width: 33.33%;
		 float: left;
		 padding: 0 15px;
		 margin-top: 60px;
	 }
	 .alipon .c-1 img{
		 width: 100%;
		 height: 350px;
		 display: block;
		 margin: 0 auto;
	 }
	 .alipon .c-1 .text-box{
		 padding: 7%;
		 background-color: yellow;
		 width: 100%;
		 text-align: center;
		 border-bottom: 3px dotted black;
	 }
	 .alipon .c-1 .text-box h4{
		 text-transform: uppercase;
		 font-size: 22px;
		 line-height: 22px;
		 letter-spacing: 0.5px;
	 }
	 .darkside{
		 width: 100%;
		 padding: 72px 0;
		 background-color: black;
		 float: left;
		 clear: both;
	 }
	 .darkside .col-1{
		 width: 33.333%;
		 float: left;
		 padding: 0 15px;
		 margin-top: 40px;
	 }
	 .darkside .col-1 .icon{
		 float: left;
		 margin: 0 20px 0 0;
		 color: yellow !important;
		 font-size: 32px;
	 }
	 .darkside .col-1 .text-box-1{
		 padding-bottom: 60px;
		 display: block;
	 }
	 .darkside .col-1 .text-box-1 h5{
		 font-size: 18px;
		 line-height: 23px;
		 text-transform: uppercase;
		 letter-spacing: 0.5px;
		 color: white;
		 margin-bottom: 5px;
	 }
	 .darkside .col-1 .text-box-1 p{
		 font-size: 14px;
		 line-height: 23px;
		 color: white;
		 margin: 0 0 10px;
		 opacity: 0.5;
	 }


	 .slider1 .menu ul{
		 overflow: hidden;
	 }
	 .slider1 .menu > li{
		 float: left;
	 }
	 .slider1 .menu a
	 {
		 padding: 0;
		 margin: 10px;
		 display: block;
		 text-decoration: none;
		 text-align:center;
		 font-family: monospace;
		 font-weight: bold;
		 font-size: 50px;
		 color: #004C03;
	 }
	 .slider1 .menu li a:hover{
		 color: white;
		 background-color: #004C03;
	 }


	 .style-table th, td{
		 text-align: center;
		 border: 2px solid black;
		 border-collapse: collapse;
	 }
	 .style-table img{
		 width: 50px;
		 height: 50px;
	 }


	 .container {
		 position:absolute;
		 top:50%;
		 left:50%;
		 transform:translate(-50%,-50%);
	 }

 </style>
<body>
<div class="container">
		<div class="slider">
			<div class="title">
				<h1>WELCOME, <span>FOODLOVERS!</span></h1>
				<p>here you can find 100+ recipes of delicious food!</p>
				<a href="menu.php" class="btn">SPECIAL FOR YOU</a>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="flex-container">
			<div class="flex-items">
				<h5>Julia Child</h5>
				<p>"Cooking is one failure after another, and that’s how you finally learn."</p>
			</div>
			<div class="flex-items">
				<h5>Julia Child</h5>
				<p>"Cooking is one failure after another, and that’s how you finally learn."</p>
			</div>
			<div class="flex-items">
				<h5>Julia Child</h5>
				<p>"No one is born a great cook, one learns by doing."</p>
			</div>
			<div class="flex-items">
				<h5>Julia Child</h5>
				<p>"No one is born a great cook, one learns by doing."</p>
			</div>
		</div>
		<div class="flex-container">
			<div class="flex-items2">
				<h6>Do you know where are the best recipes?</h6>
				<h3>The 18 <mark>Best Cookbooks</mark> Of 2019</h3>
				<ol>
					<li>The Pioneer Woman Cooks</li>
					<li>The Easy College Cookbook</li>
					<li>Salt & Straw</li>
					<li>Asma's Indian Kitchen</li>
					<li>Cake Confidence</li>
				</ol>
				<a href="https://www.delish.com/restaurants/g26588775/best-cookbooks-2019/" class="read">GET MORE</a>
			</div>
			<div class="flex-items2">
				<div class="zoom">
					<img src="MainpgPhotos/1.jpg" title="VERY GOOD BOOK">
				</div>
			</div>
			<div class="flex-items2">
				<div class="zoom">
					<img src="MainpgPhotos/2.jpg" title="VERY GOOD BOOK">
				</div>
			</div>
		</div>
	</div>
 </div>
 <section class="alipon">
	<div class="main">
		<div class="heading">
			<h2>Are you ready to cook with us?</h2>
			<p>Follow these steps to become a SHEF!</p>
		</div>
		<div class="c-1">
			<img src="MainpgPhotos/12.jpg">
			<div class="text-box">
				<h4>Get ready!</h4>
			</div>
		</div>
		<div class="c-1">
			<img src="MainpgPhotos/11.jpg">
			<div class="text-box">
				<h4>Go to the MENU</h4>
			</div>
		</div>
		<div class="c-1">
			<img src="MainpgPhotos/10.jpg">
			<div class="text-box">
				<h4>Start cooking!</h4>
			</div>
		</div>
	</div>
</section>
<section class="darkside">
	<div class="main">
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>History</h5>
			<p>This website was realized by student during the bachelor course</p>
			</div>
		</div>
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>Our aims</h5>
			<p>We want our website to be used by many people.</p>
			</div>
		</div>
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>Author of the website</h5>
			<p>Aruzhan Bakhazatkhanova (1st year student of university)</p>
			</div>
		</div>
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>Our sponsors</h5>
			<p>Nurgul Assanova - teacher of ICT at Astana IT Univeristy</p>
			</div>
		</div>
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>Future development</h5>
			<p>We are working on adding more recipes with videos!</p>
			</div>
		</div>
		<div class="col-1">
			<div class="icon">
				<i class="fa fa-cloud"></i>
			</div>
			<div class="text-box-1">
			<h5>Contacts</h5>
			<p>+7(701)1552233 Arailym Talgatkyzy</p>
			</div>
		</div>
	</div>
</section>
 </body>
 </html>
