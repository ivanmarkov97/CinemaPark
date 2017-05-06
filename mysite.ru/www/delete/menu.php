<html>
<head>
	<style>
		body{
		background-image: url(images/background.jpg);
		background-size: 100%;
		background-repeat: repeat-x repeat-y;
		margin-right: 20%;
		margin-left:20%;
		color: #CCCCCC;
	  }
		button.send {
 	  	font-weight: 700;
		font-size: 20px;
  	  	color: white;
	  	width: 360px;
	  	height: 120px;
	  	border: 10px solid rgba(33,155,90, 0);
  	  	border-radius: 30px;
  	  	background: rgb(64,199,129);
  	  	box-shadow: 0 -5px rgba(53,167,110,0) inset;
	} 
	button.send:hover { background: rgb(53, 167, 110); }
	button.send:active {
  	  background: rgb(33,147,90);
  	  box-shadow: 0 3px rgb(33,155,90) inset;
	}
	</style>
	<meta charset="utf-8">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/base.css" rel="stylesheet">
</head>


<body>
	<nav class="navbar">
       <div class="container">
			<div class="col-md-9 bartop">
            	<a class="navbar-brand askName" href="#">Cinema Park</a>
	    		<form class="navbar-form field">
            	   <input type="text" placeholder="Film" class="form-control search">
               	   <button type="submit" class="btn btn-success">Find Film!</button>
	    		</form>
			</div>
			<div class="col-md-1">
	   			<img src="picture.png" class="image-circle av_image">
			</div>
			<div class="col-md-2" align="left">
            	<p class="user_name"><a>Иван Марков</a></p>
		</div>
       </div>
      <hr>
    </nav>
<div align="center" class="container">
	<h1 style="color: #CCCCCC">Меню</h1>
	<form action="index.php" method="get">
		<div class="col-md-4">
			<table name='top_films_left'>
				<tr><td>
					<a href="templates/about_film.php">
						<img img width="87" height="116" src="images/Born.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td><img img width="87" height="116" src="images/Alice.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
				<tr><td><img img width="87" height="116" src="images/Souz.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
				<tr><td><img img width="87" height="116" src="images/Underworld.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
			</table>
		</div>
		<div class="col-md-4">
			<button class="send" name="sell">ПРОДАТЬ БИЛЕТ</button><br><br>
			<button class="send" name="timetable">РАСПИСАНИЕ</button><br><br>
			<button class="send" name="report">ОТЧЕТ</button><br><br>
			<button class="send" name="exit">ВЫХОД</button>
		</div>
		<div class="col-md-4">
			<table name='top_films_rigth'>
				<tr><td><img img width="87" height="116" src="images/Skyline2.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
				<tr><td><img img width="87" height="116" src="images/Grey.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
				<tr><td><img img width="87" height="116" src="images/Startrack.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
				<tr><td><img img width="87" height="116" src="images/Elastiko.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116"></td></tr>
			</table>
		</div>
	</form>
	<hr>
</div>
</body>	
</html>