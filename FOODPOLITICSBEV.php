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
  <img src="foodpolitics.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('AMERICANO', 110.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="AMERICANO.jpg" style="width:250px">
	<span>Product 1 - ₱110.00</span>
    <button class="btn12456">
      <p>AMERICANO</p>
      <p>110.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('CAPUCCINO' , 130.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="CAPPUCINO.jpg" style="width:250px">
	<span>Product 2 - ₱130.00</span>
    <button class="btn12456">
      <p>CAPUCCINO</p>
      <p>130.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('TARO', 80.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="TARO.jpg" style="width:250px">
	<span>Product 3 - ₱80.00</span>
    <button class="btn12456">
      <p>TARO</p>
      <p>80.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HAZELNUT' ,165.00)">
    <img src="FRAPPE HAZELNUT.jpg" style="width:250px">
	<span>Product 4 - ₱165.00</span>
    <button class="btn12456">
      <p>HAZELNUT</p>
      <p>165.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DIRTY MACTHA' ,140.00)">
		<img src="DIRTY MATCHA.jpg" style="width:261px " >
		<span>Product 5 - ₱140.00</span>
		<button class="btn1245633">		
		<p>DIRTY&nbsp;MATCHA</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DARK MOCHA' ,145.00)">
		<img src="DARK MOCHA.jpg" style="width:261px">
		<span>Product 6 - ₱145.00</span>
		<button class="btn1245633">		
		<p>DARK&nbsp;MOCHA</p>
		<p>145.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CAFE LATTE',135.00)">
		<img src="CAFE LATTE.jpg" style="width:260px">
		<span>Product 7 - ₱135.00</span>
		<button class="btn1245633">		
		<p>CAFE&nbsp;LATTE</p>
		<p>135.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CARAMEL MACCHIATO',140.00)">
		<img src="CARAMEL MACCHIATO.jpg" style="width:260px">
		<span>Product 8 - ₱140.00</span>
		<button class="btn1245633">		
		<p>CARAMEL&nbsp;MACCHIATO</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>

<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SPANISH LATTE',140.00)">
		<img src="SPANISH LATTE.jpg" style="width:250px" >
		<span>Product 9 - ₱140.00</span>
		<button class="btn1245633">		
		<p>SPANISH&nbsp;LATTE</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HAZELNUT LATTE',140.00)">
		<img src="hazelnut latte.jpg" style="width:250px">
		<span>Product 10 - ₱140.00</span>
		<button class="btn1245633">		
		<p>HAZELNUT&nbsp;LATTE</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('VIETNAMESE LATTE',145.00)">
		<img src="VIETNAMESE LATTE.jpg" style="width:250px">
		<span>Product 11 - ₱145.00</span>
		<button class="btn1245633">		
		<p>VIETNAMESE&nbsp;LATTE</p>
		<p>145.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('VANILLA LATTE',140.00)">
		<img src="VANILLA LATTE.jpg" style="width:250px">
		<span>Product 12 - ₱140.00</span>
		<button class="btn12456">		
		<p>VANILLA&nbsp;LATTE</p>
		<p>140.00&nbsp;PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FP SIGNATURE COFFEE',145.00)">
		<img src="FP SIGNATURE COFFEE.jpg" style="width:250px" >
		<span>Product 13 - ₱145.00</span>
		<button class="btn1245633">		
		<p>FP&nbsp;SIGNATURE&nbsp;COFFEE</p>
		<p>145.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRAPPE MANGO',90.00)">
		<img src="FRAPPE MANGO.jpg" style="width:250px">
		<span>Product 14 - ₱90.00</span>
		<button class="btn1245633">		
		<p>FRAPPE&nbsp;MANGO</p>
		<p>90.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRAPPE C&K',90.00)">
		<img src="FRAPPE C&K.jpg" style="width:250px">
		<span>Product 15 - ₱90.00</span>
		<button class="btn12456">		
		<p>FRAPPE&nbsp;C&K</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRAPPE DOUBLE CHOCO', 90.00)">
		<img src="FRAPPE DOUBLE CHOCO.jpg" style="width:250px">
		<span>Product 16 - ₱90.00</span>
		<button class="btn1245633">		
		<p>FRAPPE&nbsp;DOUBLE&nbsp;CHOCO</p>
		<p>90.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ICED CHOCO',50.00)">
		<img src="ICE CHOCO.jpg" style="width:250px">
		<span>Product 17 - ₱50.00</span>
		<button class="btn1245633">		
		<p>ICED&nbsp;CHOCO</p>
		<p>50.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLACK GULAMAN',50.00)">
		<img src="BLACK GULAMAN.jpg" style="width:250px">
        <span>Product 18 - ₱50.00</span>
		<button class="btn1245633">		
		<p>BLACK&nbsp;GULAMAN</p>
		<p>50.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MATCHA ESPRESSO',165.00)">
		<img src="MATCHA ESPRESSO.jpg" style="width:250px">
        <span>Product 19 - ₱165.00</span>
		<button class="btn1245633">		
		<p>MATCHA&nbsp;ESPRESSO</p>
		<p>165.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COOKIES DOUGH',175.00)">
		<img src="COOKIES AND DOUGH.jpg" style="width:250px">
        <span>Product 20 - ₱175.00</span>
		<button class="btn1245633">		
		<p>COOKIES&nbsp;DOUGH</p>
		<p>175.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BLACK FOREST',165.00)">
		<img src="BLACK FOREST.jpg" style="width:250px">
        <span>Product 21 - ₱165.00</span>
		<button class="btn1245633">		
		<p>BLACK&nbsp;FOREST</p>
		<p>165.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('DARK CHOCOLATE',170.00)">
		<img src="FRAPPE DARK CHOCOLATE.jpg" style="width:250px">
        <span>Product 22 - ₱170.00</span>
		<button class="btn1245633">		
		<p>DARK&nbsp;CHOCOLATE</p>
		<p>170.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('VIETNAMESE BLEND',170.00)">
		<img src="VIETNAMESE BLEND.jpg" style="width:250px">
        <span>Product 23 - ₱170.00</span>
		<button class="btn1245633">		
		<p>VIETNAMESE&nbsp;BLEND</p>
		<p>170.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA TARO',75.00)">
		<img src="MILKTEA TARO.jpg" style="width:250px">
        <span>Product 24 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;TARO</p>
		<p>75.00&nbsp;PHP</p>
  </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA WINTERMELON',75.00)">
		<img src="MILKTEA WINTERMELON.jpg" style="width:250px">
        <span>Product 25 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;WINTERMELON</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA BLACKFOREST',75.00)">
		<img src="MILKTEA BLACK FOREST.jpg" style="width:250px">
        <span>Product 26 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;BLACKFOREST</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA MATCHA',75.00)">
		<img src="MILKTEA MATCHA.jpg" style="width:250px">
        <span>Product 27 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;MATCHA</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA OKINAWA',75.00)">
		<img src="MILKTEA OKINAWA.jpg" style="width:250px">
        <span>Product 28 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA&nbsp;OKINAWA</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA CHOCOLATE',75.00)">
		<img src="MILKTEA CHOCOLATE.jpg" style="width:250px">
        <span>Product 29 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA  	CHOCOLATE</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA C&K',75.00)">
		<img src="MILKTEA C&K.jpg" style="width:250px">
        <span>Product 30 - ₱75.00</span>
		<button class="btn12456">		
		<p>MILKTEA C&K</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA MANGO CHEESECAKE',75.00)">
		<img src="MILKTEA MANGO.jpg" style="width:250px">
        <span>Product 31 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA MANGO&nbsp;CHEESECAKE</p>
		<p>75.00&nbsp;PHP</p>
    </div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILKTEA DARK CHOCOLATE',75.00)">
		<img src="MILKTEA DARK CHOCO.jpg" style="width:250px">
        <span>Product 32 - ₱75.00</span>
		<button class="btn1245633">		
		<p>MILKTEA DARK&nbsp;CHOCOLATE</p>
		<p>75.00&nbsp;PHP</p>
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