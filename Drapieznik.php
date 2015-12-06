<?php

	include_once('Zwierz.php');
	include_once('DrapieznikInterface.php');
	include_once('Zabojca.php');

	class Drapieznik extends Zwierz implements DrapieznikInterface{

		public $gatunek;
		public $plec;
		public $umaszczenie;
		public $wydawanyDzwiek;
		
		public function __construct($gatunek,$plec,$umaszczenie,$wydawanyDzwiek, $zabojca){
			//parent::__construct($gatunek,$plec,$umaszczenie,$wydawanyDzwiek);
			$this->zabojca = $zabojca;
			             $this->gatunek = $gatunek;
                $this->plec = $plec;
                $this->umaszczenie = $umaszczenie;
                $this->wydawanyDzwiek = $wydawanyDzwiek;
		}
		public function getPredkoscMaksymalna(){
			
			$predkoscMaksymalna = ($this->zabojca->getWaga() * $this->zabojca->getLiczbaNog());
			
			return "Predkosc Maksymalna wynosi ".$predkoscMaksymalna." km/h\n";
		}
		
		 public function getPrzyspieszenie(){
			 $przyspieszenie = 0;
			 $przyspieszenie = ($this->zabojca->getWaga() + $this->zabojca->getLiczbaNog())/2;
			 
			 return "Przyspieszenie wynosi ".$przyspieszenie."\n";
		 }
	
	}