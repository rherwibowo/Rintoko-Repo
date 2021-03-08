<?php
  include "php-class/crudClass.php";
  include('php/login.php'); /*Includes Login Script*/
?>
<!doctype html>
<html lang="en">
<head>
  <meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<title>Login Form</title>
  <link rel="shortcut icon" href="/kmgi/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/kmgi/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/myFonts.css" />
	<style>
    html {
      height: 100%;
    }
  	body {
      height: 100%;
      margin: 0;
      background-repeat: no-repeat;
      background-attachment: fixed;
      /*background: rgba(56, 54, 67, .9);
      background  : -webkit-radial-gradient(1000px 800px at 0px 0px, rgba(50, 103, 109, 0.9) 10%, transparent 100%),-webkit-radial-gradient(800px 600px at 66% 100%, rgba(73, 126, 148, 0.5) 50%, transparent 100%),-webkit-linear-gradient( to left, #838e66, #67674c, rgba(34, 19, 161, 0.75));
      background: radial-gradient(1000px 800px at 0px 0px, rgba(50, 103, 109, 0.9) 10%, transparent 100%),radial-gradient(800px 600px at 66% 100%, rgba(73, 126, 148, 0.5) 50%, transparent 100%),linear-gradient( to left, #838e66, #67674c, rgba(34, 19, 161, 0.75));
      background: rgba(56, 54, 67, .9);
      background  : -webkit-radial-gradient(800px 400px at 0px 0px, rgba(247,128,1,.3) 10%, transparent 100%),-webkit-radial-gradient(800px 600px at 66% 100%, rgba(65,101,116,.5) 50%, transparent 100%),-webkit-linear-gradient( to left, #383643, #67674c, #235358 );
      background: radial-gradient(800px 400px at 0px 0px, rgba(247,128,1,.3) 10%, transparent 100%),radial-gradient(800px 600px at 66% 100%, rgba(65,101,116,.5) 50%, transparent 100%),linear-gradient( to left, #383643, #67674c, #235358 );*/
      /*background: rgba(106, 98, 104, .9);
    	background: -webkit-radial-gradient(800px 400px at 0px 0px, rgba(252, 177, 0, 0.1) .1%, transparent 100%), -webkit-radial-gradient(800px 400px at 100% 100%, rgba(255, 255, 255, 0.1) .1%, transparent 100%), -webkit-linear-gradient( to left, #50555d, #6a6268 );
    	background: radial-gradient(800px 400px at 0px 0px, rgba(252, 177, 0, 0.1) .1%, transparent 100%), radial-gradient(800px 400px at 100% 100%, rgba(255, 255, 255, 0.1) .1%, transparent 100%), linear-gradient( to left, #50555d, #6a6268 );*/
      /*background: radial-gradient(800px 400px at 0px 0px, rgba(169, 169, 169) .1%, transparent 100%), radial-gradient(800px 400px at 100% 100%, rgba(200, 183, 169, 1) .1%, transparent 100%), linear-gradient( to left, #93bfcc, #004e9a )*/
      background: radial-gradient(800px 400px at 0px 0px, rgb(0, 243, 255) 5%, transparent 100%), radial-gradient(800px 400px at 100% 100%, rgb(194, 255, 65) 5%, transparent 100%), linear-gradient( to left, rgba(255, 212, 0, .8), rgba(0, 149, 255, 0.8)), url(img/triangles.jpg) center center,no-repeat;
    }
  	form {margin-bottom: 20px;}
  	select {padding: 0;}
  	textarea {min-height: 60px; }
  	select {width: 220px; }
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus,
    select:-webkit-autofill,
    select:-webkit-autofill:hover,
    select:-webkit-autofill:focus {
      -webkit-text-fill-color: #fff;
      -webkit-box-shadow: 0 0 0px 1000px rgba(9, 102, 63,.1) inset;
      transition: background-color 5000s ease-in-out 0s;
    }
  	.notice {
      width       : 100%;
      background-color: rgba(0, 0, 0, .4);
      border-bottom: solid 1px rgba(231, 254, 207, .2);
      color       : #d12422;
      position    : fixed;
      top         : 0;
      left        : 0;
      font-size   : 16px;
      font-weight : bold;
      height      : 44px;
  	}
  	.notice p.warn {font-family: Bri; text-align: center;}
    .formOverlay{
      position: absolute;
      left: 0;
      top: -10%;
      right: 0;
      bottom: 0;
      margin: auto;
      width: 311px;
      height: 339px;
      background:  rgba(88, 88, 88, .3);
      /*box-shadow: 20px 20px 40px rgba(0, 0, 0, .22), 5px 5px 10px rgba(66, 66, 66, .5);*/
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      border-radius: 10px;
      backdrop-filter: blur(5px);
      -webkit-backdrop-filter: blur(5px);
    }
    .form-bg {}
  	input[type="text"], input[type="password"]{
      font-family      : sans-serif;
      font-weight      : 300;
      font-size        : 16px;
      letter-spacing   : 1px;
      width            : 250px;
      height           : 33px;
      padding          : 0 10px 0 10px;
      margin           : 1px 20px;
      border           : transparent;
      color            : #fff;
      background-color : rgba(0, 0, 0, 0.1) !important;
      border-radius    : 10px;
  	}
  	input[type="text"]:focus, input[type="password"]:focus{border-bottom : 1px solid #e80000;}
  	button {
      height        : 35px;
      font-family   : Bri;
      font-size     : 20px;
      font-weight   : bolder;
      text-align    : center;
      border-radius : 25px;
      margin-top    : 50px;
      color         : #fff;
      border        : none;
      margin-left   : auto;
      margin-right  : auto;
      display       : block;
      width         : 50%;
      background    : rgba(7, 76, 109, .9); /* fallback for old browsers */
    /*background: -webkit-linear-gradient(to left, rgba(11, 115, 164, 0.7), rgba(7, 76, 109, .9));
    background: linear-gradient(to left, rgba(11, 115, 164, 0.7), rgba(7, 76, 109, .9));*/
  	}
  	button:hover {
      color            : #fff;
      background-color : #e80000;
      border           : 1px solid #e80000;
  	}
  	label {
      float          : left;
      display        : inline;
      line-height    : 33px;
      margin-left    : 4px;
      padding-right  : 10px;
      text-align     : right;
      vertical-align : middle;
      font-family    : sans-serif;
      font-weight    : 300;
      font-size      : 16px;
      letter-spacing : 1px;
      width          : 110px;
      color: #fff;
  	}
    .logo {
        position : absolute;
        top      : 5px;
        left     : 5px;
        height   : 75px;
        width    : 75px;
        z-index  : 100;
      }
    .formHeader {
      font-size               : 25px;
      text-align              : center;
      vertical-align          : middle;
      font-weight             : bold ;
      font-family             : Bri;
      line-height             : 45px;
      margin-top              : 0px;
      color                   : #f78001;
      border-top-left-radius  : 10px;
      border-top-right-radius : 10px;
      background              : rgba(0, 0, 0, .2);
      /*background: rgba(149, 57, 152, .9);
    background: -webkit-linear-gradient(to left, rgb(185, 79, 189), rgba(149, 57, 152, .9));
    background: linear-gradient(to left, rgba(185, 79, 189), rgba(149, 57, 152, .9));*/
    }
    .footer {
      position        : absolute;
      right           : 0;
      bottom          : 0;
      left            : 0;
      padding         : .5rem;
      background-color: rgba(0, 0, 0, .4);
      color           : #fff;
      font-family     : Bri;
      font-size       : 14px;
      font-style      : normal;
      font-weight     : bolder;
      text-decoration : none;
      text-align      : right;
    }
    .layerBackGround {
      display          : block;
      position         : absolute;
      top              : 0%;
      left             : 0%;
      width            : 100%;
      height           : 100%;
      max-height       : 100%;
      background-color : rgba(255, 0, 255, .2);
      -moz-opacity     : 0;
      opacity          : 50;
      filter           : alpha(opacity=50);
    }
	</style>
  <script type="text/javascript">
    function DetectTheThing()
    {
       var uagent = navigator.userAgent.toLowerCase();
       if (uagent.search("iphone") > -1 || uagent.search("ipad") > -1 || uagent.search("android") > -1 || uagent.search("blackberry") > -1 || uagent.search("webos") > -1)
          window.location.href ="mobile/m.login.php";
    }
  </script>
</head>
<!-- <body onload="DetectTheThing()"> -->
<body>
  <div class="layerBackGround"></div> <!-- <div class="layer1"></div><div class="layer2"></div> -->
	<div class="notice">
		<p class="warn"><?php echo $error; ?></p>
	</div>
	<!-- Primary Page Layout -->
	<div class="container">
    <div class="formOverlay">
      <form class="form-bg" method="POST"action="">
        <div class="formHeader">Welcome</div>
				<p>
          <label for="loginUsername">Username :</label>
          <input type="text" required placeholder="....." name="loginUsername" id="loginUsername">
        </p>
				<p>
          <label for="loginPassword">Password :</label>
          <input type="password" required placeholder="....." name="loginPassword" id="loginPassword">
        </p>
				<button id="submit-button" type="submit">login</button>
			</form>
    </div>
	</div>
	<div class="footer">Copyright &copy; 2018.</div>
</body>
</html>
