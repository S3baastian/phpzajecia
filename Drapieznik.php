<?php

	include_once('Zwierz.php');
	include_once('DrapieznikInterface.php');
	include_once('Zabojca.php');

	class Drapieznik extends Zwierz implements DrapieznikInterface{
		
		public function __construct($gatunek,$plec,$umaszczenie,$wydawanyDzwiek, $zabojca){
			parent::__construct($gatunek,$plec,$umaszczenie,$wydawanyDzwiek);
			$this->zabojca = $zabojca;
		}
		public function getPredkoscMaksymalna(){
			
			$predkoscMaksymalna = ($this->zabojca->getWaga() * $this->zabojca->getLiczbaNog());
			
			return $predkoscMaksymalna;
		}
		
		 public function getPrzyspieszenie(){
			 
			 $przyspieszenie = ($this->zabojca->getWaga() + $this->zabojca->getLiczbaNog())/2;
			 
			 return $przyspieszenie;
		 }
	
	}