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
#floating-cart {
        position: fixed;
        bottom: 115px;
        right: 20px;
        background-color: #ffffff;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 10px;
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
  transform: translate(-33%, -20%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.btn12456q {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-30%, -20%);
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
  transform: translate(-27%, -20%);
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
.btn12456w {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-33%, -20%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.btn12456e {
  float: left;
  transform: translate(0%, -10%);
  background-color: black;
  transform: translate(-30.5%, -20%);
  color: white;
  font-size: 15px;
  padding: 0px 200px;
  text-decoration: none;
  border:none;
  cursor: pointer;
  border-radius: 0px;
  text-align: left;
}
.cart {
        margin-top: 20px;
        border: 2px solid #ccc;
        padding: 10px;
		background-color:BLACK;
		color:WHITE;
    }
 .zoom45 {
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
  align-items: CENTER;
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
.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}
</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
  <a href="snacks.php"><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
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
  <img src="arc.jpg"  width="1263" height="600px">
</div>
	<div class="grid-container">
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;MINUTE&nbsp;BURGER W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS',162.00)">
    <img src="1.png" style="width:250px">
    <button class="btn12456">
      <p>B1&nbsp;T1&nbsp;MINUTE&nbsp;BURGER W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS</p>
      <p>162.00 PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;CHICKEN&nbsp;TIME W/&nbsp;NACHOS&nbsp;DRINKS',172.00)">
    <img src="2.png" style="width:250px">
    <button class="btn12456">
      <p>B1&nbsp;T1&nbsp;CHICKEN&nbsp;TIME W/&nbsp;NACHOS&nbsp;DRINKS</p>
      <p>172.00 PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;DOUBLE&nbsp;MINUTE BURGER&nbsp;W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS', 193.00)">
    <img src="3.png" style="width:250px">
    <button class="btn12456q">
      <p>B1&nbsp;T1&nbsp;DOUBLE&nbsp;MINUTE BURGER&nbsp;W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS</p>
      <p>193.00 PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHICKEN&nbsp;TIME W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS', 199.00)">
    <img src="4.png" style="width:250px">
    <button class="btn12456q">
      <p>B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHICKEN&nbsp;TIME W/&nbsp;NACHOS&nbsp;&&nbsp;DRINKS</p>
      <p>199.00 PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;MINUTE&nbsp;BURGER W/&nbsp;DRINKS',93.00)">
		<img src="5.png" style="width:261px " >
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;MINUTE&nbsp;BURGER W/&nbsp;DRINKS</p>
		<p>93.00 PHP 
		</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz"class="item" onclick="addToCart('MINUTE&nbsp;BURGER W/&nbsp;DRINKS',106.00)">
		<img src="6.png" style="width:261px">
		<button class="btn12456">		
		<p>MINUTE&nbsp;BURGER W/&nbsp;DRINKS</p>
		<p>106.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;CHICKEN&nbsp;TIME W/&nbsp;DRINKS',103.00)">
		<img src="7.png" style="width:260px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;CHICKEN&nbsp;TIME W/&nbsp;DRINKS</p>
		<p>103.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHEESY BURGER&nbsp;W/&nbsp;DRINKS',142.00)">
		<img src="8.png" style="width:260px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHEESY BURGER&nbsp;W/&nbsp;DRINKS</p>
		<p>142.00 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;DOUBLE&nbsp;MINUTE BURGER&nbsp;W/&nbsp;DRINKS',124.00)">
		<img src="9.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;DOUBLE&nbsp;MINUTE BURGER&nbsp;W/&nbsp;DRINKS</p>
		<p>124.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHICKEN TIME&nbsp;W/&nbsp;DRINKS',130.00)">
		<img src="10.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;DOUBLE&nbsp;CHICKEN TIME&nbsp;W/&nbsp;DRINKS</p>
		<p>130.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DADDYS&nbsp;BEST BUNDLE',528.00)">
		<img src="11.png" style="width:250px">
		<button class="btn12456">		
		<p>DADDY'S&nbsp;BEST BUNDLE</p>
		<p>528.00 PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MOMMYS&nbsp;BEST BUNDLE',462.00)">
		<img src="12.png" style="width:250px" >
		<button class="btn12456">		
		<p>MOMMY'S&nbsp;BEST BUNDLE</p>
		<p>462.00 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SISSY&nbsp;BUNDLE BUNSULIT',531.00)">
		<img src="13.png" style="width:250px">
		<button class="btn12456">		
		<p>SISSY&nbsp;BUNDLE BUNSULIT</p>
		<p>531.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;STEAKBURGER&nbsp;+ LESLIES&nbsp;PREMIUM&nbsp;CHIPS',224.00)">
		<img src="14.png" style="width:250px">
		<button class="btn12456w">		
		<p>B1&nbsp;T1&nbsp;STEAKBURGER&nbsp;+ LESLIE'S&nbsp;PREMIUM&nbsp;CHIPS</p>
		<p>224.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BEEF&nbsp;SHAWARMA&nbsp;BURGER WITH&nbsp;LESLIES&nbsp;PREMIUM',227.00)">
		<img src="15.png" style="width:250px">
		<button class="btn12456e">		
		<p>B1&nbsp;T1&nbsp;BEEF&nbsp;SHAWARMA&nbsp;BURGER WITH&nbsp;LESLIE'S&nbsp;PREMIUM </p>
		<p>227.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;FRENCH&nbsp;ONION&nbsp;FRANKS + LESLIES PREMIUM&nbsp;CHIPS', 227.00)">
		<img src="26.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;French&nbsp;Onion&nbsp;Franks + Leslie's Premium&nbsp;Chips</p>
		<p>228.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BACON&nbsp;CHEESE BURGER&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIPS',236.00)">
		<img src="17.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;BACON&nbsp;CHEESE BURGER&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>236.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;CHILI&nbsp;CON CARNE&nbsp;CHEESE&nbsp;FRANKS&nbsp;+ LESLIES PREMIUM CHIPS',231.00)">
		<img src="18.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;CHILI&nbsp;CON CARNE&nbsp;CHEESE&nbsp;FRANKS&nbsp;+ LESLIE'S PREMIUM CHIPS</p>
		<p>231.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BLACK&nbsp;PEPPER BURGER&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIP',228.00)">
		<img src="19.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;BLACK&nbsp;PEPPER BURGER&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIP</p>
		<p>228.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BEEF&nbsp;SHAWARMA BURGER&nbsp;WITH&nbsp;LESLIES PREMIUM&nbsp;CHIPS',227.00)">
		<img src="20.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;BEEF&nbsp;SHAWARMA BURGER&nbsp;WITH&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>227.00 PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;ROASTED&nbsp;SESAME CHICKEN&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIPS',233.00)">
		<img src="21.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;ROASTED&nbsp;SESAME CHICKEN&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>233.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BACON&nbsp;CHEESE BURGER&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIPS',176.00)">
		<img src="22.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;BACON&nbsp;CHEESE BURGER&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>176.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;CHILI&nbsp;CON&nbsp;CARNE CHEESE&nbsp;FRANKS&nbsp;+ LESLIES&nbsp;PREMIUM&nbsp;CHIPS',172.00)">
		<img src="23.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;CHILI&nbsp;CON&nbsp;CARNE CHEESE&nbsp;FRANKS&nbsp;+ LESLIE'S&nbsp;PREMIUM&nbsp;CHIPS</p>
		<p>172.00 PHP</p>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;BLACK&nbsp;PEPPER BURGER&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIPS',169.00)">
		<img src="24.png" style="width:250px">
		<button class="btn12456">		
		<p>B1&nbsp;T1&nbsp;BLACK&nbsp;PEPPER BURGER&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>169.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;50&nbsp;/&nbsp;50&nbsp;VEGGIE PREMIUM&nbsp;CHICKEN&nbsp;BURGER + LESLIES&nbsp;PREMIUM&nbsp;CHIPS',220.00)">
		<img src="25.png" style="width:250px">
		<button class="btn1245633">		
		<p>B1&nbsp;T1&nbsp;50&nbsp;/&nbsp;50&nbsp;VEGGIE PREMIUM&nbsp;CHICKEN&nbsp;BURGER + LESLIE'S&nbsp;PREMIUM&nbsp;CHIPS</p>
		<p>220.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('B1&nbsp;T1&nbsp;ROASTED&nbsp;SESAME CHICKEN&nbsp;BURGER&nbsp;+&nbsp;LESLIES PREMIUM&nbsp;CHIPS',233.00)">
		<img src="16.png" style="width:250px">
		<button class="btn1245633">		
		<p>B1&nbsp;T1&nbsp;ROASTED&nbsp;SESAME CHICKEN&nbsp;BURGER&nbsp;+&nbsp;LESLIE'S PREMIUM&nbsp;CHIPS</p>
		<p>233.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ICED&nbsp;CHOCO',36.00)">
		<img src="27.png" style="width:250px">
		<button class="btn12456">		
		<p>ICED CHOCO</p>
		<p>36.00 PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRUIT&nbsp;TWIST',36.00)">
		<img src="28.png" style="width:250px">
		<button class="btn12456">		
		<p>FRUIT TWIST</p>
		<p>36.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT&nbsp;COFFEE',24.00)">
		<img src="30.png" style="width:250px">
		<button class="btn12456">		
		<p>HOT&nbsp;COFFEE</p>
		<p>24.00 PHP</p>
		</button>
	</div>	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOT&nbsp;CHOCO',26.00)">
		<img src="31.png" style="width:250px">
		<button class="btn12456">		
		<p>HOT&nbsp;CHOCO</p>
		<p>26.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CALAMANTEA',36.00)">
		<img src="32.png" style="width:250px">
		<button class="btn12456">		
		<p>CALAMANTEA</p>
		<p>36.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WATER',26.00)">
		<img src="33.png" style="width:250px">
		<button class="btn12456">		
		<p>WATER</p>
		<p>26.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KRAZY&nbsp;WINTERMELON&nbsp;MILKTEA',43.00)">
		<img src="29.png" style="width:250px">
		<button class="btn12456">		
		<p>KRAZY&nbsp;WINTERMELON MILKTEA</p>
		<p>43.00 PHP</p>
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

