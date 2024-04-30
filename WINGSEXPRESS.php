<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.img-hover-zoom {
  height: 190x; 
  width: 235px; 
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
  float: CENTER;
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
  transform: translate(-1%, -1%);
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
  padding: 40px 90px;
  align-items: center;
 }

.container6 {
  text-align: center;
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
  <img src="wingsexpress.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('HONEY GARLIC', 279.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="w1.jpg" style="width:250px">
	<span>Product 1 - ₱279.00</span>
    <button class="btn12456">
      <p>HONEY&nbsp;GARLIC</p>
      <p>279.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('SOY GARLIC' , 279.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w2.jpg" style="width:250px">
	<span>Product 2 - ₱279.00</span>
    <button class="btn12456">
      <p>SOY&nbsp;GARLIC</p>
      <p>279.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('HONEY BUTTER', 279.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w3.jpg" style="width:250px">
	<span>Product 3 - ₱279.00</span>
    <button class="btn12456">
      <p>HONEY&nbsp;BUTTER</p>
      <p>279.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GARLIC BUTTER' ,279.00)">
    <img src="w4.jpg" style="width:250px">
	<span>Product 4 - ₱279.00</span>
    <button class="btn12456">
      <p>GARLIC&nbsp;BUTTER</p>
      <p>279.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SPICY BUFFALO' ,279.00)">
    <img src="w5.jpg" style="width:261px">
	<span>Product 5 - ₱279.00</span>
    <button class="btn12456">
      <p>SPICY&nbsp;BUFFALO</p>
      <p>279.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SWEET CHILLI' ,279.00)">
		<img src="w6.jpg" style="width:261px " >
		<span>Product 6 - ₱279.00</span>
		<button class="btn12456">		
		<p>SWEET&nbsp;CHILLI</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HONEY MUSTARD' ,279.00)">
		<img src="w7.jpg" style="width:261px">
		<span>Product 7 - ₱279.00</span>
		<button class="btn12456">		
		<p>HONEY&nbsp;MUSTARD</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GARLIC PARMESAN',279.00)">
		<img src="w8.jpg" style="width:261px">
		<span>Product 8 - ₱279.00</span>
		<button class="btn1245633">		
		<p>GARLIC&nbsp;PARMESAN</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SPICY BBQ',279.00)">
		<img src="w9.jpg" style="width:250px">
		<span>Product 9 - ₱279.00</span>
		<button class="btn1245633">		
		<p>SPICY&nbsp;BBQ</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHEESY CHEESE',279.00)">
		<img src="w10.jpg" style="width:250px" >
		<span>Product 10 - ₱279.00</span>
		<button class="btn1245633">		
		<p>CHEESY&nbsp;CHEESE</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TERIYAKI',279.00)">
		<img src="w11.jpg" style="width:250px">
		<span>Product 11 - ₱279.00</span>
		<button class="btn1245633">		
		<p>TERIYAKI</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SALTED EGG' ,279.00)">
		<img src="w12.jpg" style="width:250px " >
		<span>Product 12 - ₱279.00</span>
		<button class="btn12456">		
		<p>SALTED&nbsp;EGG</p>
		<p>279.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('CHEESE', 59.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w13.jpg" style="width:250px">
	<span>Product 13 - ₱59.00</span>
    <button class="btn12456">
      <p>FRIES&nbsp;-&nbsp;CHEESE</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SALT AND PEPPER' ,59.00)">
    <img src="w14.jpg" style="width:250px">
	<span>Product 14 - ₱59.00</span>
    <button class="btn1245633">
      <p>FRIES&nbsp;-&nbsp;SALT&nbsp;AND&nbsp;PEPPER</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHILLI CHEESE' ,59.00)">
    <img src="w15.jpg" style="width:250px">
	<span>Product 15 - ₱59.00</span>
    <button class="btn1245633">
      <p>FRIES&nbsp;-&nbsp;CHILLI&nbsp;CHEESE</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LEMON GLAZE' ,59.00)">
		<img src="w16.jpg" style="width:250px " >
		<span>Product 16 - ₱59.00</span>
		<button class="btn1245633">		
		<p>FRIES&nbsp;-&nbsp;LEMON&nbsp;GLAZE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCOLATE' ,69.00)">
		<img src="w17.jpg" style="width:250px">
		<span>Product 17 - ₱69.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;-&nbsp;CHOCOLATE</p>
		<p>69.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COOKIES AND CREAM',69.00)">
		<img src="w18.jpg" style="width:333px">
		<span>Product 18 - ₱69.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;-&nbsp;COOKIES&nbsp;AND&nbsp;CREAM</p>
		<p>69.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ROCKY ROAD,',69.00)">
		<img src="w19.jpg" style="width:198px">
		<span>Product 19 - ₱69.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;-&nbsp;ROCKY&nbsp;ROAD,</p>
		<p>69.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TARO',69.00)">
		<img src="w20.jpg" style="width:375px" >
		<span>Product 20 - ₱69.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;-&nbsp;TARO</p>
		<p>69.00&nbsp;PHP</p>
		</button>
	</div>
	  <div onclick="addToCart('MANGO', 69.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="w21.jpg" style="width:251px">
	<span>Product 21 - ₱69.00</span>
    <button class="btn1245633">
      <p>MILKTEA&nbsp;-&nbsp;MANGO</p>
      <p>69.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BLACK FOREST' , 69.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w22.jpg" style="width:120px">
	<span>Product 22 - ₱69.00</span>
    <button class="btn1245633">
      <p>MILKTEA&nbsp;-&nbsp;BLACK&nbsp;FOREST</p>
      <p>69.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('SALTED CARAMEL', 69.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w23.jpg" style="width:236px">
	<span>Product 23 - ₱69.00</span>
    <button class="btn1245633">
      <p>MILKTEA&nbsp;-&nbsp;SALTED&nbsp;CARAMEL</p>
      <p>69.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CAPPUCCINO' ,69.00)">
    <img src="w24.jpg" style="width:189px">
	<span>Product 24 - ₱69.00</span>
    <button class="btn1245633">
      <p>MILKTEA&nbsp;-&nbsp;CAPPUCCINO</p>
      <p>69.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHEESY NACHO' ,59.00)">
    <img src="w25.jpg" style="width:261px">
	<span>Product 25 - ₱59.00</span>
    <button class="btn12456">
      <p>CHEESY&nbsp;NACHO</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('OVERLOAD NACHO' ,59.00)">
		<img src="w26.jpg" style="width:261px " >
		<span>Product 26 - ₱59.00</span>
		<button class="btn12456">		
		<p>OVERLOAD&nbsp;NACHO</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN WITH GRAVY' ,59.00)">
		<img src="w27.jpg" style="width:261px">
		<span>Product 27 - ₱59.00</span>
		<button class="btn1245633">		
		<p>OVERLOAD&nbsp;NACHO&nbsp;w/&nbsp;FRIES.</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOUSE BLEND ICED TEA',59.00)">
		<img src="w28.jpg" style="width:261px">
		<span>Product 28 - ₱59.00</span>
		<button class="btn1245633">		
		<p>HOUSE&nbsp;BLEND&nbsp;ICED&nbsp;TEA</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY',59.00)">
		<img src="w29.jpg" style="width:250px">
		<span>Product 29 - ₱59.00</span>
		<button class="btn12456">		
		<p>STRAWBERRY</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LYCHEE',59.00)">
		<img src="w30.jpg" style="width:250px" >
		<span>Product 30 - ₱59.00</span>
		<button class="btn12456">		
		<p>LYCHEE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
  <div onclick="addToCart('GREEN APPLE', 59.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="w31.jpg" style="width:250px">
	<span>Product 31 - ₱59.00</span>
    <button class="btn1245633">
      <p>GREEN&nbsp;APPLE</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BEEF TAPA' , 89.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w32.jpg" style="width:250px">
	<span>Product 32 - ₱89.00</span>
    <button class="btn1245633">
      <p>ICED&nbsp;COFFEE&nbsp;-&nbsp;ORIGINAL</p>
      <p>89.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('CORDON BLEU FULL', 89.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="w33.jpg" style="width:250px">
	<span>Product 33 - ₱89.00</span>
    <button class="btn1245633">
      <p>ICED&nbsp;COFFEE -&nbsp;CARAMEL&nbsp;MACCHIATO</p>
      <p>89.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BUTTERSCOTCH LATTE' ,89.00)">
    <img src="w34.jpg" style="width:250px">
	<span>Product 34 - ₱89.00</span>
    <button class="btn1245633">
      <p>ICED&nbsp;COFFEE -&nbsp;BUTTERSCOTCHL&nbsp;LATTE</p>
      <p>89.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRENCH VANILLA' ,89.00)">
    <img src="p35.jpg" style="width:250px">
	<span>Product 35 - ₱89.00</span>
    <button class="btn1245633">
      <p>ICED&nbsp;COFFEE -&nbsp;FRENCH&nbsp;VANILLA</p>
      <p>89.00&nbsp;PHP</p>
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

