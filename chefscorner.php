<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.img-hover-zoom {
  height: 190x; 
  width: 250px; 
  overflow: hidden; 
  align-items: center;
}

.img-hover-zoom img {
  transition: transform .3s ease;
  background-color: rgba(255, 255, 255, 0.8);
  text-align: left;
  align-items: left;
}
.img-hover-zoom:hover img {
  transform: scale(.9);
}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color: white;
	color: white;
	text-align: left;
}

.topnav {
  background-color: white;
   position: absolute;
  top: 0;
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.topnav a {
  float: left;
  color: black;
  text-align: center;
  padding: 5px 95px;
  text-decoration: none;
  font-size: 35px;

}

.topnav a.active {
  background-color: #04AA6D;
  color: black;
}

.topnavblue {
  float: right;
   width: 40%;
  height: 10px;
  weight:10% 0;
  padding-top: 100%;
  text-align: right;
  padding: 0px 5px;
  
}
.topnav a:hover {
    transition: transform .2s;
    -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(.9);
  }
button.btn12{
margin: 0px;
}
button:hover {
  opacity: 0.8;
}

 .zoom {
  background-color: white;
  transition: transform .2s;
  margin: -1px 5px;
  border: 2px solid #61ABFB;
  color: black;
  border-radius: 10px;
}
button.btn12{
margin: 0px;
}
button.btn13{
margin: 0px;

}

.zoom:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.container6 {
  text-align: left;
  color: white;
  
}
.btn12456 {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-37%, -28%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.btn1245633 {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-33%, -28%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.btn1245644 {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-30%, -28%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  padding: 40px 120px;
  align-items: left;
 }

.container6 {
  text-align: left;
  color: white;
}
.cart {
        margin-top: 20px;
        border: 2px solid #ccc;
        padding: 10px;
		background-color:BLACK;
		color:WHITE;
		bottom: 65px;
    } .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -3px 0px;
  color: black;
  border-radius: 10px;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.zoom45.btn12 {
  background-color: black;
  border: none;
  cursor: pointer;
  padding: 3px 0px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: black;
  min-width: 5px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: center;
    left: 20%;
    transform: translateX(0%);
	border-radius: 10px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  color: white;
  padding: 5px 30px;
  margin: -2px 7px;
  text-decoration: none;
  display: block;
  text-align: center;
  transform: translate(-5%);
  font-size: 27px;
  border-radius: 10px;
}

.dropdown-content a:hover {
  background-color: black;
}
#floating-cart {
        position: fixed;
        bottom: 115px;
        right: 20px;
        background-color: #ffffff;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
    }
	.button256 {
  background-color: #61ABFB; 
  border: none;
  color: black;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  border-radius: 10px;
}
.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}
.remove-button {
    background-color: black;
    color: white;
    border: none;
    padding: 20px -5%;
	font-size: 13px;
    cursor: pointer;
	font-family: sans-serif;
    float: right;
}
	.button2567 {
  background-color: #61ABFB; 
  border: none;
  color: black;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
  border-radius: 10px;
  position: fixed;
        bottom: 55px;
        right: 124px;
}

.button15 {width: 180px;}

.hidden {
            display: none;
        }
		
		
		input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 5px 5px;
  border: none;
  border-radius: 10px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}


</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
  <a href="new 2.php"><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnavblue">
  <div class="dropdown">
  <button class="zoom45 btn12"> 
    <a href="#"><img src="789.jpg" width="28" height="26"></a>
  </button>
  <div class="dropdown-content">
    <!-- Dropdown content here --> 
    <a href="personal.php" >Profile</a>
	<a href="newdark.php">Settings</a>
	<a href="sample.php">Log Out</a>
  </div>
</div>
</div>
</div>
  </header>
</div>
<br>
<br>
<br>
<br>
<br>
<div class="container6">
  <img src="cc.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('GROUND PORK SPECIAL', 105.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="cc1.png" style="width:250px">
	<span>Product 1 - ₱105.00</span>
    <button class="btn1245633">
      <p>GROUND&nbsp;PORK SPECIAL</p>
      <p>105.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('GROUND BEEF' , 125.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc2.png" style="width:250px">
	<span>Product 2 - ₱125.00</span>
    <button class="btn12456">
      <p>GROUND BEEF</p>
      <p>125.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('PORK LIEMPO 0.5-INCH 500G', 225.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc3.png" style="width:250px">
	<span>Product 3 - ₱225.00</span>
    <button class="btn12456">
      <p>PORK&nbsp;LIEMPO 0.5-INCH&nbsp;500G</p>
      <p>225.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN DRUMSTICK 500G' ,115.00)">
    <img src="cc4.png" style="width:250px">
	<span>Product 4 - ₱115.00</span>
    <button class="btn1245633">
      <p>CHICKEN&nbsp;DRUMSTICK 500G</p>
      <p>115.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF SAMGYUPSAL 250G' ,170.00)">
    <img src="cc5.png" style="width:261px">
	<span>Product 5 - ₱170.00</span>
    <button class="btn1245633">
      <p>BEEF&nbsp;SAMGYUPSAL 250G</p>
      <p>170.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF CUBES' ,420.00)">
		<img src="cc6.png" style="width:261px " >
		<span>Product 6 - ₱420.00</span>
		<button class="btn12456">		
		<p>BEEF CUBES</p>
		<p>420.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF BONE MARROW' ,200.00)">
		<img src="cc7.png" style="width:261px">
		<span>Product 7 - ₱200.00</span>
		<button class="btn12456">		
		<p>BEEF&nbsp;BONE MARROW</p>
		<p>200.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF SAMGYUPSAL 500G',335.00)">
		<img src="cc8.png" style="width:261px">
		<span>Product 8 - ₱335.00</span>
		<button class="btn1245633">		
		<p>BEEF&nbsp;SAMGYUPSAL 500G</p>
		<p>335.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF SHANK (BULALO)',395.00)">
		<img src="cc9.png" style="width:250px">
		<span>Product 9 - ₱395.00</span>
		<button class="btn1245633">		
		<p>BEEF&nbsp;SHANK (BULALO)</p>
		<p>395.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF SUKIYAKI',420.00)">
		<img src="cc10.png" style="width:250px" >
		<span>Product 10 - ₱420.00</span>
		<button class="btn1245633">		
		<p>BEEF SUKIYAKI</p>
		<p>420.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GROUND BEEF',385.00)">
		<img src="cc11.png" style="width:250px">
		<span>Product 11 - ₱385.00</span>
		<button class="btn1245633">		
		<p>GROUND BEEF</p>
		<p>385.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GROUND PORK SPECIAL' ,320.00)">
		<img src="cc12.png" style="width:250px " >
		<span>Product 12 - ₱320.00</span>
		<button class="btn12456">		
		<p>GROUND&nbsp;PORK SPECIAL</p>
		<p>320.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('PORK ADOBO CUT (JOWLS)', 230.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc13.png" style="width:250px">
	<span>Product 13 - ₱230.00</span>
    <button class="btn12456">
      <p>PORK&nbsp;ADOBO&nbsp;CUT (JOWLS)</p>
      <p>230.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK BELLY CUT (JOWLS)' ,235.00)">
    <img src="cc14.png" style="width:250px">
	<span>Product 14 - ₱235.00</span>
    <button class="btn1245633">
      <p>PORK&nbsp;BELLY&nbsp;CUT (JOWLS)</p>
      <p>235.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK CHOP' ,340.00)">
    <img src="cc15.png" style="width:250px">
	<span>Product 15 - ₱340.00</span>
    <button class="btn1245633">
      <p>PORK CHOP</p>
	  <p> </p>
      <p>340.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK CUBES' ,325.00)">
		<img src="cc16.png" style="width:250px " >
		<span>Product 16 - ₱325.00</span>
		<button class="btn12456">		
		<p>PORK CUBES</p>
		<p>325.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK CUBES 500G' ,180.00)">
		<img src="cc17.png" style="width:250px">
		<span>Product 17 - ₱180.00</span>
		<button class="btn1245633">		
		<p>PORK&nbsp;CUBES 500G</p>
		<p>180.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK KASIM',320.00)">
		<img src="cc18.png" style="width:250px">
		<span>Product 18 - ₱320.00</span>
		<button class="btn1245633">		
		<p>PORK KASIM</p>
		<p>320.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK LIEMPO 0.5 INCH',355.00)">
		<img src="cc19.png" style="width:250px">
		<span>Product 19 - ₱355.00</span>
		<button class="btn12456">		
		<p>PORK&nbsp;LIEMPO 0.5&nbsp;INCH</p>
		<p>355.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK PATA SLICE ',235.00)">
		<img src="cc20.png" style="width:250px" >
		<span>Product 20 - ₱235.00</span>
		<button class="btn12456">		
		<p>PORK&nbsp;PATA SLICE </p>
		<p>235.00&nbsp;PHP</p>
		</button>
	</div>
	  <div onclick="addToCart('PORK PIGUE', 320.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="cc21.png" style="width:250px">
	<span>Product 21 - ₱320.00</span>
    <button class="btn12456">
      <p>PORK PIGUE</p>
      <p>320.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('PORK PIGUE 500G' , 170.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc22.png" style="width:250px">
	<span>Product 22 - ₱170.00</span>
    <button class="btn1245633">
      <p>PORK&nbsp;PIGUE 500G</p>
      <p>170.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('PORK SAMGYUPSAL 500G', 90.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc23.png" style="width:250px">
	<span>Product 23 - ₱90.00</span>
    <button class="btn1245633">
      <p>PORK&nbsp;SAMGYUPSAL 500G</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK SINIGANG CUT SPECIAL' ,270.00)">
    <img src="cc24.png" style="width:250px">
	<span>Product 24 - ₱270.00</span>
    <button class="btn1245633">
      <p>PORK&nbsp;SINIGANG&nbsp;CUT SPECIAL</p>
      <p>270.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN LEG QUARTER' ,195.00)">
    <img src="cc25.png" style="width:261px">
	<span>Product 25 - ₱195.00</span>
    <button class="btn12456">
      <p>CHICKEN&nbsp;LEG QUARTER</p>
      <p>195.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN BACON 500G' ,215.00)">
		<img src="cc26.png" style="width:261px " >
		<span>Product 26 - ₱215.00</span>
		<button class="btn12456">		
		<p>CHICKEN&nbsp;BACON 500G</p>
		<p>215.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON KAWALI 250G' ,160.00)">
		<img src="cc27.png" style="width:261px">
		<span>Product 27 - ₱160.00</span>
		<button class="btn1245633">		
		<p>LECHON&nbsp;KAWALI 250G</p>
		<p>160.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON KAWALI 500G',315.00)">
		<img src="cc28.png" style="width:261px">
		<span>Product 28 - ₱315.00</span>
		<button class="btn1245633">		
		<p>LECHON&nbsp;KAWALI 500G</p>
		<p>315.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON KAWALI 1KG',590.00)">
		<img src="cc29.png" style="width:250px">
		<span>Product 29 - ₱590.00</span>
		<button class="btn1245633">		
		<p>LECHON&nbsp;KAWALI 1KG</p>
		<p>590.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON BAGNET 250G',185.00)">
		<img src="cc30.png" style="width:250px" >
		<span>Product 30 - ₱185.00</span>
		<button class="btn1245633">		
		<p>LECHON&nbsp;BAGNET 250G</p>
		<p>185.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('GROUND PORK SPECIAL 500G', 170.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="cc31.png" style="width:250px">
	<span>Product 31 - ₱170.00</span>
    <button class="btn1245633">
      <p>GROUND&nbsp;PORK&nbsp;SPECIAL 500G </p>
      <p>170.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('GROUND BEEF 500G ' , 225.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc32.png" style="width:250px">
	<span>Product 32 - ₱225.00</span>
    <button class="btn12456">
      <p>GROUND&nbsp;BEEF 500G </p>
      <p>225.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BEEF CUBES 500G', 225.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc33.png" style="width:250px">
	<span>Product 33 - ₱225.00</span>
    <button class="btn1245633">
      <p>BEEF&nbsp;CUBES 500G</p>
      <p>225.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK CHOP 500G' ,195.00)">
    <img src="cc34.png" style="width:250px">
	<span>Product 34 - ₱195.00</span>
    <button class="btn1245633">
      <p>PORK&nbsp;CHOP 500G</p>
      <p>195.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEEF SUKIYAKI 500G' ,225.00)">
    <img src="cc35.png" style="width:250px">
	<span>Product 35 - ₱225.00</span>
    <button class="btn1245633">
      <p>BEEF&nbsp;SUKIYAKI 500G</p>
      <p>225.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK LIEMPO ' ,355.00)">
		<img src="cc36.png" style="width:250px " >
		<span>Product 36 - ₱355.00</span>
		<button class="btn12456">		
		<p>PORK LIEMPO </p>
		<p>355.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK MASK' ,195.00)">
		<img src="cc37.png" style="width:250px">
		<span>Product 37 - ₱195.00</span>
		<button class="btn12456">		
		<p>PORK MASK</p>
		<p>195.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK PATA FRONT',235.00)">
		<img src="cc38.png" style="width:250px">
		<span>Product 38 - ₱235.00</span>
		<button class="btn1245633">		
		<p>PORK&nbsp;PATA FRONT</p>
		<p>235.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK SINIGANG CUT SPECIAL 500G',135.00)">
		<img src="cc39.png" style="width:250px">
		<span>Product 39 - ₱135.00</span>
		<button class="btn1245633">		
		<p>PORK&nbsp;SINIGANG&nbsp;CUT SPECIAL 500G</p>
		<p>135.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN DRUMSTICK ',195.00)">
		<img src="cc40.png" style="width:250px" >
		<span>Product 40 - ₱195.00</span>
		<button class="btn1245633">		
		<p>CHICKEN DRUMSTICK </p>
		<p>195.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN WINGS',250.00)">
		<img src="cc41.png" style="width:250px">
		<span>Product 41 - ₱250.00</span>
		<button class="btn12456">		
		<p>CHICKEN WINGS</p>
		<p>250.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('REGULAR BURGER PATTY 100G ' ,230.00)">
		<img src="cc42.png" style="width:250px " >
		<span>Product 42 - ₱230.00</span>
		<button class="btn1245633">		
		<p>REGULAR&nbsp;BURGER&nbsp;PATTY 100G </p>
		<p>230.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('LECHON BAGNET ', 660.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="cc43.png" style="width:250px">
	<span>Product 43 - ₱660.00</span>
    <button class="btn12456">
      <p>LECHON BAGNET </p>
      <p>660.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON BAGNET' ,345.00)">
    <img src="cc44.png" style="width:250px">
	<span>Product 44 - ₱345.00</span>
    <button class="btn12456">
      <p>LECHON BAGNET</p>
      <p>345.00&nbsp;PHP</p>
    </button>
  </div>
	</div>
	
	<center>
<a href="AU.php"><button class="button256 button15">About Us</button></a>
<a href="contact1.php"><button class="button256 button25">Contact</button></a>
<a href="HC2.php"><button class="button256 button35">Help Center</button></a>
<a href="TC2.php"><button class="button256 button45">Terms & Condition</button></a>
</center>

<button class="button2567 button15" onclick="toggleDiv()">Check Order</button>
<div id="content" class="hidden">
    <div style="color:black; height: 400px; width:400px;overflow-y: auto;" id="floating-cart" class="cart">
        <ul id="cart-items"></ul>
        <p>Total Price: <span id="total-price">0.00</span></p>
        
        <div class="container">
            <form action="checkout.php">
                <label for="email"><b>Costumer Name </b></label>
    <input type="text" placeholder="Costumer Name" name="name" required>
                <br>
				<label for="email"><b>Contact Number </b></label>
    <input type="text" placeholder="Contact Number" name="number" required>
                <br>
                <label for="email"><b>Address </b></label>
    <input type="text" placeholder="Address" name="address" required>
                <br>
                <label for="country">Mode of Payment</label>
                <select id="country" name="country">
                    <option value="australia">Cash on Delivery</option>
                </select>
                <br>
                <label for="subject">Note to Rider</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>
            
		<a href="checkout.php"><button class="button256 button15" "type="submit" required>Check Out</button></a>
		</form>
        <button class="button256 button15" onclick="cancel()">Cancel</button>
		
    </div>
</div>


</body>
</html>
<script>
let cartItems = {};

        function addToCart(item, price) {
            if (cartItems[item]) {
                cartItems[item].quantity++;
            } else {
                cartItems[item] = { price: price, quantity: 1 };
            }
            renderCart();
        }

        function removeFromCart(item) {
            if (cartItems[item] && cartItems[item].quantity > 0) {
                cartItems[item].quantity--;
                if (cartItems[item].quantity === 0) {
                    delete cartItems[item];
                }
            }
            renderCart();
        }

        function getTotalPrice() {
            let total = 70;
            Object.keys(cartItems).forEach(item => {
                total += cartItems[item].price * cartItems[item].quantity;
            });
            return total.toFixed(2);
        }

        function renderCart() {
            const cartItemsElement = document.getElementById("cart-items");
            const totalPriceElement = document.getElementById("total-price");
            cartItemsElement.innerHTML = "";
            Object.keys(cartItems).forEach(item => {
                const li = document.createElement("li");
                li.textContent = `${item} x ${cartItems[item].quantity}`;
                        const removeButton = document.createElement("button");
        removeButton.textContent = "Remove";
        removeButton.className = "remove-button";
        removeButton.onclick = () => removeFromCart(item);
                li.appendChild(removeButton);
                cartItemsElement.appendChild(li);
            });
            totalPriceElement.textContent = getTotalPrice();
        }

        function order() {
            const items = Object.keys(cartItems).map(item => `${item} x ${cartItems[item].quantity}`).join("\n");
            alert(`Ordered Items:\n${items}\nTotal Price: ₱${getTotalPrice()}`);
            cartItems = {};
            renderCart();
        }

        function cancel() {
            cartItems = {};
            renderCart();
        }
		
		function toggleDiv() {
            const content = document.getElementById("content");
            content.classList.toggle("hidden");
        }
    </script>

