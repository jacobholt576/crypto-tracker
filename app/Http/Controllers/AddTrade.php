<?php

namespace App\Http\Controllers;

use App\Trade;
use App\Portfolio as Portfolio;
use Illuminate\Http\Request;

class AddTrade extends Controller
{

    public function form($id) {
      $portfolio = Portfolio::find($id);
      return view('add-trade');
    }
    public function addTrade(Request $request) {
        $Trade = new Trade();
        $Trade->currency = $request['currency'];
        $Trade->quantity = $request['quantity'];
        $Trade->price = $request['price'];
        $Trade->type = $request['type'];
        $Trade->description = $request['description'];
        $Trade->save();
        return redirect()->route('my.portfolios');
    }
}
