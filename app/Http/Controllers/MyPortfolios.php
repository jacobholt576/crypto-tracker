<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;

class MyPortfolios extends Controller
{
    function getPortfolio() {
        $ports = DB::table('portfolios')->where('user_id', Auth::id())->get();
        return view('/my-portfolio')->with("ports", $ports);
    }
}
