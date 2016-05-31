<?php
/**
 * Created by PhpStorm.
 * User: Igor
 * Date: 30.5.2016.
 * Time: 19:16
 */
print("<h1>Početna stranica, unesite neki url parametar ako želite testirati aplikaciju! </h1>");
print("<h2>Primjer url parametra za test: ?klasa=PrvaKlasa&funkcija=funkcija1 </h2>");

// ako je korisnik unio url parametre izvodi se dio koda unutar if naredbe
if (isset($_GET["klasa"]) && isset($_GET["funkcija"])) {
    $imeKlase = $_GET["klasa"];
    $imeFunkcije = $_GET["funkcija"];

    if (isset($imeKlase)) {
        // echo("ime klase: " . $imeKlase . "<br/>");
        switch ($imeKlase) {
            case "prvaKlasa": // ako je u url parametru uneseno prvaKlasa ili PrvaKlasa izvršit će se isti dio koda koji se nalazi u case "PrvaKlasa"
            case "PrvaKlasa":
                include_once "./PrvaKlasa.php";
                $prvaKlasa = new PrvaKlasa();
                if (strcmp($imeFunkcije,"funkcija1")==0) { // ako su stringovi jednaki poziva se funkcija1 klase PrvaKlasa
                    $prvaKlasa->funkcija1();
                } else if (strcmp($imeFunkcije,"zbrojiBrojeve")==0) { // ako su stringovi jednaki poziva se zbrojiBrojeve klase PrvaKlasa
                    $prvaKlasa->zbrojiBrojeve();
                } else {
                    print("<p><b>Krivi naziv funkcije!</b></p>");
                }
                break;
            case "drugaKlasa": // ako je u url parametru uneseno drugaKlasa ili DrugaKlasa izvršit će se isti dio koda koji se nalazi u case "DrugaKlasa"
            case "DrugaKlasa":
                include_once "./DrugaKlasa.php";
                $drugaKlasa = new DrugaKlasa();
                if (strcmp($imeFunkcije,"funkcija1")==0) { // ako su stringovi jednaki poziva se funkcija1 klase DrugaKlasa
                    $drugaKlasa->funkcija1();
                } else if (strcmp($imeFunkcije,"mnoziBrojeve")==0) { // ako su stringovi jednaki poziva se mnoziBrojeve klase DrugaKlasa
                    $drugaKlasa->mnoziBrojeve();
                } else {
                    print("<p><b>Krivi naziv funkcije!</b></p>");
                }
                break;
            default:
                print("<p><b>Krivi naziv klase!</b></p>");
        }
    }
} else {
    print("<p><b>Morate unijeti oba parametra, naziv klase i naziv funkcije!</b></p>");
}

