<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 30.5.2016.
 * Time: 19:16
 */

class DrugaKlasa{
    
    /**
     * DrugaKlasa constructor.
     */
    public function __construct()
    {

    }

    /**
     * funkcija1 ispisuje url na koji je korisnik došao, ime klase te ime funkcije koja je pozvana
     */
    public function funkcija1(){
        $imeKlase=__CLASS__;
        $imeFunkcije=__FUNCTION__;
        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

    /**
     * mnoziBrojeve ispisuje url na koji je korisnik došao, ime klase te ime funkcije koja je pozvana
     */
    public function mnoziBrojeve(){
        $imeKlase=__CLASS__;
        $imeFunkcije=__FUNCTION__;
        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

}