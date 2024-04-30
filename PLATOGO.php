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
  <a href="main3.php"><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
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
  <img src="ptogo.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('CHICKSITAP', 120.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="p1.jpg" style="width:250px">
	<span>Product 1 - ₱120.00</span>
    <button class="btn12456">
      <p>CHICKSITAP</p>
      <p>120.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('PORKSITAP' , 120.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p2.jpg" style="width:250px">
	<span>Product 2 - ₱120.00</span>
    <button class="btn12456">
      <p>PORKSITAP</p>
      <p>120.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('LIEMPOSITAP', 130.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p3.jpg" style="width:250px">
	<span>Product 3 - ₱130.00</span>
    <button class="btn12456">
      <p>LIEMPOSITAP</p>
      <p>130.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HUNGARIANSITAP' ,110.00)">
    <img src="p4.jpg" style="width:250px">
	<span>Product 4 - ₱110.00</span>
    <button class="btn12456">
      <p>HUNGARIANSITAP</p>
      <p>110.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CORDONSITAP' ,130.00)">
    <img src="p5.jpg" style="width:261px">
	<span>Product 5 - ₱130.00</span>
    <button class="btn12456">
      <p>CORDONSITAP</p>
      <p>130.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MALINGSITAP' ,110.00)">
		<img src="p6.jpg" style="width:261px " >
		<span>Product 6 - ₱110.00</span>
		<button class="btn12456">		
		<p>MALINGSITAP</p>
		<p>110.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BUFFALOSITAP' ,130.00)">
		<img src="p7.jpg" style="width:261px">
		<span>Product 7 - ₱130.00</span>
		<button class="btn12456">		
		<p>BUFFALOSITAP</p>
		<p>130.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TAPSIHOT OR LONG',100.00)">
		<img src="p8.jpg" style="width:261px">
		<span>Product 8 - ₱100.00</span>
		<button class="btn1245633">		
		<p>TAPSIHOT&nbsp;OR&nbsp;LONG</p>
		<p>100.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKSIHOT OR LONG',100.00)">
		<img src="p9.jpg" style="width:250px">
		<span>Product 9 - ₱100.00</span>
		<button class="btn1245633">		
		<p>CHICKSIHOT&nbsp;OR&nbsp;LONG</p>
		<p>100.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORKSIHOT OR LONG',100.00)">
		<img src="p10.jpg" style="width:250px" >
		<span>Product 10 - ₱100.00</span>
		<button class="btn1245633">		
		<p>PORKSIHOT&nbsp;OR&nbsp;LONG</p>
		<p>100.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LIEMPOSIHOT OR LONG',110.00)">
		<img src="p11.jpg" style="width:250px">
		<span>Product 11 - ₱110.00</span>
		<button class="btn1245633">		
		<p>LIEMPOSIHOT&nbsp;OR&nbsp;LONG</p>
		<p>110.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKSICORN' ,120.00)">
		<img src="p12.jpg" style="width:250px " >
		<span>Product 12 - ₱120.00</span>
		<button class="btn12456">		
		<p>CHICKSICORN</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('BUFFALOSICORD', 150.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p13.jpg" style="width:250px">
	<span>Product 13 - ₱150.00</span>
    <button class="btn12456">
      <p>BUFFALOSICORD</p>
      <p>150.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING PORKSILOG' ,95.00)">
    <img src="p14.jpg" style="width:250px">
	<span>Product 14 - ₱95.00</span>
    <button class="btn1245633">
      <p>SIZZLING&nbsp;PORKSILOG</p>
      <p>95.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING LIEMPOSILOG' ,110.00)">
    <img src="p15.jpg" style="width:250px">
	<span>Product 15 - ₱110.00</span>
    <button class="btn1245633">
      <p>SIZZLING&nbsp;LIEMPOSILOG</p>
      <p>110.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING SISIG' ,80.00)">
		<img src="p16.jpg" style="width:250px " >
		<span>Product 16 - ₱80.00</span>
		<button class="btn12456">		
		<p>SIZZLING&nbsp;SISIG</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING TAPSILOG' ,95.00)">
		<img src="p17.jpg" style="width:250px">
		<span>Product 17 - ₱95.00</span>
		<button class="btn12456">		
		<p>SIZZLING TAPSILOG</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING BURGER STEAK',100.00)">
		<img src="p18.jpg" style="width:250px">
		<span>Product 18 - ₱100.00</span>
		<button class="btn1245633">		
		<p>SIZZLING&nbsp;BURGER STEAK</p>
		<p>100.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING SHRIMP',120.00)">
		<img src="p19.jpg" style="width:250px">
		<span>Product 19 - ₱120.00</span>
		<button class="btn12456">		
		<p>SIZZLING SHRIMP</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WANTON MAMI',60.00)">
		<img src="p20.jpg" style="width:250px" >
		<span>Product 20 - ₱60.00</span>
		<button class="btn12456">		
		<p>WANTON MAMI</p>
		<p>60.00&nbsp;PHP</p>
		</button>
	</div>
	  <div onclick="addToCart('BEEF MAMI', 70.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="p21.jpg" style="width:250px">
	<span>Product 21 - ₱70.00</span>
    <button class="btn12456">
      <p>BEEF&nbsp;MAMI</p>
      <p>70.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BEEF WANTON MAMI' , 120.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p22.jpg" style="width:250px">
	<span>Product 22 - ₱120.00</span>
    <button class="btn1245633">
      <p>BEEF&nbsp;WANTON&nbsp;MAMI</p>
      <p>120.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('LECHON CON MAMI', 90.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p23.jpg" style="width:250px">
	<span>Product 23 - ₱90.00</span>
    <button class="btn1245633">
      <p>LECHON&nbsp;CON&nbsp;MAMI</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PROBEN' ,110.00)">
    <img src="p24.jpg" style="width:250px">
	<span>Product 24 - ₱110.00</span>
    <button class="btn12456">
      <p>PROBEN</p>
      <p>110.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SISIG' ,120.00)">
    <img src="p25.jpg" style="width:261px">
	<span>Product 25 - ₱120.00</span>
    <button class="btn12456">
      <p>SISIG</p>
      <p>120.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TOKWAT BABOY' ,120.00)">
		<img src="p26.jpg" style="width:261px " >
		<span>Product 26 - ₱120.00</span>
		<button class="btn12456">		
		<p>TOKWAT&nbsp;BABOY</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN WITH GRAVY' ,150.00)">
		<img src="p27.jpg" style="width:261px">
		<span>Product 27 - ₱150.00</span>
		<button class="btn1245633">		
		<p>CHICKEN&nbsp;WITH&nbsp;GRAVY</p>
		<p>150.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORKCHOP WITH GRAVY',160.00)">
		<img src="p28.jpg" style="width:261px">
		<span>Product 28 - ₱160.00</span>
		<button class="btn1245633">		
		<p>PORKCHOP&nbsp;WITH&nbsp;GRAVY</p>
		<p>160.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LIEMPO WITH GRAVY',200.00)">
		<img src="p29.jpg" style="width:250px">
		<span>Product 29 - ₱200.00</span>
		<button class="btn1245633">		
		<p>LIEMPO&nbsp;WITH&nbsp;GRAVY</p>
		<p>200.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BURGER STAKE 5PCS',160.00)">
		<img src="p30.jpg" style="width:250px" >
		<span>Product 30 - ₱160.00</span>
		<button class="btn1245633">		
		<p>BURGER&nbsp;STAKE&nbsp;5PCS</p>
		<p>160.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('SIZZLING HOTDOG', 120.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="p31.jpg" style="width:250px">
	<span>Product 31 - ₱120.00</span>
    <button class="btn1245633">
      <p>SIZZLING&nbsp;HOTDOG</p>
      <p>120.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BEEF TAPA' , 160.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p32.jpg" style="width:250px">
	<span>Product 32 - ₱160.00</span>
    <button class="btn12456">
      <p>BEEF TAPA</p>
      <p>160.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('CORDON BLEU FULL', 140.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="p33.jpg" style="width:250px">
	<span>Product 33 - ₱140.00</span>
    <button class="btn1245633">
      <p>CORDON&nbsp;BLEU FULL</p>
      <p>140.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('1 TO 4 COMBOS' ,140.00)">
    <img src="p34.jpg" style="width:250px">
	<span>Product 34 - ₱140.00</span>
    <button class="btn1245633">
      <p>BUFFALO&nbsp;WINGS 8PCS</p>
      <p>140.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('1 COMBO' ,200.00)">
    <img src="p35.jpg" style="width:250px">
	<span>Product 35 - ₱200.00</span>
    <button class="btn1245633">
      <p>GARLIC&nbsp;BUTTERED SHRIMP</p>
      <p>200.00&nbsp;PHP</p>
    </button>
  </div>
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

