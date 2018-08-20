<?php

namespace App\Http\Controllers;
use App\Portfolio as Portfolio;
class PortfolioPage extends Controller {
    public function Portfolio($id) {
        $portfolio = Portfolio::find($id);
        return view('portfolio-details')->with("p", $portfolio);
    }
}
