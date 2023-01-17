<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Raleway:100);
 
 body{
 background:#222;
 margin: 40px 50px;
 color:#4a8df8;
 font-family: 'Raleway', cursive;
 font-weight:100;
 }
 h1{
 color:#4a8df8;
 font-family: 'Raleway', cursive;
 font-weight:100;
 font-stretch:normal;
 font-size:3em;
 }
 a{
 color:#4a8df8;
 font-family: 'Raleway', cursive;
 }
 .slider{
 position:absolute;
 width:400px;
 height:2px;
 margin-top:-30px;
 }
 .line{
 position:absolute;
 background:#4a8df8;
 width:400px;
 height:2px;
 }
 .break{
 position:absolute;
 background:#222;
 width:6px;
 height:2px;
 }
  
 .dot1{
 -webkit-animation: loading 2s infinite;
 -moz-animation: loading 2s infinite;
 -ms-animation: loading 2s infinite;
 -o-animation: loading 2s infinite;
 animation: loading 2s infinite;
 }
 .dot2{
 -webkit-animation: loading 2s 0.5s infinite;
 -moz-animation: loading 2s 0.5s infinite;
 -ms-animation: loading 2s 0.5s infinite;
 -o-animation: loading 2s 0.5s infinite;
 animation: loading 2s 0.5s infinite;
 }
 .dot3{
 -webkit-animation: loading 2s 1s infinite;
 -moz-animation: loading 2s 1s infinite;
 -ms-animation: loading 2s 1s infinite;
 -o-animation: loading 2s 1s infinite;
 animation: loading 2s 1s infinite;
 }
 
 @keyframes "loading" {
 from { left: 0; }
 to { left: 400px; }
 }
 @-moz-keyframes loading {
 from { left: 0; }
 to { left: 400px; }
 }
 @-webkit-keyframes "loading" {
 from { left: 0; }
 to { left: 400px; }
 }
 @-ms-keyframes "loading" {
 from { left: 0; }
 to { left: 400px; }
 }
 @-o-keyframes "loading" {
 from { left: 0; }
 to { left: 400px; }
     
    </style>
</head>
<body>
    <br><br><br>
<h1>Just a moment...</h1>
<div class="slider">
	<div class="line"></div>
	<div class="break dot1"></div>
	<div class="break dot2"></div>
	<div class="break dot3"></div>
</div>
<p>We're redirecting you to our new site... Not working? <a href="#0">Click here.</a></p>
</body>
</html>