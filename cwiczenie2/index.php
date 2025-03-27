<!DOCTYPE html>
<html lang="pl">

<head>

	<meta charset="utf-8">
	<title>2 - Obsługa formularzy w PHP</title>
	<link href="arkusz-cwiczenia.css" rel="stylesheet">
	
</head>

<body>

	<main>
	
		<article>

			<header>
			
				<h1>Zamów korepetycje online</h1>

			</header>
			
			<form action="korepetycje.php" method="POST">
				<input type="text" name="name" placeholder="podaj imie" required>
				<select name="select">
					<option value="50">Polski</option>
					<option value="60">Historia</option>
					<option value="45">Wiedza o społeczeństwie</option>
				</select>
				<input type="number" name="amount" placeholder="Amount lekcji">

				<input type="checkbox" name="checkbox">Dodatkowe notatki
				<input type="submit" value="SUBMIT">
			</form>
			
			
			
		</article>
		
	</main>
	
</body>
</html>