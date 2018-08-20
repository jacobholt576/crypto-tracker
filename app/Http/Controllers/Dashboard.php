<?php
namespace App\Http\Controllers;
use App\Portfolio as Portfolio;

class Dashboard extends Controller {
      public function getDashboard($id) {
        $portfolio = Portfolio::find($id);
          return view('dashboard')->with("p", $portfolio);
      }
}
