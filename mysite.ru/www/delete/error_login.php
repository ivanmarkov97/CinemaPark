<html>
<head>
	<style>
	 body{
		background-image: url(images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		color: #CCCCCC;
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
	</style>
</head>
<body>
	<div align="center">
		<h1>Неверный логин или пароль</h1>
		<form action="index.php" method="get">
			<button name="retry_login" class="send">Еще раз</button>
		</form>
	</div>
</body>
</html>