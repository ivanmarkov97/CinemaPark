<html>
  <head>
	<meta charset="utf-8">
	<title>CinemaPark</title>
	<style>
	  body{
		background-image: url(http://mysite.ru/images/background.jpg);
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
	
	p{
	   color: #CCCCCC;
	   font-size: 40px;
	}
	</style>
	<link rel="stylesheet" type="text/css" href="http://mysite.ru/css/button.css">
  </head>
<body>	

  <div class="block" align="center" style="margin-top: 15%">	
    <form action="index.php" method="post" align="canter">
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