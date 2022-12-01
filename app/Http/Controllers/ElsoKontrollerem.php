<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElsoKontrollerem extends Controller
{
    function EgyszeruEredmeny() {
        return 'Helló világ! Árvíztűrő ütvefúrógép';
    }

    function ParameteresFuggveny($parameter) {
        return "Kaptam paramétert: ".$parameter;
    }

    function FuggvenyKeres(Request $request) {
        $s = "";
        $s .= "elérési útvonal: ".$request->path()."\r\n";
        $s .= "hoszt: ".$request->host()."\r\n";
        $s .= "metódus: ".$request->method()."\r\n";
        return $s;
    }

    function FuggvenyKeres2(Request $request, $id) {
        $s = "";
        $s .= "elérési útvonal: ".$request->path()."\r\n";
        $s .= "hoszt: ".$request->host()."\r\n";
        $s .= "metódus: ".$request->method()."\r\n";
        $s .= "id: ".$id."\r\n";
        return $s;
    }

    function FuggvenyResponse() {
        return response("<h1>Hiba történt a szerveren!<h1>", 525)
                ->header('Content-Type', 'text/html');;
    }

    function OsszetettEredmeny() {
        return 'Második próbálkozás';
    }
}
