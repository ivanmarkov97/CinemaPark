<?php
if(!isset($_SESSION['login']) or !isset($_SESSION['password'])){
	include 'login.php';
	exit();
}
?>
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
  	  	border-radius: 5px;
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
               	   <button type="submit" class="btn btn-success" name="search_film_button">Find Film!</button>
	    		</form>
			</div>
			<div class="col-md-1">
	   			<img src="picture.png" class="image-circle av_image">
			</div>
			<div class="col-md-2" align="left">
				<?php
					$query = "SELECT PersonName, PersonSurname FROM position WHERE(login = ".$_SESSION['login']." AND password = ".$_SESSION['password'].")";
					$res = mysql_query($query);
					$row = mysql_fetch_array($res);
            		echo "<p class='user_name'><a>".$row['PersonName']." ".$row['PersonSurname']."</a></p>";
            	?>
		</div>
       </div>
      <hr>
    </nav>
<div align="center" class="container">
	<h1 style="color: #CCCCCC">Меню</h1>
	<form action="index.php" method="post">
		<div class="col-md-4">
			<table name='top_films_left'>
				<tr><td>
					<a href="templates/about_film_BORN.html">
						<img img width="87" height="116" src="images/Born.jpg" title="Увеличение" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href = "templates/about_film_ALICE.html">
						<img img width="87" height="116" src="images/Alice.jpg" title="Алиса в зазеркалье" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href="templates/about_film_ALIES.html">
						<img img width="87" height="116" src="images/Souz.jpg" title="Союзники" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href="templates/about_film_UNDERWORLD.html">
						<img img width="87" height="116" src="images/Underworld.jpg" title="Другой мир" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
			</table>
		</div>
		<div class="col-md-4">
			<button class="send" name="sell">ПРОДАТЬ БИЛЕТ</button><br><br>
			<button class="send" name="timetable">РАСПИСАНИЕ</button><br><br>
			<button class="send" name="exit">ВЫХОД</button>
		</div>
		<div class="col-md-4">
			<table name='top_films_rigth'>
				<tr><td>
					<a href="templates/about_film_SKYLINE.html">
						<img img width="87" height="116" src="images/Skyline2.jpg" title="Скайлайн 2" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href="templates/about_film_DORIAN.html">
						<img img width="87" height="116" src="images/Grey.jpg" title="Дориан Грей" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href="templates/about_film_STARTRACK.html">
						<img img width="87" height="116" src="images/Startrack.jpg" title="Стартрек" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
				<tr><td>
					<a href="templates/about_film_ELASTIKO.html">
						<img img width="87" height="116" src="images/Elastiko.jpg" title="Эластико" onmouseover="this.width=134;this.height=204" onmouseout="this.width=87;this.height=116">
					</a>
				</td></tr>
			</table>
		</div>
	</form>
	<hr>
</div>
</body>	
</html>