<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 30.5.2016.
 * Time: 19:16
 */

class PrvaKlasa{

    /**
     * PrvaKlasa constructor.
     */
    public function __construct()
    {
        
    }

    /**
     * funkcija1 ispisuje url na koji je korisnik došao, ime klase te ime funkcije koja je pozvana
     */
    public function funkcija1(){
        $imeKlase=__CLASS__; // konstanta koja sadrži ime klase u kojoj se funkcija nalazi
        $imeFunkcije=__FUNCTION__; // konstanta koja sadrži ime funkcije

        // $_SERVER['HTTP_HOST'] je superglobalna varijabla koja vraća ime servera na kojem se aplikacija pokreće, u mojem slučaju je to localhost
        // $_SERVER['REQUEST_URI'] je superglobalna varijabla koja vraća url na koji je korisnik došao
        // npr: ako je puni url na koji je korisnik došao http://localhost/plavaTvornica/rjesenje/?klasa=PrvaKlasa&funkcija=funkcija1
        // $_SERVER['HTTP_HOST'] će vratiti localhost
        // $_SERVER['REQUEST_URI'] će vratiti /plavaTvornica/rjesenje/?klasa=PrvaKlasa&funkcija=funkcija1

        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

    /**
     * zbrojiBrojeve ispisuje url na koji je korisnik došao, ime klase te ime funkcije koja je pozvana
     */
    public function zbrojiBrojeve(){
        $imeKlase=__CLASS__;
        $imeFunkcije=__FUNCTION__;
        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

}

