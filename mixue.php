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
  <img src="mixuee.jpg"  width="100%" height="600px">
</div>
	<div  id="products" class="grid-container">
  <div onclick="addToCart('STRAWBERRY LUCKY SUNDAE', 80.00)"class="img-hover-zoom img-hover-zoom--xyz" class="item">
    <img src="m1.png" style="width:250px">
	<span>Product 1 - ₱80.00</span>
    <button class="btn1245633">
      <p>STRAWBERRY&nbsp;LUCKY SUNDAE</p>
      <p>80.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('CHOCOLATE LUCKY SUNDAE' , 80.00)"  class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="m2.png" style="width:250px">
	<span>Product 2 - ₱80.00</span>
    <button class="btn1245633">
      <p>CHOCOLATE&nbsp;LUCKY SUNDAE</p>
      <p>80.00&nbsp;PHP</p>
    </button>
  </div>
  <div onclick="addToCart('COOKIES MI-SUNDAE', 80.00)" class="img-hover-zoom img-hover-zoom--xyz" class="item" >
    <img src="m3.png" style="width:250px">
	<span>Product 3 - ₱80.00</span>
    <button class="btn12456">
      <p>COOKIES MI&nbsp;-&nbsp;SUNDAE</p>
      <p>80.00&nbsp;PHP</p>
    </button>
  </div>
  <div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY MI-SUNDAE' ,80.00)">
    <img src="m4.png" style="width:250px">
	<span>Product 4 - ₱80.00</span>
    <button class="btn12456">
      <p>STRAWBERRY MI&nbsp;-&nbsp;SUNDAE</p>
      <p>80.00&nbsp;PHP</p>
    </button>
  </div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ICE CREAM EARL GREY TEA' ,80.00)">
		<img src="m5.png" style="width:261px " >
		<span>Product 5 - ₱80.00</span>
		<button class="btn1245633">		
		<p>ICE&nbsp;CREAM EARL&nbsp;GREY&nbsp;TEA</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('ICE CREAM JASMINE TEA' ,80.00)">
		<img src="m6.png" style="width:261px">
		<span>Product 6 - ₱80.00</span>
		<button class="btn1245633">		
		<p>ICE&nbsp;CREAM JASMINE&nbsp;TEA</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO SUNDAE',80.00)">
		<img src="m7.png" style="width:260px">
		<span>Product 7 - ₱80.00</span>
		<button class="btn1245633">		
		<p>MANGO SUNDAE</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BOBA SUNDAE',80.00)">
		<img src="m8.png" style="width:260px">
		<span>Product 8 - ₱80.00</span>
		<button class="btn12456">		
		<p>BOBA SUNDAE</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>

<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO SMOOTHIE',80.00)">
		<img src="m9.png" style="width:250px" >
		<span>Product 9 - ₱80.00</span>
		<button class="btn1245633">		
		<p>MANGO SMOOTHIE</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY MI-SHAKE',80.00)">
		<img src="m10.png" style="width:250px">
		<span>Product 10 - ₱80.00</span>
		<button class="btn12456">		
		<p>STRAWBERRY MI&nbsp;-&nbsp;SHAKE</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('STRAWBERRY SMOOTHIE',80.00)">
		<img src="m11.png" style="width:250px">
		<span>Product 11 - ₱80.00</span>
		<button class="btn12456">		
		<p>STRAWBERRY SMOOTHIE</p>
		<p>80.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('BROWN SUGAR PEARL MILK TEA',95.00)">
		<img src="m12.png" style="width:250px">
		<span>Product 12 - ₱95.00</span>
		<button class="btn1245633">		
		<p>BROWN&nbsp;SUGAR PEARL&nbsp;MILK&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
	
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PEARL MILK TEA',95.00)">
		<img src="m13.png" style="width:250px" >
		<span>Product 13 - ₱95.00</span>
		<button class="btn12456">		
		<p>PEARL MILK&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('COCONUT JELLY MILK TEA',95.00)">
		<img src="m14.png" style="width:250px">
		<span>Product 14 - ₱95.00</span>
		<button class="btn1245633">		
		<p>COCONUT&nbsp;JELLY MILK&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('RED BEAN MILK TEA',95.00)">
		<img src="m15.png" style="width:250px">
		<span>Product 15 - ₱95.00</span>
		<button class="btn12456">		
		<p>RED&nbsp;BEAN MILK&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('SUPREME MILK TEA', 95.00)">
		<img src="m16.png" style="width:250px">
		<span>Product 16 - ₱95.00</span>
		<button class="btn1245633">		
		<p>SUPREME MILK&nbsp;TEA</p>
		<p>95.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('OATS MILK TEA',95.00)">
		<img src="m17.png" style="width:250px">
		<span>Product 17 - ₱95.00</span>
		<button class="btn12456">		
		<p>OATS MILK&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MILK TEA WITH 2 TOPPINGS',95.00)">
		<img src="m18.png" style="width:250px"><span>Product 18 - ₱95.00</span>
		<button class="btn1245633">		
		<p>MILK&nbsp;TEA WITH&nbsp;2&nbsp;TOPPINGS</p>
		<p>95.00 PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PEACH EARL GREY TEA',80.00)">
		<img src="m19.png" style="width:250px"><span>Product 19 - ₱80.00</span>
		<button class="btn1245633">		
		<p>PEACH&nbsp;EARL GRE&nbsp;TEA</p>
		<p>80.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('CREAMY MANGO BOBA',120.00)">
		<img src="m20.png" style="width:250px"><span>Product 20 - ₱120.00</span>
		<button class="btn12456">		
		<p>CREAMY MANGO&nbsp;BOBA</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LEMON JASMINE TEA',55.00)">
		<img src="m21.png" style="width:250px"><span>Product 21 - ₱55.00</span>
		<button class="btn12456">		
		<p>LEMON JASMINE&nbsp;TEA</p>
		<p>55.00&nbsp;PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('LEMON EARL GREY TEA',55.00)">
		<img src="m22.png" style="width:250px"><span>Product 22 - ₱55.00</span>
		<button class="btn1245633">		
		<p>LEMON&nbsp;EARL GREY&nbsp;TEA</p>
		<p>55.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('PASSION FRUIT JASMINE TEA',95.00)" >
		<img src="m23.png" style="width:250px"><span>Product 23 - ₱95.00</span>
		<button class="btn1245633">		
		<p>PASSION&nbsp;FRUIT JASMINE&nbsp;TEA</p>
		<p>95.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('HAWAIIAN FRUIT TEA',120.00)">
		<img src="m24.png" style="width:250px"><span>Product 24 - ₱120.00</span>
		<button class="btn12456">		
		<p>HAWAIIAN FRUIT&nbsp;TEA</p>
		<p>120.00&nbsp;PHP</p>
		</button>
	</div>	
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('MANGO OATS JASMINE TEA',80.00)">
		<img src="m25.png" style="width:250px"><span>Product 25 - ₱80.00</span>
		<button class="btn1245633">		
		<p>MANGO&nbsp;OATS JASMINE&nbsp;TEA</p>
		<p>80.00&nbsp;PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('JASMINE TEA',50.00)">
		<img src="m26.png" style="width:250px"><span>Product 26 - ₱50.00</span>
		<button class="btn12456">		
		<p>JASMINE TEA</p>
		<p>50.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('EARL GREY TEA',50.00)">
		<img src="m27.png" style="width:250px"><span>Product 27 - ₱50.00</span>
		<button class="btn12456">		
		<p>EARL&nbsp;GREY TEA</p>
		<p>50.00&nbsp;PHP</p>
		</button>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('JASMINE TEA WITH 2 TOPPINGS',55.00)">
		<img src="m28.png" style="width:250px"><span>Product 28 - ₱55.00</span>
		<button class="btn1245633">		
		<p>JASMINE&nbsp;TEA WITH&nbsp;2&nbsp;TOPPINGS</p>
		<p>55.00 PHP</p>
		</button>
	</div>
		<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('EARL GREY TEA WITH 2 TOPPING',55.00)">
		<img src="m29.png" style="width:250px"><span>Product 29 - ₱55.00</span>
		<button class="btn1245633">		
		<p>EARL&nbsp;GREY&nbsp;TEA WITH&nbsp;2&nbsp;TOPPING</p>
		<p>55.00 PHP</p>
	</div>
	<div class="img-hover-zoom img-hover-zoom--xyz" class="item" onclick="addToCart('FRESH SQUEEZED LEMONADE',50.00)">
		<img src="m30.png" style="width:250px"><span>Product 30 - ₱50.00</span>
		<button class="btn1245633">		
		<p>FRESH SQUEEZED&nbsp;LEMONADE</p>
		<p>50.00 PHP</p>
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

