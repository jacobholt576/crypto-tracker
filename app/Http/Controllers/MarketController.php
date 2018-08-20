<?php

namespace App\Http\Controllers;

class MarketController extends Controller {

    public function getMarket() {

        $json = file_get_contents('https://api.coinmarketcap.com/v2/ticker/');
        $obj = json_decode($json, true);

        return view('market')->with("obj", $obj);
    }
}
