<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Yacht;
use App\YachtType;
use App\Port;
use App\Customer;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ports = Port::all();
        $yachttypes = YachtType::all();
        $yachts = Yacht::all();
        $customers = Customer::all();
        return view('dashboard',['ports'=> $ports,'yachttypes' => $yachttypes, 'yachts' => $yachts, 'customers' => $customers]);
    }
}
