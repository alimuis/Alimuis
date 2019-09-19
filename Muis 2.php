<?php

	class Elektronik{
		

			public $jdl, $pnrbt, $nmpnls, $hal;
			public function __construct($jdl = "Merek sabun", $pnrbt = "jenis sabun", $nmpnls = "berat bersih", $hal = "warna sabun"){
				$this->jdl = $jdl;
				$this->pnrbt = $pnrbt;
				$this->nmpnls = $nmpnls;
				$this->hal = $hal;
			
			}
			public function getinfoBook(){

				$bku = "<br>Merek sabun : {$this->jdl}, <br>jenis sabun: {$this->pnrbt}, <br>berat bersih : {$this->nmpnls}, <br>warna sabun: {$this->hal}";

				return $bku;		
			}
	}

	Class BukuSatu extends Elektronik {

		public function getinfoBook(){
			$bku = "sabun A : ".parent::getinfoBook();
			return $bku;
		
		}
	}
	class BukuDua extends Elektronik{

		public $rwyt;
		public function __construct($jdl, $pnrbt, $nmpnls, $hal, $rwyt){
			parent::__construct($jdl, $pnrbt, $nmpnls,$hal, $rwyt);
			$this->rwyt = $rwyt;
		}
		public function getinfoBook(){

			$bku = "sabun B : ".parent::getinfoBook()."<br>Harga : {$this->rwyt}";
			return $bku;
		}
	}	

	$bku1 = new BukuSatu("lifeboy", "cair", "500 ml", "merah");
	$bku2 = new BukuDua("give", "batangan", "250 ml", "orange", "Rp. 2500");
	echo $bku1->getinfoBook();
	echo "<br>";
	echo "<br>";
	echo $bku2->getinfoBook();


?>