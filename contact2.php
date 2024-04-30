<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
    background-color: white;
	color: white;
}


.topnav {
  background-color: white;
   position: fixed;
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

}body {font-family: Arial, Helvetica, sans-serif;}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button.btn12{
margin: 50px 5px;
padding:50px;
}
button.btn13{
margin: 0px;


}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40;
  Hieght: 60;
  border-radius: 50;
}

.container {
  height: 220px;
  width: 500px;
  color: black;
    margin-top: -500px 
    margin-bottom: -500px 

}
.container2 {
  height:800px;
  width: 500px;
  color: black;


}

.modal {
  display: none;
  position: fixed; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4); 
  padding-top: 60px;
}

.modal-content {
  background-color: #fefefe;
  margin: -2%  10% ;
  border: 1px solid #888;
  width: 80%; 
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}
.zoom1 {
  padding: 18px;
  background-color: white;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid black;
  color: black;
  border-radius: 10px;
}
.zoom {
  padding: 18px;
  background-color: white;
  transition: transform .2s;
  margin: -2px 2.5px;
  border: 2px solid black;
  color: white;
  border-radius: 10px;
}

.zoom:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.zoom1:hover {
  -ms-transform: scale(1); 
  -webkit-transform: scale(1); 
  transform: scale(.9); 
}
.container6 {
  text-align: center;
  color: white;
}

.label2 {
  color: Black;
  padding: 8px;
  font-family: Arial;
  font-size: 40px;
}
	.container123{
	text-align: center;
	color: white;
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

.button15 {width: 200px;}
.button25 {width: 200px;}
.button35 {width: 200px;}
.button45 {width: 200px;}

.img-hover-zoom {
  height: 250px; 
  width: 250px; 
  overflow: hidden; 
  align-items: center;
}

.img-hover-zoom img {
  transition: transform .5s ease;
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  align-items: center;
}
.img-hover-zoom:hover img {
  transform: scale(1.1);
}
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto;
  padding: 10px 90px;
  align-items: center;
  text-decoration: none;
}
.btn1245 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-118%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12456 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-65%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12457 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-140%, -130%);
  background-color: white;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  text-decoration: none;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
.btn12458 {
  float: right;
  top: 50px;
  left: 50%;
  transform: translate(-95%, -130%);
  background-color: white;
  text-decoration: none;
  color: black;
  font-size: 16px;
  padding: 12px 24px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  text-align: center;
}
 a { text-decoration: none; }
 .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
} .zoom45 {
  background-color: black;
  transition: transform .2s;
  margin: -15px 0px;
  color: black;
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
  min-width: 400px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    text-align: left;
    left: 50%;
    transform: translateX(-50%);
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown-content a {
  color: white;
  padding: -5px 100px;
  text-decoration: none;
  display: block;
  text-align: left;
  transform: translate(-15%);
  font-size: 27px;
}

.dropdown-content a:hover {
  background-color: black;
}
.rectangle {
  height: auto;
  width: auto%;
  background-color: #555;
}
</style>
</head>
<body>
<div class="topnav" class="header" id="myHeader">
<header>
&nbsp;
  <a href="sample.php" ><img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80"></a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="topnavblue">
	<button class="zoom1" class="btn12" onclick="document.getElementById('id01').style.display='block'" style="width:180px; ">Login</button>
	<button class="zoom" class="btn13" onclick="document.getElementById('id02').style.display='block'" style="width:180px; background-color: black;">Sign Up</button>
  </div>
  </header>
</div>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="new 2.php" method="post">
  <center>
    <div class="imgcontainer">
	
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
	  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <br>
	  <button class="zoom1" class="btn13" type="submit" style="width:auto;" >Login</button>
	  <br>
	  </form>
	  </div>
</div>
<div id="id02" class="modal">
<form class="modal-content animate" action="new 2.php" method="post">
  <center>
      <div class="imgcontainer">
	        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img img align="center" src="gng2.jpg" class="center" width="80" height="80" href="#about"><img align="center" src="grabngo.jpg" class="center" width="120" height="80">>
	   </div>
	   <div class="container2">
	   
    <h1>Sign Up</h1>
    <label>Please fill in this form to create an account.</label>
	<br>
	<br>
   <label for="email"><b>First Name </b></label>
    <input type="text" placeholder="First Name" name="name" required>
	
	<label for="email"><b>Last Name </b></label>
    <input type="text" placeholder="Last Name" name="name" required>
    
     <label for="email"><b> Birth Date </b></label>
    <input type="text" placeholder="Birth Date" name="Date" required>
	
	<label for="email"><b>Address </b></label>
    <input type="text" placeholder="Address" name="address" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
	<label for="email"><b>Username</b></label>
    <input type="text" placeholder="Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
	<center>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
		  <a href="login.php"><button class="zoom1" class="btn13" type="submit" style="width:auto;">Sign up</button></a>
		  </form> 
</center>
	  </div>
</div>
<div class="rectangle" align="left">
<br><br><br><br><br><br>
<h1>Top Questions</h1>
<b><h3>Where is my order?</h3>
After you place an online order, we transfer it to the restaurant which will then start preparing your food. Our restaurants do everything they can to get your food delivered as quickly as possible. However, heavy traffic or unexpectedly high demand may cause delays to your food delivery. Please bear with us. If it’s been too long, you can contact us and we will find out what’s going on immediately.<br><br><br><br>
<b><h3>I have a voucher code. How can I use it?</h3></b>
• If you have a voucher code, you can redeem it after selecting a restaurant and adding items to your basket. You will see a field to enter your voucher code on the order overview page. If the voucher is valid, the discount on your order will be calculated immediately. Only one voucher can be used per order. If your voucher code does not work, please try it on a different browser Otherwise, contact us and we will be happy to assist you.<br><br><br><br>
<b><h3>Are there any discounts available at Grab N' Go right now?</h3></b>
• Yes. Grab N' Go offers different discounts at restaurants. If you want to view them all, browse our partner vendors today!<br><br><br><br>
<h1>Ordering</h1>
<h3>How to order online at Grab N' Go?</h3>
It only takes three steps to order food online: Now sit back, relax, and we’ll get your food delivered to your doorstep.<br>
• Choose what you would like: Pick a restaurant and select items you’d like to order. You can search by restaurant name, cuisine type, dish name or by keyword.<br>
• Checkout: Enter your exact delivery address, payment method and your phone number. Always make sure that you enter the correct phone number to help us contact you regarding your order, if needed.<br>
Now sit back, relax, and we’ll get your food delivered to your doorstep.<br><br><br><br>
<h3>I need to cancel or change my order! How can I do this?</h3>
• With regard to order cancellation or refund of a payment you have made online, Feel free to coordinate with our Customer Service Representatives via our Live Chat if there are queries.<br><br><br><br>
<h3>Do I have to create a Grab N' Go account to place an order?</h3>
• Creating an account is not mandatory. You can order using our guest checkout without having to sign up. We make sure that ordering food online at Grab N' Go is quick and fuss-free. After placing your order, you will have the option of creating an account.<br><br><br><br>
<h3>How long does it take for my food order to get delivered?</h3>
• Delivery time varies from restaurant to restaurant. It also depends on the number of orders that the restaurant has to prepare and on the distance between the restaurant and your delivery address. You can see the estimated delivery time for each restaurant in your area on our website. After placing an order, a more precise delivery time will be communicated to you by SMS.<br><br><br><br>
<h3>What are the delivery costs?</h3>
• Delivery costs, just like delivery time, are determined by restaurants individually. Usually the ones closest to you will charge a small delivery fee. If a delivery driver has to travel a long way, they may charge a little extra for the service. There are many restaurants offering free delivery as well. You can easily check the delivery cost for each restaurant whilst browsing our website.<br><br><br><br> 
<h3>How can I pay for my order?</h3>
All our restaurants accept cash on delivery. In addition, there are various online payment methods available. You can check which payment methods are accepted at each restaurant by going to the ‘Info’ tab on the restaurant’s page.

<h3>• Cash on Delivery</h3>
Select ‘Cash on Delivery’ on the checkout page and pay the driver at your doorstep when receiving food.

<h3>• Credit/Debit Card</h3>
Select ‘Credit Card’ on the checkout page. After placing your order you will be redirected to the secure page of our payment partner, where you can follow its instructions. Please do not refresh the page or go back. Once the payment is confirmed, the order will be transmitted to the restaurant.<br><br><br><br>
<h1>How it works?</H1>
<h3>• What is Grab N' Go?</h3>
Grab N' Go is a convenient online food ordering website that connects users with thousands of local restaurants. Customers can browse through numerous menus and place orders for delivery or take-away at the best price. At Grab N' Go, we believe ordering food online should be fuss-free, fast and definitely fun. With just a few clicks you can order from a wide variety of delicious cuisines online. Grab N' Go provides you with restaurant menus, customer reviews and more for over 300 restaurants spread over the whole Metro Manila and soon also in Cebu city.<br><br><br><br>
<h3>• What are your opening hours?</h3>
Grab N' Go is open from 10am to 11pm from Monday to Sunday. During closing hours you can browse through restaurants and place an order for later and receive it first thing when we open.<br>
If you want to view all restaurants, just go to Then enter your location to check which restaurants can deliver to you.<br><br><br><br>
<H3>• Why am I getting a message that a restaurant does not deliver to me?</H3>
The delivery area depends on each individual restaurant and Grab N' Go has no influence on this. If you enter a specific address on the homepage, then you can browse all the restaurants that do deliver to you.<br><br><br><br>
<H1>My Account</h1>
<h3>• How do I change my password?</h3>
You can change the password by clicking forget password tab and it will ask you for your email address then the temporary password will be send to your email. <br><br><br><br>
<h3>• What are the advantages of an account at Grab N' Go?</h3>
You are not obliged to create an account, but it is very handy.There are definitely a few advantages of signing up:
• Your previous delivery addresses will be saved so that you don't have to enter them all over again on your next order.<br>
• You can track previous orders.<br>
• You can quickly re-order<br>
• You can quickly make re-orders.<br>
There are many more advantages... register with us and discover them!<br><br><br><br>
<h3>• How can I create an account at Grab N' Go?</h3>
Click on 'Log In/Sign Up' at the top of the page. Then fill out all information in the ‘Sign Up’ section and click the ‘Log In’ button. You can also create an account directly after placing an order. Your delivery address and the order will be then saved in your account.
</div>
</body>
</html>
