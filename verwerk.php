<?php
/*We maken volgende stijl van bericht: 
	Bestelde pizza:
		grote pizza margherita (32cm)
		met
		ham, champignons, mozzarella
	Te betalen: 
	Tijdstip: 20:15
	Gegevens: 
		Ann Audenaert
		Industrieweg 228
		9030 Gent
		09/2163616
	
Opgelet: bij gebruik van mail() mag één lijn bestaan uit niet meer
dan 70 karakters en elke lijn moet worden afgesloten met een LF (\n)
*/

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <webmaster@pizza.be>' . "\r\n";

$bericht = "Bestelde pizza:\n".
			 $_POST["bodem"]
			."\n". " met "."\n" 
			.$_POST["garnituur"]
			. "\n". "Te betalen: " 
			.$_POST["prijs"]
			. "\n". "Tijdstip: "  
			.$_POST["tijdstip"]
			. "\n"."Gegevens: "."\n"
			.$_POST["naam"]. "\n"
			.$_POST["adres"]. "\n "
			.$_POST["postcode"]. "\n" . $_POST["woonplaats"]. "\n "
			.$_POST["telefoonnr"]. "\n";

mail("ann.audenaert@arteveldehs.be", "Online bestelling", $bericht, $headers);
?>