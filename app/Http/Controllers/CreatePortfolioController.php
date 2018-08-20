<?php

namespace App\Http\Controllers;
use App\Portfolio;
use Illuminate\Http\Request;

class CreatePortfolioController extends Controller {

    public function form() {
    return view('create-portfolio');
  }
    public function createPortfolio(Request $request) {
        $Portfolio = new Portfolio();
        $Portfolio->name = $request['name'];
        $Portfolio->description = $request['description'];
        $request->user()->portfolios()->save($Portfolio);
        return redirect()->route('home');

    }
}
