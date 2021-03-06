<!DOCTYPE html>
<html lang="EN">

<head>
    <title>Welcome</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e45566d0f0.js" crossorigin="anonymous"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
    
</head>
<body>
    <div class="nav">
        <label for="toggle">&#9776;</label>
    </div>
    <input type="checkbox" name="" id="toggle">

    <div class="header">
        <img id="home" src="logo.png" width="50px">

        <div class="text">
            <a id="head1" href="#">HOME</a>
            <a id="head1" href="#">ABOUT ME</a>
            <a id="head1" href="#">CONTACTS</a>
        </div>

        <div class="icons">
            <div class="btn">
                <img onclick="popup()" id="profile" src="profile.png" width="70px">
            </div>
            <img id="basket" src="basket.png" width="50px">
        </div>
        

    </div>
    
<div id="sidebar">
<div class="toggle-btn" onclick="menu()">
<span></span>
<span></span>
<span></span>
</div>
    
</div>
    <div class="secondpart">
    <div class="search">
  <form>
  <input type="text" placeholder="Search...">
  <button type="submit"></button>
</form>
<div class="container">
 
   
  </div>
</div>
        <div class="popup">

            <div class="popup-content">
                <img onclick="close_popup()" class="closed" src="close.png" width="5%">
                <img id="booklogo" src="booklogo.png" width="10%">
                <input id="username" type="text" name="username" placeholder="Username">
                <input id="pw" type="password" name="pw" placeholder="Password">
                <button onclick="login(username.value)" id="login" class="btn btn-default">Log In</button>
            </div>

        </div>
   </div>
        <div class="user_profile">
            <img id="profile_img"
                src="https://cdn.iconscout.com/icon/premium/png-512-thumb/female-avatar-12-774634.png">
            <p id="user_name">Darina</p>
        </div>
<div class="footer">
<div class="footer-content">
<div class="footer-section about">
<h2 class="logo-text"><span>Book</span>Shop</h2>
<br>
<div class="contact">
<span><i class="fas fa-phone"></i> &nbsp; 8778-575-60-60</span>
<span><i class="fas fa-envelope"></i> &nbsp; info@190103482.stu.sdu.edu.kz</span>
</div>
<br>
<div class="socials">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-whatsapp"></i></a>
</div>
</div>
<div class="footer-section links">
<h2>Quick Links</h2>
<br>
<ul><a href="#">Our address</a>
<a href="#">Team</a>
<a href="#">Events</a>
</ul>
</div>


<div class="footer-bottom">
&copy; bookshop.com | Designed by Darina Dyussenova
</div>
</div>
   

    </div>
    <script src="script.js"></script>
    


</body>
<style>
body {

min-width: 1400px;
background-color: #fdf5e6;
}
.nav {
float: left;
display: none;
}

label {

margin: 8px 0 0 20px;
font-size: 30px;

}

#toggle {
display: none;
}

.header {
background-color: #fdf5e6;
}

.text {
display: flex;
justify-content: space-around;
margin-top: -32px;
margin-left: 550px;
margin-right: 550px;
padding-bottom: 25px;
}

#head1 {
color: black;  
}

#home {
margin-left: 380px;
margin-top: 25px;
}

.icons {
float: right;
display: flex;
margin-right: 200px;
margin-top: -60px;
cursor: pointer;
}

#profile {
padding-right: 25px;
}

.secondpart {
background-image: url(https://images.unsplash.com/photo-1485322551133-3a4c27a9d925?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=1050&q=80);
height: 600px;
margin: 0px;
background-repeat: no-repeat;
background-size: cover;
background-position-y: -350px;
text-align: center;
color: white;
}

.popup {
position: absolute;
top: 0;
display: none;
justify-content: center;
align-items: center;
width: 70%;
height: 100%;
margin: 20px 220px;
opacity: 0.5;
}

.popup-content {
background-color: #fdf5e6;
height: 300px;
width: 500px;
top: -50px;
position: relative;
padding: 10px;
border-radius: 10px;
text-align: center;

}

#booklogo {
margin-top: 15px;
padding-bottom: 5px;
}

input {
display: block;
width: 30px;
height: 100px;
margin: 0 auto;
position: relative;
}

#pw,
#username {
padding: 10px;
margin: 15px 0 0 0;
color: black;
width: 480px;
}

#login {
width: 25%;
margin-top: 50px;
margin-right: 140px;
border-radius:10px;
}


.closed {
position: absolute;
top: 5px;
right: 5px;
border-radius: 50%;
cursor: pointer;
}

.user_profile {
position: absolute;
top: 35px;
right: 30px;
margin: 0;
background-color: rgb(0, 0, 0, 0);
border-radius: 5px;
z-index: 1;
display: none;
}

#profile_img {
width: 40px;
height: 40px;
border-radius: 50%;
display: inline;
}

#user_name {
margin: 0;
padding: 10px;
display: inline;
font-size: 20px;
}


* {box-sizing: border-box;}
form {
position: relative;
width: 600px;
margin: 0 auto;
padding: 180px;
right: 60px;
top: 40px;
}
input {
width: 150%;
height: 42px;
padding-left: 10px;
border: 2px solid #7BA7AB;
border-radius: 5px;
outline: none;
background: #F9F0DA;
}
button {
position: absolute; 
top: 180px;
right: 50px;
width: 42px;
height: 41px;
border: none;
background: #7BA7AB;
border-radius: 0 5px 5px 0;
cursor: pointer;
}
button:before {
content: "\f002";
font-family: FontAwesome;
font-size: 16px;
color: #F9F0DA;
}
input:focus{
color: black
}
#sidebar{
position: fixed;
width: 250px;
height: 100%;
background: #fdf5e6;
border-right: 1px solid #fdf5e6;
left: -250px;
}
#sidebar.active{
left: 0px;
}
#sidebar ul li:first-child{
text-align: center;
color: black;
font-size: 1.95em;
list-style: none;
padding: 0px 10px 10px 10px;
}
#sidebar ul li:not(:first-child){
width: 90%;
margin-left: 10%;
font-size: 1.1em;
list-style: none;
padding: 15px 10px;
}
#sidebar ul li a{
color: black;
}
#sidebar .toggle-btn{
position: absolute;
left: 290px;
top: -62px;
background: #fdf5e6;
padding: 10px;
border-radius: 12px;
cursor: pointer;
border: 2px solid #666;
}
#sidebar .toggle-btn span{
display: block;
width: 25px;
height: 4px;
background-color: #666;
margin: 4px 0;
}
#basket{
cursor: pointer;
}
#home{
cursor: pointer;
}
@import url("https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css");
.footer{
background: #fdf5e6;
color: black;
height: 250px;
position: relative;
}
.footer .footer-content{
display: flex;
}
.footer .footer-content .about .contact span{
display: block;
font-size: 1.1em;
margin-bottom: 8px;
text-align:center;
}
.footer .footer-content .about .socials a {
border: 1px solid black;
width: 45px;
height: 41px;
padding-top: 5px;
margin-right: 5px;
text-align: center;
display: inline-block;
font-size: 1.3em;
border-radius: 5px;
color:black;
}
.footer .footer-content .links ul a{
display:block;
margin-bottom:10px;
font-size:1.2em;
color: black;
text-align: center;
}
.footer .footer-content .contact-form .contact-input{
background: #fdf5e6;
color: black;
margin: 0px 100px 0px 50px;
top: -200px;
line-height: 1.5rem;
padding: .7rem 1.2rem;
}
.footer .footer-content .contact-form .contact-ipt{
background: #fdf5e6;
color: black;
margin: 0px 100px 0px 50px;
top: -200px;
}
.footer .footer-content .footer-section{
flex: 1;
}
.footer .footer-bottom{
height: 50px;
width: 100%;
text-align: center;
position: absolute;
bottom: 0px;
left: 0px;
padding-top: 10px;
}
.container{
display:none;
}
.carousel-inner.active{
nav-down: 0px;
}
</style>