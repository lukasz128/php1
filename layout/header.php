<!DOCTYPE HTML>
<html lang="pl">
	<head>
		<title><?=@$_GET['id']?> | PHP && MySQL Projektekt</title>
		<meta charset="utf-8">
      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	<meta http-equiv="X-UA-Comatible" content="ie=edge">
      	<meta name="description" content="Projekt w PHP i MySQL">
		<link rel="Stylesheet" href="main.css">
		<script src="script/main.js"> </script>
		<script src="script/validation.js"> </script>
	</head>
	<body>

		<header class="main-header">

			<nav class="main-nav">
				<ul class="main-list">
					<li class="item"> 
						<a href="?id=main">
							<h1 class="title"> PHP && MySQL Projekt</h1> 
						</a>
					</li>

					<li class="item"><a href="?id=forms" class="links">Formularze</a></li>
					<li class="item"><a href="?id=stats" class="links">Statystyki</a></li>
					<li class="item"><a href="?id=main-content" class="links">Przedmioty w Sklepie </a></li>
					<li class="item"><a href="?id=function" class="links">Funkcje Agregujące </a></li>
				</ul>
			</nav>

		</header>

		<main class="container">