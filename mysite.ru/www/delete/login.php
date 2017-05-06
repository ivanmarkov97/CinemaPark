<html>
  <head>
	<meta charset="utf-8">
	<title>CinemaPark</title>
	<style>
	  body{
		background-image: url(images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;

	  }
	input[type="text"]{
	   border: 3px solid #708090;
	   border-radius: 10px;
	   height: 35px;
	   width: 500px;
	   font-size: 22px;
	   padding: 10px;
	}

	input[type="password"]{
	   border: 3px solid #708090;
	   border-radius: 10px;
	   height: 35px;
	   width: 500px;
	   font-size: 22px;
	   padding: 10px;
	}
	

	button.send {
 	  font-weight: 700;
  	  color: white;
	  width: 150px;
	  height: 50px;
	  border: 3px solid rgba(33,155,90, 0);
  	  border-radius: 5px;
  	  background: rgb(64,199,129);
  	  box-shadow: 0 -3px rgba(53,167,110,0) inset;
	} 
	button.send:hover { background: rgb(53, 167, 110); }
	button.send:active {
  	  background: rgb(33,147,90);
  	  box-shadow: 0 3px rgb(33,155,90) inset;
	}
	
	p{
	   color: #CCCCCC;
	   font-size: 40px;
	}
	</style>
  </head>
<body>	

  <div class="block" align="center" style="margin-top: 15%">	
    <form action="index.php" method="get" align="canter">
	<p aling="center">User's authorization</p>
	<input name="login" type="text" placeholder="Login">
	<br><br>
	<input name="pass" type="password" placeholder="Password">
	<br><br>
	<button class="send" name='log'>LOG IN</button>
    </form>
</div>
</body>
</html>