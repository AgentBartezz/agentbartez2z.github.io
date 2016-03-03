<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device_display, initial-scale=1.0" />
		<link rel="stylesheet" href="css/style.css"/>
		
		<title>Strona główna</title>
	</head>
	<body>
		<header class="main-header">
			<div class="main-header-inner">
				<h1 class="main-header-logo">
					<img class="main-header-logo-image" alt="Helak S.C." src="images/logo.png"/>
				</h1>
				<div class="main-header-part-right">
					<div class="smth">
					</div>
				</div>
			</div>
			<div class="main-menu-container">
				<ul class="main-menu">
					<li class="main-menu-item"><a class="main-menu-link" href="index.html">START</a></li>
					<li class="main-menu-item"><a class="main-menu-link-active" href="produkty.html">PRODUKTY</a></li>
					<li class="main-menu-item"><a class="main-menu-link" href="#">DOJAZD</a></li>
					<li class="main-menu-item"><a class="main-menu-link" href="#">KONTAKT</a></li>
					<li class="main-menu-item-search"><input class="search-input" placeholder="Szukaj..."/></li>
				</ul>
			</div>
		</header>
		<main id="wrapper">
			<div class="access-container">
				<div class="form-arrive-box">
					<form name="road_to_target" method="POST" action="functions/road_to_target.php">
						<label class="label-long">Wpisz adres startowy</label>
						<input type="text" class="input-text-long" name="start_adrress"/>
						<input type="submit" value="POKAŻ TRASĘ" class="input-submit" />
					</form>
				</div>
			</div>
		</main>
		<footer id="main-footer">
		
		</footer>
	</body>
</html>
