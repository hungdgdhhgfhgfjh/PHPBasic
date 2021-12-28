<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
    <title>Document</title>
    <link rel="stylesheet" href="./fontawesome/css/all.css">
</head>
<style>
   body {
    background-color: white;
    
    padding: 0;
    margin: 0;
    perspective: 1px;
    transform-style: preserve-3d;
    height: 100%;
    overflow-x: hidden;
    font-family: 'Roboto';
  }
  .left-underline {
    display: inline-block;
    vertical-align: middle;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    position: relative;
    overflow: hidden;
  }
  .left-underline:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 0;
    right: 100%;
    bottom: 0;
    background: #ECECEC;
    height: 4px;
    -webkit-transition-property: right;
    transition-property: right;
    -webkit-transition-duration: 0.15s;
    transition-duration: 0.15s;
    -webkit-transition-timing-function: ease-out;
    transition-timing-function: ease-out;
  }
  .left-underline:hover:before, .left-underline:focus:before, .left-underline:active:before {
    right: 0;
  }
  div.navbar {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: black;
    -webkit-box-shadow: 0px 2px 6px 0px ;
    -moz-box-shadow:    0px 2px 6px 0px ;
    box-shadow:         0px 2px 6px 0px;
    z-index: 9999999;
  }
  div.navbar > ul.navbar-container {
    list-style-type: none;
    margin: 0;
    padding-left: 1em;
    padding-right: 1em;
    overflow: hidden;
  }
  div.navbar > ul > li.nav-item {
    float: right;
   
    transition: all 0.5s ease;
  }
  div.navbar > ul > li.active {
    background-color: rgba(0, 0, 0, 0.18);
  }
  div.navbar > ul > li:hover {
    background-color: rgba(0, 0, 0, 0.2);
  }
  a.nav-button {
    font-family: 'Roboto';
    text-decoration: none;
    line-height: 60px;
    padding-left: 20px;
    padding-right: 20px;
    color: rgba(228, 241, 254, 1);
    transition: all 0.5s ease;
  }
  a.nav-button:hover {
    text-decoration: none;
  }
  li.active > a.nav-button {
    cursor: default;
  }
  .brand-logo {
    float: left;
    cursor: default;
  }
 .img1{
     height: 200px;
    margin-top: 128px;
    width: 1280px;
    
}
 .img{
  height: 200px;
  width: 1280px;
 }
  .input1{
    width: 369px;
    margin-left: 440px;
    margin-top: 14px;
    height: 36px;
    border-radius: 31px
  }
  .button1{
    margin-left: -91px;
    width: 87px;
    height: 39px;
    border-radius: 25px;
    background-color: darkturquoise;
  }
  .div1{
    background-color: #ffa502;
    height: 67px;
  }
  .dangnhap{
    width: 112px;
    margin-top: -67px;
    margin-left: 961px;
    height: 67px;
    background-color: #f1c40f;
    border: 0px;
  }
  .dangky{
    width: 112px;
    margin-top: -82px;
    margin-left: 1124px;
    height: 67px;
    background-color: #f1c40f;
    border: 0px;
  }
  .form1{
    margin-top: -33px;
    width: 20px;
  }
  .form2{
    margin-top: -45px;
    width: 20px;
  }
  /* Blank lines for ease and view */
  /* */
  /* Blank lines for ease and view */
  /* */
/* 
</style>
<?php include_once "body.php"; ?>