<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
<style>
body {
    font-family: 'Acme';font-size: 40px;
    margin: 0;
}
.button{
  border-radius: 4px;

  border: none;
  color : white; 
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 300px;
  height:300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

.hero-image {
  background-image: url("bus10.jpg");
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>

<div class="hero-image">
<div class="topnav">
  <a href="index.php">LOGOUT</a>
  
  
</div>
  <div class="hero-text">
  <div class="w3-container">
  <div class="w3-display-middle w3-large">
  


<h2 class="w3-large"><font color="white" >ADMIN DASHBOARD</h2>

<button class="button" id="btone" style="background-color: #F4A460"><span><font face="verdana" size="5" color="white" >View Reservation</font></span></button>
<script>
    var btn = document.getElementById('btone');
    btn.addEventListener('click', function() {
      document.location.href = 'viewreservation.php';
    });
  </script>
<button class="button" id="bttwo" style="background-color: #DB7093"><span><font face="verdana" size="5" id="btone" color="white" >Delete bus routes</font></span></button>
<script>
    var btn = document.getElementById('bttwo');
    btn.addEventListener('click', function() {
      document.location.href = 'deletebus.php';
    });
  </script>
<button class="button" id="btone" style="background-color: #FA8072"><span><font face="verdana" size="5" id="btthree" color="white" >Insert bus details</font></span></button>
<script>
    var btn = document.getElementById('btthree');
    btn.addEventListener('click', function() {
      document.location.href = 'insertbus1.php';
    });
  </script>
<button class="button" id="btfour" style="background-color:#87CEEB"><span><font face="verdana" size="5" color="white" >Update bus details</font></span></button>
<script>
    var btn = document.getElementById('btfour');
    btn.addEventListener('click', function() {
      document.location.href = 'updatebus.php';
    });
  </script>



</body>
</html>
