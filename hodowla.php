<?php  
		include_once('Zwierz.php');
		include_once('Drapieznik.php');
	
	 function helloZwierz(Zwierz $z){
		return "Witam! To ja - Twoj/Twoja ".$z->gatunek.". Jestem ".$z->umaszczenie." i wydam dla Ciebie sÅ‚odkie ".$z->wydawanyDzwiek.".\n";
	}


	//$zwierz = new Zwierz("szynszyl","samica","trikolorowy","hau hau");
	//$innyZwierz = new Zwierz("kot", "samiec", "czarny", "miau miau");
	//echo  $zwierz->otoZwierz();
//	echo $innyZwierz->otoZwierz();

	//$z = new Zwierz("pies", "samiec", "bia³y", "hau hau");
//	echo helloZwierz($z);

	
	$d = new Drapieznik("szynszyl","samica","trikolorowy", "hau hau", new Zwierz("15,4"));
	
	echo $d->getPrzyspieszenie();