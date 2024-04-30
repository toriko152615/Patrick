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
  <img src="MANANG.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('ALA KING', 109.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="ALA KING.jpg" style="width:250px">
	<span>Product 1 - ₱109.00</span>
    <button class="btn12456">
      <p>ALA KING</p>
      <p>109.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('BALOONY SILOG' , 55.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="BALOONYSILOG.jpg" style="width:250px">
	<span>Product 2 - ₱55.00</span>
    <button class="btn12456">
      <p>BALOONY&nbsp;SILOG</p>
      <p>55.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('LONGSILOG', 55.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="LONGGSILOG.jpg" style="width:250px">
	<span>Product 3 - ₱55.00</span>
    <button class="btn12456">
      <p>LONG&nbsp;SILOG</p>
      <p>55.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HAMSILOG' ,55.00)">
    <img src="HAMSILOG.jpg" style="width:250px">
	<span>Product 4 - ₱55.00</span>
    <button class="btn12456">
      <p>HAM&nbsp;SILOG</p>
      <p>55.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HOTSILOG' ,55.00)">
		<img src="HOTSILOG.jpg" style="width:261px " >
		<span>Product 5 - ₱55.00</span>
		<button class="btn12456">		
		<p>HOT&nbsp;SILOG</p>
		<p>55.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TOCILOG' ,85.00)">
		<img src="TOCILOG.jpg" style="width:261px">
		<span>Product 6 - ₱85.00</span>
		<button class="btn12456">		
		<p>TOCILOG</p>
		<p>85.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('TAPSILOG',85.00)">
		<img src="TAPSILOG.jpg" style="width:260px">
		<span>Product 7 - ₱85.00</span>
		<button class="btn1245633">		
		<p>TAPSILOG</p>
		<p>85.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MIXSILOG',89.00)">
		<img src="MIXSILOG.jpg" style="width:260px">
		<span>Product 8 - ₱89.00</span>
		<button class="btn12456">		
		<p>MIXSILOG</p>
		<p>89.00&nbsp;PHP</p>
		</button>
	</div>

<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HUNGARIAN SILOG',89.00)">
		<img src="HUNGARIAN SILOG.jpg" style="width:250px" >
		<span>Product 9 - ₱89.00</span>
		<button class="btn1245633">		
		<p>HUNAGIRAN&nbsp;SILOG</p>
		<p>370.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BULAKLAK SILOG',96.00)">
		<img src="BULAKLAKSILOG.jpg" style="width:250px">
		<span>Product 10 - ₱96.00</span>
		<button class="btn12456">		
		<p>BULAKLAK&nbsp;SILOG</p>
		<p>96.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LECHON SILOG',99.00)">
		<img src="LECHON SILOG.jpg" style="width:250px">
		<span>Product 11 - ₱99.00</span>
		<button class="btn12456">		
		<p>LECHON&nbsp;SILOG</p>
		<p>99.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PORK SILOG',99.00)">
		<img src="PORK SILOG.jpg" style="width:250px">
		<span>Product 12 - ₱99.00</span>
		<button class="btn12456">		
		<p>PORK&nbsp;SILOG</p>
		<p>99.00&nbsp;PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CHICKEN QUARTERSILOG',109.00)">
		<img src="CHICKEN QUARTERSILOG.jpg" style="width:250px" >
		<span>Product 13 - ₱109.00</span>
		<button class="btn12456">		
		<p>CHICKEN QUARTERSILOG</p>
		<p>109.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LIEMPO SILOG',109.00)">
		<img src="LIEMPO SILOG.jpg" style="width:250px">
		<span>Product 14 - ₱109.00</span>
		<button class="btn1245633">		
		<p>LIEMPO SILOG</p>
		<p>109.00&nbsp;PHP</p>
    </div>
    <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING HUNGARIAN',85.00)">
            <img src="SIZZLING HUNGARIAN.jpg" style="width:250px">
            <span>Product 15 -₱85.00</span>
            <button class="btn1245633">		
            <p>SIZZLING HUNGARIAN</p>
            <p>85.00&nbsp;PHP</p>
        </div>
        <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING PORCKCHOP',99.00)">
                <img src="SIZZLING BREADED PORCKCHOP.jpg" style="width:250px">
                <span>Product 16 - ₱99.00</span>
                <button class="btn1245633">		
                <p>SIZZLING PORKCHOP</p>
                <p>255.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING TOFU',85.00)">
                <img src="SIZZLING TOFU 85.jpg" style="width:250px">
                <span>Product 17 - ₱85.00</span>
                <button class="btn1245633">		
                <p>SIZZLING TOFU</p>
                <p>85.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING HOTDOG',85.00)">
                <img src="SIZZLING HOTDOG.jpg" style="width:250px">
                <span>Product 18 - ₱99.00</span>
                <button class="btn1245633">		
                <p>SIZZLING HOTDOG</p>
                <p>99.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING DINAKDAKAN',89.00)">
                <img src="SIZZLING DINAKDAKAN.jpg" style="width:250px">
                <span>Product 19 - ₱89.00</span>
                <button class="btn1245633">		
                <p>SIZZLING DINAKDAKAN</p>
                <p>89.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SISIG WITH RICE',89.00)">
                <img src="SIZZLING SISIG WITH RICE.jpg" style="width:250px">
                <span>Product 20 - ₱89.00</span>
                <button class="btn1245633">		
                <p>SISIG&nbsp;WITH RICE</p>
                <p>89.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING LECHON KAWALI',99.00)">
                <img src="SIZZLING LECHON KAWALI.jpg" style="width:250px">
                <span>Product 21 - ₱99.00</span>
                <button class="btn1245633">		
                <p>SIZZLING&nbsp;LECHON KAWALI</p>
                <p>99.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING QUARTER CHICKEN',109.00)">
                <img src="SIZZLING QUARTER CHICKEN.jpg" style="width:250px">
                <span>Product 22 - ₱109.00</span>
                <button class="btn1245633">		
                <p>SIZZLING&nbsp;QUARTER CHICKEN</p>
                <p>109.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING LIEMPO',109.00)">
                <img src="SIZZLING LIEMPO.jpg" style="width:250px">
                <span>Product 23 - ₱109.00</span>
                <button class="btn1245633">		
                <p>SIZZLING LIEMPO</p>
                <p>109.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING T-BONE STEAK',159.00)">
                <img src="SIZZLING T-BONE STEAK.jpg" style="width:250px">
                <span>Product 24 - ₱159.00</span>
                <button class="btn1245633">		
                <p>SIZZLING&nbsp;T-BONE&nbsp;STEAK</p>
                <p>159.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING RIBEYE STEAK',169.00)">
                <img src="SIZZLING RIB EYE STEAK.jpg" style="width:250px">
                <span>Product 25 - ₱169.00</span>
                <button class="btn1245633">		
                <p>SIZZLING&nbsp;RIBEYE STEAK</p>
                <p>169.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SIZZLING PORTER HOUSE STEAK',189.00)">
                <img src="SIZZLING PORTER HOUSE STEAK.jpg" style="width:250px">
                <span>Product 26 - ₱189.00</span>
                <button class="btn1245633">		
                <p>SIZZLING&nbsp;PORTER HOUSE&nbsp;STEAK</p>
                <p>189.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PARES WITH LECHON KAWALI',139.00)">
                <img src="PARES WITH LECHON KAWALI.jpg" style="width:250px">
                <span>Product 27 - ₱139.00</span>
                <button class="btn1245633">		
                <p>PARES&nbsp;WITH LECHON&nbsp;KAWALI</p>
                <p>139.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PARES WITH BULAKALK',149.00)">
                <img src="PARES WITH CHICHARON BULAKLAK.jpg" style="width:250px">
                <span>Product 28 - ₱149.00</span>
                <button class="btn1245633">		
                <p>PARES&nbsp;WITH CHICHARON&nbsp;BULAKLAK</p>
                <p>149.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PARES',69.00)">
                <img src="PARES.jpg" style="width:250px">
                <span>Product 29 - ₱69.00</span>
                <button class="btn1245633">		
                <p>PARES</p>
                <p>69.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MAMI',65.00)">
                <img src="MAMI.jpg" style="width:250px">
                <span>Product 30 - ₱65.00</span>
                <button class="btn1245633">		
                <p>MAMI</p>
                <p>65.00&nbsp;PHP</p>
            </div>
            <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PARES WITH LECHON BULAKLAK AND KAWALI',299.00)">
                <img src="PARES KAWALI BULAKLAK.jpg" style="width:250px">
                <span>Product 31 - ₱299.00</span>
                <button class="btn1245633">		
                <p>PARES&nbsp;KAWALI&nbsp;BULAKLAK</p>
                <p>299.00&nbsp;PHP</p>
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