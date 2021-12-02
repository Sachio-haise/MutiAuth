<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Desktop;
use App\Models\PT;
use App\Models\Accessory;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $laptops = Laptop::all();
        $desktops = Desktop::all();
        $PT = PT::all();
        $Accessories = Accessory::all();
        return view('admin',['laptops'=>$laptops,'desktops' => $desktops,'PTs' => $PT,'Accessories' => $Accessories]);
    }
}
