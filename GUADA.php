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
  <a href="bev.php"><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
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

//
CARAMEL MACCHIATO 59
SPANISH LATTE 59
WHITE MOCHACCINO 59
AMERICANO 59
CAFE LATTE 59
MOCHACCINO 59
CHOCOLATE 59
MATCHA LATTE 59
MILKY OREO 59
DARK CHOCOLATE 59
STRAWBERRY LATTE 59
BLUEBERRY LATTE 59
MATCHABERRY STRAWBERRY/BLUEBERRY 59

CHOCOLATE HAZELNUTS 120
WHITE CHOCOLATE 120
MATCHA CHIP 120
SALTED CARAMEL 120
FROSTLY MATCHA 120
MILO DINOSAUR 120
CREAMY OREO 120
DARK CHOCOLATE COOKIES 120
BLUEBERRY 120
SMOOVOCADO 120
STRAWBERRY SWIRL 120
UBE QUEZO 120
CHOCOBERRY BREEZE 120
MATCHABERRY BLISS 120
//
<div class="container6">
  <img src="G1.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('CARAMEL MACCHIATO', 59.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="G2.jpg" style="width:250px">
	<span>Product 1 - ₱59.00</span>
    <button class="btn1245633">
      <p>CARAMEL&nbsp;MACCHIATO</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('SPANISH LATTE' , 59.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="G3.jpg" style="width:250px">
	<span>Product 2 - ₱59.00</span>
    <button class="btn12456">
      <p>SPANISH&nbsp;LATTE</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('WHITE MOCHACCINO', 59.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="G4.jpg" style="width:250px">
	<span>Product 3 - ₱59.00</span>
    <button class="btn1245633">
      <p>WHITE&nbsp;MOCHACCINO</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('AMERICANO', 59.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="G5.jpg" style="width:250px">
	<span>Product 4 - ₱59.00</span>
    <button class="btn12456">
      <p>AMERICANO</p>
      <p>59.00&nbsp;PHP</p>
    </button>
  </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CAFE LATTE' ,59.00)">
		<img src="G6.jpg" style="width:261px " >
		<span>Product 5 - ₱59.00</span>
		<button class="btn12456">		
		<p>CAFE&nbsp;LATTE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MOCHACCINO' ,59.00)">
		<img src="G7.jpg" style="width:261px">
		<span>Product 6 - ₱59.00</span>
		<button class="btn12456">		
		<p>MOCHACCINO</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCOLATE' ,59.00)">
		<img src="G8.jpg" style="width:260px">
		<span>Product 7 - ₱59.00</span>
		<button class="btn1245633">		
		<p>CHOCOLATE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MATCHA LATTE',59.00)">
		<img src="G9.jpg" style="width:260px">
		<span>Product 8 - ₱59.00</span>
		<button class="btn12456">		
		<p>MATCHA&nbsp;LATTE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKY OREO',59.00)">
		<img src="G10.jpg" style="width:250px" >
		<span>Product 9 - ₱59.00</span>
		<button class="btn1245633">		
		<p>MILKY&nbsp;OREO</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DARK CHOCOLATE',59.00)">
		<img src="G11.jpg" style="width:250px">
		<span>Product 10 - ₱59.00</span>
		<button class="btn1245633">		
		<p>DARK&nbsp;CHOCOLATE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY LATTE',59.00)">
		<img src="G12.jpg" style="width:250px">
		<span>Product 11 - ₱59.00</span>
		<button class="btn1245633">		
		<p>STRAWBERRY&nbsp;LATTE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLUEBERRY LATTE',59.00)">
		<img src="G13.jpg" style="width:250px">
		<span>Product 12 - ₱59.00</span>
		<button class="btn1245633">		
		<p>BLUEBERRY&nbsp;LATTE</p>
		<p>59.00&nbsp;PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCOBERRY BREEZE',120.00)">
		<img src="G15.jpg" style="width:250px">
		<span>Product 14 - ₱39.00</span>
		<button class="btn1245633">		
		<p>CHOCOBERRY&nbsp;BREEZE</p>
		<p>120.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCOLATE HAZELNUTS ',120.00)">
		<img src="G16.jpg" style="width:250px">
		<span>Product 15 - ₱39.00</span>
		<button class="btn1245644">		
		<p>CHOCOLATE&nbsp;HAZELNUTS</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WHITE CHOCOLATE', 120.00)">
		<img src="G17.jpg" style="width:250px">
		<span>Product 16 - ₱39.00</span>
		<button class="btn1245633">		
		<p>WHITE&nbsp;CHOCOLATE</p>
		<p>120.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MOCHA CHIP',120.00)">
		<img src="G18.jpg" style="width:250px">
		<span>Product 17 - ₱39.00</span>
		<button class="btn12456">		
		<p>MATCHA&nbsp;CHIP</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	
	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SMOOVOCADO',120.00)">
		<img src="G25.jpg" style="width:250px"><span>Product 24 - ₱39.00</span>
		<button class="btn12456">		
		<p>SMOOVOCADO</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY SWIRL',120.00)">
		<img src="G26.jpg" style="width:250px"><span>Product 25 - ₱39.00</span>
		<button class="btn1245633">		
		<p>STRAWBERRY&nbsp;SWIRL</p>
		<p>120.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('UBE QUEZO',120.00)">
		<img src="G27.jpg" style="width:250px"><span>Product 26 - ₱39.00</span>
		<button class="btn12456">		
		<p>UBE&nbsp;QUEZO</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WATERMELON',120.00)">
		<img src="G28.jpg" style="width:250px"><span>Product 27 - ₱39.00</span>
		<button class="btn12456">		
		<p>WATERMELON</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SALTED CARAMEL',120.00)">
		<img src="G19.jpg" style="width:250px"><span>Product 18 - ₱39.00</span>
		<button class="btn12456">		
		<p>SALTED CARAMEL</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FROSTLY MATCHA',120.00)">
		<img src="G20.jpg" style="width:250px"><span>Product 19 - ₱39.00</span>
		<button class="btn1245633">		
		<p>FROSTLY MATCHA</p>
		<p>120.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILO DINOSAUR',120.00)">
		<img src="G21.jpg" style="width:250px"><span>Product 20 - ₱39.00</span>
		<button class="btn12456">		
		<p>MILO DINOSAUR</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CREAMY OREO',120.00)">
		<img src="G22.jpg" style="width:250px"><span>Product 21 - ₱39.00</span>
		<button class="btn12456">		
		<p>CREAMY OREO</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DARK CHOCOLATE COOKIES',120.00)">
		<img src="G23.jpg" style="width:250px"><span>Product 22 - ₱39.00</span>
		<button class="btn1245633">		
		<p>DARK&nbsp;CHOCOLATE COOKIES</p>
		<p>120.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLUEBERRY',120.00)" >
		<img src="G24.jpg" style="width:250px"><span>Product 23 - ₱39.00</span>
		<button class="btn12456">		
		<p>BLUEBERRY BURST</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MATCHABERRY STRAWBERRY/BLUEBERRY',120.00)">
		<img src="G14.jpg" style="width:250px" >
		<span>Product 13 - ₱59.00</span>
		<button class="btn1245644">		
		<p>MATCHABERRY STRAWBERRY&nbsp;/&nbsp;BLUEBERRY</p>
		<p>120.00&nbsp;PHP</p>
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

