<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
  align-items: center;
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
  weight:5% 0;
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
  background-color: BLACK;
  transform: translate(-37%, -20%);
  color: WHITE;
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
  background-color: BLACK;
  transform: translate(-33%, -20%);
  color: WHITE;
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
  text-align: center;
  color: white;
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
.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}
	.button256 {
  background-color: #61ABFB; 
  border: none;
  color: black;
  padding: 15px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
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
    <a href="new info.php" >Profile</a>
	<a href="settings.php">Settings</a>
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
  <img src="223.jpg"  width="1263" height="60%">
</div>
	<div class="grid-container" >
	<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="BIGBREW.php">
		<img src="bigbrew.jpg" style="width:250px">
		<button class="btn12456">		
		<p>BIG&nbsp;BREW</p>
		<p>SANDOVAL<p>
		</button>
		</a>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="FOODPOLITICSBEV.php">
		<img src="politics.jpg" style="width:250px">
		<button class="btn12456">
		<p>FOOD&nbsp;POLITICS</p>
		<p>KENNETH</p>
		</button>
		</a>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="COFTEA.php">
		<img src="coftea.jpg" style="width:250px" >
		<button class="btn12456">
		<p>COF/TEA</p>
		<p>SANDOVAL</p>
		</button>
		</A>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="coffeedept.php">
		<img src="department.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>COFFEE&nbsp;DEPARTMENT</p>
		<p>DEL&nbsp;PILAR</p>
		</button>
		</a>
	</div>
	</div>
		<div class="grid-container" >
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="GUADA.php">
		<img src="guada.jpg" style="width:250px " >
		<button class="btn12456">		
		<p>CAFE&nbsp;GUADA</p>
		<p>DEL&nbsp;PILAR</p>
		</button>
		</a>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz"  >
<a href="JUNKYARD.php">
		<img src="junkyard.jpg" style="width:250px">
		<button class="btn12456">
		<p>JUNKYARD&nbsp;CAFE</p>
		<p>VELASCO</p>
		</button>
		</a>
		</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" >
	<a href="sip.php">
		<img src="sip.jpg" style="width:250px">
		<button class="btn12456">		
		<p>SIP&nbsp;TEA</p>
		<p>WILLAREY</p>
		</button>
		</a>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" >
	<a href="DRIPTEA.php">
		<img src="driptea.jpg" style="width:250px">
		<button class="btn12456">		
		<p>DRIPTEA</p>
		<p>SANDOVAL</p>
		</button>
		</a>
	</div>
		</div>
	<div class="grid-container" >
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="199x.php">
		<img src="snackcafe.jpg" style="width:250px" >
		<button class="btn12456">		
		<p>199X</p>
		<p>VELASCO</p>
		</button>
		</a>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="rtea.php">
		<img src="rtea.jpg" style="width:250px">
		<button class="btn12456">		
		<p>RTea</p>
		<p>SANDOVAL</p>
		</button>
		</a>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" >
	<a href="THELABORATORY.php">
		<img src="laboratory.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>THE&nbsp;LABORATORY</p>
		<p>NAGPAYONG</p>
		</button>
		</A>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="MANGO CLASSICO.php">
		<img src="mango.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MANGO&nbsp;CLASSICO</p>
		<p>DE&nbsp;CASTRO</p>
		</button>
		</a>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" >
<a href="MR TEA.php">
		<img src="MRTEA.jpg" style="width:250px">
		<button class="btn12456">		
		<p>MR.&nbsp;TEA</p>
		<p>SANDOVAL</p>
		</button>
		</a>
	</div>
	</div>




<center>
<a href="AU.php"><button class="button256 button15">About Us</button></a>
<a href="contact1.php"><button class="button256 button25">Contact</button></a>
<a href="HC2.php"><button class="button256 button35">Help Center</button></a>
<a href="TC2.php"><button class="button256 button45">Terms & Condition</button></a>
</center>
</body>
</html>