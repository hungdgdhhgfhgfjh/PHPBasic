<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="./fontawesome/css/all.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <title>Tạo Footer HTML CSS</title>
</head>
<style>
    body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
input{
    width: 362px;
    margin-left: 209px;
    margin-top: 12px;
    height: 22px;
    border-radius: 18px;
}
.input1{
    width: 380px;
    margin-left: 69px;
    margin-top: 12px;
    height: 39px;
    border-radius: 18px;
}
.button1{
    margin-left: -104px;
    height: 36px;
    width: 65px;
    border-radius: 18px;
    background: aquamarine;
    margin-top: 11px;
}
  
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Roboto;
}
body{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    min-height: 100vh;
    flex-direction: column;
}
footer{
    position: relative;
    width: 100%;
    height: auto;
    padding: 50px 100px;
    background: #111;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
footer .container{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    flex-direction: row;
}
/*Thiết Lập Cho Thành Phần Nội Dung Giới Thiệu*/
footer .container .noi-dung{
     margin-right: 30px;
 }
footer  .container .noi-dung.about{
     width:40%;
 }
 footer .container .noi-dung.about h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 footer .container .noi-dung.about h2:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
footer .container .noi-dung.about p{
     color: #999;
 }
 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: #222;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background: #f00;
 }
.social-icon li a .fa{
     color: #fff;
     font-size: 20px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
 .links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.links{
    position: relative;
    width: 25%;
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: #999;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: white;
 }
 .contact h2{
     position: relative;
     color: white;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.contact{
     width: calc(35% - 60px);
     margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #fff;
     font-size: 20px;
     margin-right: 10px;
 }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: #999;
     text-decoration: none;
 }
 .h2{
    color: blueviolet;
    margin-left: 448px;
    font-size: 47px;
    margin-top: 88px;
 }
</style>
<body>
<div class="navbar" style="background-color: #ff7f50;">
<img onclick="facebook()" style="width: 141px;height: 45px;" src="Untitled.png" alt="">
  <input class="input1" placeholder="" type="text" name="" id="">
 <button class="button1">search</button>
 <a href="product.php">Home</a>
  <a href="">News</a>
  <a  href="https://www.facebook.com/hung.HungRandy">Contact</a>
  <a href="login.php">Login</a>
  <a href="register.php">Register</a>
</div>
<script>
    function facebook(){
        window.location.href = "https://www.facebook.com/hung.HungRandy";
    }
    </script>

    
