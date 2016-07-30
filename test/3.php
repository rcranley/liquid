<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Liquid Development</title>
  <script src="https://www.google.com/jsapi"></script>
  <script>
    google.load("jquery","1.6.4");
  </script>
<script type="text/javascript">

var resizeBg = function() { 
  var h = self.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
  var w = self.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
  var elem = document.getElementById('backgroundImage');

  if (w > h) {
    elem.width = w;
    elem.height = w;
  } else {
    elem.height = h;
    elem.width = h;
  }
}

$(window).resize(function(){
     resizeBg()
});
</script>
  <link href="styles/3.css" rel="stylesheet">
</head>
  <body id="index" class="home">   
<div id="container">

      <nav>
        <div id="menu" class="default">
          <ul>
        	<li class="active" id="main1">
              	<a href="index.php">Home</a>
            	</li>
        	<li id="main2" >
              	<a href="#">Info</a>
              	<ul class="sub-menu" >
                <li id="sub1" class="menu-item" >
                  <a href="services/" style="">Service</a>
                </li>
                <li id="sub2" class="menu-item" >
                  <a href="contact/" style="">Contact</a>
                </li>
                <li id="sub3" class="menu-item" >
                  <a href="company/" style="">Company</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>

    <div id="content">

      <div class="full"></div>
      
      <div class="third"></div>
      <div class="third"></div>
      <div class="third"></div>
      
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      <div class="nineth"></div>
      
      <div class="full"></div>
      
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      More
      <br><br><br><br><br><br><br>
      Even more
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      More
      <br><br><br><br><br><br><br>
      Even more
    </div>
    <div id="footer">
    	<div class="copy">Copyright &copy; 2000-2011 Liquid Development, LLC. All rights reserved.</div>
    </div>
</div>
    <script src="scripts/jquery.easing.1.3.js" type="text/javascript"></script>
    <script src="scripts/liquid.js" type="text/javascript"></script>
  </body>
</html>