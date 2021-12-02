<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;
use App\Models\Desktop;
use App\Models\PT;
use App\Models\Accessory;

class HomeController extends Controller
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
        $laptops = Laptop::all();
        $desktops = Desktop::all();
        $PT = PT::all();
        $Accessories = Accessory::all();
        return view('home',['laptops'=>$laptops,'desktops' => $desktops,'PTs' => $PT,'Accessories' => $Accessories]);
    }

    public function add(Request $request,$id){
        $items = array();

        if($request->session()->has('items')){
            $items = $request->session()->get('items');
            if(!in_array($id,$items)){
                array_push($items,$id);
            }
        }else{
            array_push($items,$id);
        }

        $request->session()->put('items',$items);
        //$request->session()->flush();

        $laptops = Laptop::all();
        $desktops = Desktop::all();
        $PT = PT::all();
        $Accessories = Accessory::all();
        return view('home',['laptops'=>$laptops,'desktops' => $desktops,'PTs' => $PT,'Accessories' => $Accessories]);
    }

    public function show(Request  $request){
        $carts = $request->session()->get('items');

        $products= array();
        for($i=0;$i< count($carts);$i++){
            $laptops = Laptop::find($carts[$i]);
            $desktops = Desktop::find($carts[$i]);
            $accessories = Accessory::find($carts[$i]);
            $PTs = PT::find($carts[$i]);

            array_push($products,$laptops,$desktops,$accessories,$PTs);

        }

        $newproducts= array_filter($products, function($v){
            return !is_null($v) && $v !== '';
        });


        return view('cart',compact('newproducts'));
    }

    public function delete($id){

    }


}
