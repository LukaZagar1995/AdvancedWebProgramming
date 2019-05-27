<?php

interface iRadovi {
    public function create($naziv, $tekst, $link, $oib);
    public static function read();
    public static function save($data);    
}

class DiplomskiRadovi implements iRadovi {

	private $naziv_rada;
	private $tekst_rada;
	private $link_rada;
	private $oib_tvrtke;

	function __construct($naziv, $tekst, $link, $oib) {
        $this->naziv_rada = $naziv;
		$this->tekst_rada = $tekst;
		$this->link_rada = $link;
		$this->oib_tvrtke = $oib;
    }
      
    
    function postavi_naziv($naziv) {
        $this->naziv_rada = $naziv;
    }        
    function dohvati_naziv() {
        return $this->naziv_rada;
    }
	function postavi_tekst($tekst) {
        $this->tekst_rada = $tekst;
    }        
    function dohvati_tekst() {
        return $this->tekst_rada;
    }
	function postavi_link($link) {
        $this->link_rada = $link;
    }        
    function dohvati_link() {
        return $this->link_rada;
    }
	function postavi_oib($oib) {
        $this->oib_tvrtke = $oib;
    }        
    function dohvati_oib() {
        return $this->oib_tvrtke;
    }
	public function create($naziv, $tekst, $link, $oib){
		self::__construct($naziv, $tekst, $link, $oib);		
	}
	public static function save($data){
		$pdo = new PDO('mysql:dbname=radovi;host=localhost', 'root', '');
		
		$q = 'INSERT INTO diplomski_radovi
		(naziv_rada, tekst_rada, link_rada, oib_tvrtke) VALUES (:naziv, :tekst, :link, :oib)';
        $stmt = $pdo->prepare($q);
		
		foreach($data as $rad){

        //Izvrši upit
        if ($stmt->execute(array(':naziv' => $rad->dohvati_naziv(), ':tekst' => $rad->dohvati_tekst(), ':link' => $rad->dohvati_link(), ':oib' => $rad->dohvati_oib(),))) {
            echo '<p>Rad je dodan!</p>';
        } else {
            echo '<p>Rad nije dodan!</p>';
        }
		}
		
		
	}
	public static function read(){
		
		$pdo = new PDO('mysql:dbname=radovi;host=localhost', 'root', '');
		
		$q = 'SELECT * FROM diplomski_radovi';
		$r = $pdo->query($q); 
		$r->setFetchMode(PDO::FETCH_NUM);
		
		while ($row = $r->fetch()) {
			print_r($row);
		}      
		
		
		
		
	}
	
	
	
		
    
}

?>

