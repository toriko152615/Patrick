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
<div class="container6">
  <img src="MANGO CLASSICO.png"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('MANGO GRAHAM', 90.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="MANGO GRAHAM.png" style="width:250px">
	<span>Product 1 - ₱90.00</span>
    <button class="btn12456">
      <p>MANGO&nbsp;GRAHAM</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('MANGO OREO' , 90.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="MANGO OREO.png" style="width:250px">
	<span>Product 2 - ₱90.00</span>
    <button class="btn12456">
      <p>MANGO&nbsp;OREO</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('MANGO OVERLOAD', 90.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="MANGO OVERLOAD.png" style="width:250px">
	<span>Product 3 - ₱90.00</span>
    <button class="btn12456">
      <p>MANGO&nbsp;OVERLOAD</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO SMOOTHIE' ,90.00)">
    <img src="MANGO SMOOTHIE.png" style="width:250px">
	<span>Product 4 - ₱90.00</span>
    <button class="btn12456">
      <p>MANGO&nbsp;SMOOTHIE</p>
      <p>90.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('OKINAWA' ,90.00)">
		<img src="OKINAWA.png" style="width:261px " >
		<span>Product 5 - ₱90.00</span>
		<button class="btn12456">		
		<p>OKINAWA</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WINTERMELON' ,90.00)">
		<img src="WINTERMELON.png" style="width:261px">
		<span>Product 6 - ₱90.00</span>
		<button class="btn12456">		
		<p>WINTERMELON</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COOKIES & CREAM',90.00)">
		<img src="COOKIES AND CREAM.png" style="width:260px">
		<span>Product 7 - ₱90.00</span>
		<button class="btn1245633">		
		<p>COOKIES&nbsp;&&nbsp;CREAM</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCO BLAST',90.00)">
		<img src="CHCO BLAST.jpg" style="width:260px">
		<span>Product 8 - ₱90.00</span>
		<button class="btn12456">		
		<p>CHOCO&nbsp;BLAST</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>

<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO OVERLOAD SMOOTHIE',120.00)">
		<img src="MANGO OVERLOAD SMOOTHIE.jpg" style="width:250px" >
		<span>Product 9 - ₱120.00</span>
		<button class="btn1245633">		
		<p>MANGO&nbsp;OVERLOAD SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHEESY MANGO SMOOTHIE',120.00)">
		<img src="CHEESY MANGO SMOOTHIE.jpg" style="width:250px">
		<span>Product 10 - ₱120.00</span>
		<button class="btn12456">		
		<p>CHEESY&nbsp;MANGO SMOOTHIE</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO GRAHAM SMOOTHIE',120.00)">
		<img src="MANGO GRAHAM SMOOTHIE.jpg" style="width:250px">
		<span>Product 11 - ₱120.00</span>
		<button class="btn12456">		
		<p>MANGO&nbsp; SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO OREO SMOOTHIE',120.00)">
		<img src="MANGO OREO SMOOTHIE.jpg" style="width:250px">
		<span>Product 12 - ₱120.00</span>
		<button class="btn12456">		
		<p>MANGO&nbsp;OREO SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COOKIES & CREAM SMOOTHIE',120.00)">
		<img src="COOKIES AND CREAM SMOOTHIE.jpg" style="width:250px" >
		<span>Product 13 - ₱120.00</span>
		<button class="btn12456">		
		<p>COOKIES&nbsp;&&nbsp;CREAM SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHOCO BLAST SMOOTHIE',120.00)">
		<img src="CHOCO BLAST SMOOTHIE.jpg" style="width:250px">
		<span>Product 14 - ₱120.00</span>
		<button class="btn1245633">		
		<p>CHOCO&nbsp;BLAST SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('OKINAWA MILKTEA SMOOTHIE',120.00)">
		<img src="OKINAWA MILKTEA SMOOTHIE.jpg" style="width:250px">
		<span>Product 15 - ₱120.00</span>
		<button class="btn12456">		
		<p>OKINAWA&nbsp;MILKTEA SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('WINTERMELON MILKTEA SMOOTHIE', 120.00)">
		<img src="WINTERMELON MILKTEA SMOOTHIE.jpg" style="width:250px">
		<span>Product 16 - ₱120.00</span>
		<button class="btn12456">		
		<p>WINTERMELON MILKTEA&nbsp;SMOOTHIE</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DARK CHOCO MILKTEA SMOOTHIE',120.00)">
		<img src="DARK CHOCO MILKTEA SMOOTHIE.jpg" style="width:250px">
		<span>Product 17 - ₱120.00</span>
		<button class="btn12456">		
		<p>DARK&nbsp;CHOCO MILKTEA SMOOTHIE</p>
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
        
            <button class="button256 button15" onclick="cancel()">Cancel</button>
        </form>
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