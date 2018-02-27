<?php
 
    session_start();
     
    if (!isset($_SESSION['zalogowany']))
    {
    	echo "<script type='text/javascript'>alert('Musisz być zalogowany!');</script>";
        header('Location: zalogujsie.html');
        exit();
    }

?>


<!DOCTYPE html>
<html lang="pl">
<head>

	<title> FIRMA </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="formularz1.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	

</head>

<body>
	<div class="zgloszenie">
		<form action="zapisz.php" method="post">	<!-- PLIK PHP DO SPISANIA ZGLOSZENIA-->
			Imię: <br/> <input type="text" name="imie" required/> <br/> <br/>
			Nazwisko: <br/> <input type="text" name="nazwisko" required/> <br/> <br/>
			Numer telefonu: <br/> <input type="tel" name="telefon" required/> <br/> <br/>
			Tatuażysta: <br/> <input type="text" name="tatuazysta" required/> <br/> <br/>
			Przybliżona data sesj: <br/> <input type="date" name="data" required/> <br/> <br/>
			Motyw Projektu: <br/> <br/><input type="file" name="projekt" /> <br/> <br/><br/>

			<input type="submit" value="Wyślij zgłoszenie"/>
		</form>
	</div>
	


</body>

</html>