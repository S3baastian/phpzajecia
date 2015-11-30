<?php
	include_once('ZabojcaInterface.php');
	class Zabojca implements ZabojcaInterface{
		
		private $waga;
		private $liczbaNog;
		
		public function __construct($waga,$liczbaNog){
			$this->waga = $waga;
			$this->liczbaNog = $liczbaNog;
		}
		
		public function getWaga(){
			return $this->waga;
		}
		
		public function setWaga($w){
			$this->waga = $w;
			
		}
        public function getLiczbaNog(){
			return $this->liczbaNog;
		}
		
		public function setLiczbaNog($l){
			$this->liczbaNog = $l;
			
		}
	}