<?php

if (WP_DEBUG && WP_DEBUG_DISPLAY) 
{
   ini_set('error_reporting', E_ALL & ~E_STRICT & ~E_DEPRECATED);
}

function getObjectPluralStr($count) {
    global $KV;
    
    if ($count == 0) {
        return $KV["dilo"][0];
    }
    if ($count < 2) {
        return $KV["dilo"][1];
    }
    if ($count < 5) {
        return $KV["dilo"][2];
    }
    
    return $KV["dilo"][3];
}

function getCountRandomObjects() {
    return 2;
}

// řetězce

$KV["projekt_nazev"] = "Protivzdušná obrana Plzně";
$KV["projekt_info"] = 'Tento projekt mapuje existující i zaniklé objekty protiletecké obrany Plzně z doby 2. světové války. V průběhu tohoto konfliktu byly na území města vybudovány desítky civilních a vojenských krytů, které sloužily jako ochrana před nálety. První linii obrany však tvořily baterie protileteckých kanonů doplněné o sofistikovaná zaměřovací zařízení. Po válce byly všechny tyto zbraně a přístroje odvozeny a v krajině po nich zůstaly jen okopy nebo betonové podstavce. <br /><br /> Mnohé kryty a pozůstatky protileteckých baterií se dochovaly až do dnešních dnů, spousta z nich však v průběhu doby (a zvláště v posledních letech) zanikla kvůli stavební činnosti. Tento projekt si proto dává za cíl nashromáždit co nejvíce informací o tomto významném fenoménu vojenské historie a dějin města Plzně, dříve než většina jeho hmotných pozůstatků nenávratně zmizí. Máte informace o objektech protiletecké obrany nebo jste dokonce pamětníkem válečných událostí? Chtěli byste se s námi podělit o Vaše znalosti? Pak nás prosím <a href="mailto:info@18-21century.com">kontaktujte</a> nebo se přidejte do naší <a href="https://www.facebook.com/groups/protivzdusnaobranaplzne/">facebookové skupiny</a>. Pokud Vás zajímají další témata z oblasti archeologie nedávné minulosti, pak navštivte náš web <a href="http://18-21century.com/">Asociace recentní archeologie</a>.';
$KV["nahodne_dilo"] = "Náhodné objekty";
$KV["posledni_pridane"] = "Poslední přidaný";
$KV["dilo"] = array ("objektů", "objekt", "objekty", "objektů");
$KV["ukazka_dila"] = "Ukázka objektů";
$KV["hledat_v_dilech"] = "Hledat v objektech...";
$KV["katalog_del"] = "Katalog objektů";
$KV["dila_se_stitkem"] = "Objekty se štítkem";
$KV["vysledek_hledani_dila"] = "Výsledek hledání v objektech pro";
$KV["dilo_nenalezeno"] = "Nebyl nalezen žádný objekt.";
$KV["dila_se_stitkem"] = "Počet objektů se štítkem";
$KV["zobrazeni_informaci"] = "Zobrazení informací o objektu";
$KV["zadne_dilo"] = "V katalogu není žádný objekt.";

$KV["pridat_dilo"] = "Přidat objekt";
$KV["pridat_dilo_info1"] = "Děkujeme za váš zájem o projekt Protivzdušná obrana Plzn. Za každý nově přidaný objekt do mapy budeme rádi. Pro přidání můžete použít formulář níže.";
$KV["pridat_dilo_info2"] = "Budeme rádi za každou novou informaci či fotografii. U fotografií prosím respektujte autorský zákon a přidávejte jen fotografie, které jsou 
vaše vlastní či ke kterým vlastníte autorská práva. Pokud nebude domluveno jinak, budou fotografie na webu k dispozici pod
volnou licencí <a href=\"http://creativecommons.org/licenses/by-sa/4.0/\">Creative Commons Attribution-ShareAlike 4.0</a>.";
$KV["pridat_dilo_nazev"] = "Název objektu:";
$KV["pridat_dilo_informace"] = "Informace o objektu:";
$KV["pridat_dilo_informace_det"] = "Volitelně vložte libovolné informace o objektu.";
$KV["pridat_dilo_informace_fot"] = "Volitelně vložte fotografie objektu.";
$KV["pridat_dilo_mapa"] = "Klepněte do mapy, kde se objekt nachází.";
$KV["pridat_dilo_submit"] = "Přidat objekt";
$KV["pridat_dilo_o_dile"] = "O objektu";



include "functions-strings.php";
