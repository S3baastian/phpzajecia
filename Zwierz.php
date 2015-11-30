<?php
include_once('ZwierzInterface.php');
class Zwierz implements ZwierzInterface{

	public $gatunek;
	public $plec;
	public $umaszczenie;
	public $wydawanyDzwiek;

/*	public function Zwierz(){

		$this->gatunek = "szynszyl";
		$this->plec = "samica";
		$this->umaszczenie = "szary";
		$this->wydawanyDzwiek = "squeek";
	}
*/        public function Zwierz($gatunek,$plec,$umaszczenie,$wydawanyDzwiek){

                $this->gatunek = $gatunek;
                $this->plec = $plec;
                $this->umaszczenie = $umaszczenie;
                $this->wydawanyDzwiek = $wydawanyDzwiek;
        }
	public function otoZwierz(){
		return "Witam! To ja - Twoj/Twoja ".$this->gatunek.". Jestem ".$this->umaszczenie." i wydam dla Ciebie słodkie ".$this->wydawanyDzwiek.".\n";
	}

	public function getGatunek(){
		return $this->gatunek;
	}
	public function setGatunek($gatunek){
		$this->gatunek=gatunek;
	}

	
	public function getPlec(){
		return $this->plec;
	}
	public function setPlec($plec){
		$this->plec=plec;
	}

	
	public function getUmaszczenie(){
		return $this->umaszczenie;
	}
	public function setUmaszczenie($umaszczenie){
		$this->umaszczenie=umaszczenie;
	}

	
	public function getWydawanyDzwiek(){
		return $this->wydawanyDzwiek;
	}
	public function setWydawanyDzwiek($wydawanyDzwiek){
		$this->wydawanyDzwiek=wydawanyDzwiek;	
	}

}
