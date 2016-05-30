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

    public function funkcija1(){
        $imeKlase=__CLASS__;
        $imeFunkcije=__FUNCTION__;
        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

    public function funkcija2(){
        $imeKlase=__CLASS__;
        $imeFunkcije=__FUNCTION__;
        print("<p>Url: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."</p>");
        print("<p>Ime klase: ".$imeKlase." </p>");
        print("<p>Ime pozvane funkcije: ".$imeFunkcije." </p>");
    }

}