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
    background-color: WHITE;
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
  transform: translate(-37%, -20%);
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
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 10px;
}
.remove-button {
    background-color: black;
    color: white;
    border: none;
    padding: 20px -5%;
	font-size: 13px;
    cursor: pointer;
	font-family: sans-serif;
    float: right; /* Align the button to the right */
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
.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}
</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
  <a href="dessert.php"><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
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
  <img src="BASKET OF SWEETS.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('NEW YORK CHEESE CAKE', 174.00)">
    <img src="NEW YORK CHEESE CAKE.jpg" style="width:250px">
    <button class="btn12456">
      <p>NEW&nbsp;YORK CHEESE&nbsp;CAKE</p>
      <p>174 PHP </p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SOFTLY BUTTER CAMEMBERT COOKIE', 234.00)">
    <img src="SOFTLY BUTTER CAMEMBERT COOKIE.jpg" style="width:250px">
    <button class="btn1245633">
      <p>SOFTLY&nbsp;BUTTER CAMEMBERT&nbsp;COOKIE</p>
      <p>234 PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DORAEMON MILK COOKIE', 119.00)">
    <img src="DORAEMON MILK COOKIE.jpg" style="width:250px">
    <button class="btn12456">
      <p>DORAEMON MILK&nbsp;COOKIE</p>
      <p>119 PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MACADAMIA CHOCOLATE', 139.00)">
    <img src="MACADAMIA CHOCOLATE.jpg" style="width:250px">
    <button class="btn12456">
      <p>MACADAMIA CHOCOLATE</p>
      <p>139 PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BOURBON CHOCOLIERE',129.00)">
		<img src="BOURBON CHOCOLIERE.jpg" style="width:260px " >
		<button class="btn12456">		
		<p> BOURBON CHOCOLIER</p>
		<p>129 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BEST VARIETY CHOCO PACK', 199.00)">
		<img src="BEST VARIETY CHOCO PACK.jpg" style="width:261px">
		<button class="btn12456">		
		<p>BEST&nbsp;VARIETY CHOCO&nbsp;PACK</p>
		<p>199 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('NISSIN CRISP CHOCO', 139.00)">
		<img src="NISSIN CRISP CHOCO.jpg" style="width:260px">
		<button class="btn1245633">		
		<p>NISSIN&nbsp;CRISP CHOCO</p>
		<p>139 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MINI CAPLICO ASSORTED PACK', 229.00)">
		<img src="MINI CAPLICO ASSORTED PACK.jpg" style="width:260px">
		<button class="btn1245633">		
		<p>MINI&nbsp;CAPLICO ASSORTED&nbsp;PACK</p>
		<p>229 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ALFORT BITTER CHOCO', 99.00)">
		<img src="ALFORT BITTER CHOCO.jpg" style="width:250px" >
		<button class="btn1245633">		
		<p>ALFORT&nbsp;BITTER CHOCO</p>
		<p>99 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ALPHABET CHOCO',239.00)">
		<img src="ALPHABET CHOCO.jpg" style="width:250px">
		<button class="btn12456">		
		<p>ALPHABET CHOCO</p>
		<p>239 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ALFORT SABLE BUTTER', 99.00)">
		<img src="ALFORT SABLE BUTTER.jpg" style="width:250px">
		<button class="btn12456">		
		<p>ALFORT&nbsp;SABLE BUTTER</p>
		<p>99 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ALFORT BANANA CHOCOLATE', 219.00)">
		<img src="ALFORT BANANA CHOCOLATE.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>ALFORT&nbsp;BANANA CHOCOLATE</p>
		<p>219 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('GHANA BLACK CHOCOLATE', 99.00)">
		<img src="GHANA BLACK CHOCOLATE.jpg" style="width:250px" >
		<button class="btn12456">		
		<p>GHANA&nbsp;BLACK CHOCOLATE</p>
		<p>99 PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ALFORT VANILLA WHITE', 99.00)">
		<img src="ALFORT VANILLA WHITE.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>ALFORT&nbsp;VANILLA WHITE</p>
		<p>99 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STARBUCKS COFFEE LATTE', 359.00)">
		<img src="STARBUCKS COFFEE LATTE.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>STARBUCKS&nbsp;COFFEE LATTE</p>
		<p>359 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STARBUCKS WHITE MOCHA', 359.00)">
		<img src="STARBUCKS WHITE MOCHA.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>STARBUCKS&nbsp;WHITE MOCHA</p>
		<p>359 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STARBUCKS COFFEE MOCHA', 359.00)">
		<img src="STARBUCKS COFFEE MOCHA.jpg
" style="width:250px">
		<button class="btn1245633">		
		<p>STARBUCKS&nbsp;COFFEE MOCHA</p>
		<p>359 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ASSORTED FURIKAKE', 135.00)">
		<img src="ASSORTED FURIKAKE.jpg" style="width:250px">
		<button class="btn12456">		
		<p>ASSORTED FURIKAKE</p>
		<p>135 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('JAGARIKO CHEESE', 149.00)">
		<img src="JAGARIKO CHEESE.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>JAGARIKO CHEES</p>
		<p>149 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('POCKET SIZE CEREAL', 119.00)">
		<img src="POCKET SIZE CEREAL.jpg" style="width:250px">
		<button class="btn12456">		
		<p>POCKET&nbsp;SIZE CEREAL</p>
		<p>119 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('2 PACKS OF FRUITY JELLY STICK', 99.00)">
		<img src="2 PACKS OF FRUITY JELLY STICK.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>2&nbsp;PACKS&nbsp;OF&nbsp;FRUITY JELLY&nbsp;STICK</p>
		<p>99 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ROHLO COOL BLUE EYEDROPS', 155.00)">
		<img src="ROHLO COOL BLUE EYEDROPS.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>ROHLO&nbsp;COOL BLUE&nbsp;EYEDROPS</p>
		<p>155 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MEJI WHITE CHOCOLATE ALMOND', 175.00)">
		<img src="MEJI WHITE CHOCOLATE ALMOND.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MEJI&nbsp;WHITE CHOCOLATE&nbsp;ALMOND</p>
		<p>175 PHP</p>
		</button>
	</div>	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MEJI MELTYKISS CHOCOLATE', 199.00)">
		<img src="MEJI MELTYKISS CHOCOLATE.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MEJI&nbsp;MELTYKISS CHOCOLATE</p>
		<p>199 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MEJI MELTYKISS STRAWBERRY', 199.00)">
		<img src="MEJI MELTYKISS STRAWBERRY.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MEJI&nbsp;MELTYKISS STRAWBERRY</p>
		<p>199 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MEJI BEST 3 CHOCOLATE PACK', 249.00)">
		<img src="MEJI BEST 3 CHOCOLATE PACK.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MEJI&nbsp;BEST&nbsp;3 CHOCOLATE&nbsp;PACK</p>
		<p>249 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MEIJI MADAMIA WHITE VEIL CHOC',179.00)">
		<img src="MEIJI MADAMIA WHITE VEIL CHOC.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>MEIJI&nbsp;MADAMIA WHITE&nbsp;VEIL&nbsp;CHOC</p>
		<p>179 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MELTY KISS CHOCO PACK', 369.00)">
		<img src="MELTY KISS CHOCO PACK.jpg" style="width:250px">
		<button class="btn12456">		
		<p>MELTY&nbsp;KISS CHOCO&nbsp;PACK</p>
		<p>369 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('APOLLO CHOCOLATE PACK', 249.00)">
		<img src="APOLLO CHOCOLATE PACK.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>APOLLO&nbsp;CHOCOLATE PACK</p>
		<p>249 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT MILK CHOCOLATE', 219.00)">
		<img src="KITKAT MILK CHOCOLATE.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT&nbsp;MILK CHOCOLATE</p>
		<p>219 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT STRAWBERRY', 219.00)">
		<img src="KITKAT STRAWBERRY.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT STRAWBERRY</p>
		<p>219 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT MILKTEA', 219.00)">
		<img src="KITKAT MILKTEA.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT MILKTEA</p>
		<p>219 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT MINI SALT LEMON', 75.00)">
		<img src="KITKAT MINI SALT LEMON.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT&nbsp;MINI SALT&nbsp;LEMON</p>
		<p>75 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT SALT LEMON', 219.00)">
		<img src="KITKAT SALT LEMON.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT&nbsp;SALT LEMON</p>
		<p>219 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT BISCUIT CHOCO', 219.00)">
		<img src="KITKAT BISCUIT CHOCO.jpg" style="width:250px">
		<button class="btn12456">		
		<p>KITKAT&nbsp;BISCUIT CHOCO</p>
		<p>219&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT MINI CARAMEL PUDDING', 75.00)">
		<img src="KITKAT MINI CARAMEL PUDDING.jpg" style="width:250px">
		<button class="btn1245633">		
		<p>KITKAT&nbsp;MINI CARAMEL&nbsp;PUDDING</p>
		<p>75&nbsp;PHP</p>
		</button>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT SWEET POTATO', 219.00)">
			<img src="KITKAT SWEET POTATO.jpg" style="width:250px">
			<button class="btn12456">		
			<p>KITKAT&nbsp;SWEET POTATO</p>
			<p>219&nbsp;PHP</p>
			</button>
        </div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT CHOCOLATE AND MATCHA', 199.00)">
				<img src="KITKAT CHOCOLATE AND MATCHA.jpg" style="width:250px">
				<button class="btn1245633">		
				<p>KITKAT&nbsp;CHOCOLATE AND&nbsp;MATCHA</p>
				<p>199&nbsp;PHP</p>
				</button>
        </div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('KITKAT BLACK', 199.00)">
					<img src="KITKAT BLACK.jpg" style="width:250px">
					<button class="btn12456">		
					<p>KITKAT BLACK</p>
					<p>199&nbsp;PHP</p>
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
		function toggleDiv2() {
            const content = document.getElementById("hidden");
            content.classList.toggle("content");
        }
    </script>