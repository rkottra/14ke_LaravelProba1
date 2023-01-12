<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Pilota;


class Pilotak extends Controller
{
    function Listazas() {
        $pilotak = DB::select("SELECT pnev FROM pilotak");
        $s = "<ul>";
        foreach ($pilotak as $pilota) {
            $s .= "<li>".$pilota->pnev."</li>\r\n";
        }
        $s .= "</ul>";
        return response($s, 200)
               ->header('Content-Type', 'text/html');
    }

    function Listazas2($type="html") {
        $pilotak = DB::select("SELECT pnev FROM pilotak");
        if ($type == "html") {
            $s = "<ul>";
            foreach ($pilotak as $pilota) {
                $s .= "<li>".$pilota->pnev."</li>\r\n";
            }
            $s .= "</ul>";
            return response($s, 200)
                ->header('Content-Type', 'text/html');
        } elseif ($type == "json") {
            return $pilotak;
        } else {
            $s = "";
            foreach ($pilotak as $pilota) {
                $s .= $pilota->pnev."\r\n";
            }
            return response($s, 200)
                   ->header('Content-Type', 'text/plain');
        }
    }

    function modelLista() {
        return Pilota::all();
    }

    function modelLista2($ev) {
        return Pilota::where("szev", $ev)->get();
    }
}
