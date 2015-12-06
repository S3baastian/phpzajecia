<?php  
		include_once('Zwierz.php');
		include_once('Drapieznik.php');
	
	 function helloZwierz(Zwierz $z){
		return "Witam! To ja - Twoj/Twoja ".$z->getGatunek().". Jestem ".$z->umaszczenie." i wydam dla Ciebie słodkie ".$z->wydawanyDzwiek.".\n";
	}


	/*$zwierz = new Zwierz("szynszyl","samica","trikolorowy","hau hau");
	$innyZwierz = new Zwierz("kot", "samiec", "czarny", "miau miau");
	echo  $zwierz->otoZwierz();
	echo $innyZwierz->otoZwierz();
*/
	$z = new Zwierz("pies", "samiec", "bialy", "hau hau");
	echo helloZwierz($z);

	$d = new Drapieznik("szynszyl","samica","trikolorowy", "hau hau", new Zabojca("14", "5"));
	
	echo $d->getPredkoscMaksymalna();
	echo $d->getPrzyspieszenie();
