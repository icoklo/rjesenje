<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 30.5.2016.
 * Time: 19:16
 */
print("<h1> Početna stranica, unesite neki url parametar ako želite testirati aplikaciju! </h1>");
print("<h2>Primjer url parametra: ?klasa=PrvaKlasa&funkcija=funkcija1 </h2>");

if (isset($_GET["klasa"]) && isset($_GET["funkcija"])) {
    $imeKlase = $_GET["klasa"];
    $imeFunkcije = $_GET["funkcija"];

    if (isset($imeKlase)) {
        // echo("ime klase: " . $imeKlase . "<br/>");
        switch ($imeKlase) {
            case "prvaKlasa":
            case "PrvaKlasa":
                include_once "./PrvaKlasa.php";
                $prvaKlasa = new PrvaKlasa();
                
                /*$reflection=new ReflectionClass(get_class($prvaKlasa));
                $polje=$reflection.get_class_methods(get_class($prvaKlasa));
                for($i=0;$i<sizeof($polje);$i++){
                    print($polje[$i]);
                }*/

                if ($imeFunkcije == "funkcija1") {
                    $prvaKlasa->funkcija1();
                } else if ($imeFunkcije == "funkcija2") {
                    $prvaKlasa->funkcija2();
                } else {
                    print("<p><b>Krivi naziv funkcije!</b></p>");
                    // ili koristiti echo???
                }
                break;
            case "drugaKlasa":
            case "DrugaKlasa":
                include_once "./DrugaKlasa.php";
                $drugaKlasa = new DrugaKlasa();
                if ($imeFunkcije == "funkcija1") {
                    $drugaKlasa->funkcija1();
                } else if ($imeFunkcije == "funkcija2") {
                    $drugaKlasa->funkcija2();
                } else {
                    print("<p><b>Krivi naziv funkcije</b></p>");
                }
                break;
            default:
                print("<p><b>Krivi naziv klase</b></p>");
        }
    }
} else {
    print("<p><b>Morate unijeti oba parametra, naziv klase i naziv funkcije!</b></p>");
}

