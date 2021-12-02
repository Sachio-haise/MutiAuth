<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laptop-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'brand' => 'required',
            'ram' => 'required',
            'ssd' => 'required',
            'graphic'=>'required',
            'generation'=>'required',
            'price'=> 'required',
            'file'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'modaltitle'=> 'required',
            'modalbrand'=> 'required',
            'modaldescription'=>'required',

        ]);

        $description = $request->modaldescription;

         $array = array();
         foreach ($description as $file){
             array_push($array,$file);
         }

         $new_img= time() . '-'.$request->brand . '.' . $request->file('file')->extension();
         $request->file->move(public_path('img'),$new_img);


         Laptop::create([
             'brand' => $request->get('brand'),
             'ram' => $request->get('ram'),
             'ssd' => $request->get('ssd'),
             'graphic' => $request->get('graphic'),
             'generation' => $request->get('generation'),
             'price' => $request->get('price'),
             'file' => $new_img,
             'modaltitle' => $request->get('modaltitle'),
             'modalbrand' => $request->get('modalbrand'),
             'modaldescription' => serialize($array),

         ]);

         return redirect('/admin/laptop-create')->with('status','Successfully Edited!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laptop = Laptop::find($id);
        return view('laptop-update-form',['laptop'=>$laptop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'brand' => 'required',
            'ram' => 'required',
            'ssd' => 'required',
            'graphic'=>'required',
            'generation'=>'required',
            'price'=> 'required',
            'file'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048|required',
            'modaltitle'=> 'required',
            'modalbrand'=> 'required',
            'modaldescription'=>'required',

        ]);

        $description = $request->modaldescription;

        $array = array();
        foreach ($description as $file){
            array_push($array,$file);
        }

        $new_img= time() . '-'.$request->brand . '.' . $request->file('file')->extension();
        $request->file->move(public_path('img'),$new_img);


        Laptop::where("id",$id)->update([
            'brand' => $request->get('brand'),
            'ram' => $request->get('ram'),
            'ssd' => $request->get('ssd'),
            'graphic' => $request->get('graphic'),
            'generation' => $request->get('generation'),
            'price' => $request->get('price'),
            'file' => $new_img,
            'modaltitle' => $request->get('modaltitle'),
            'modalbrand' => $request->get('modalbrand'),
            'modaldescription' => serialize($array),

        ]);

        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laptop = Laptop::find($id);
        $laptop->delete();
        return  redirect('/admin');
    }
}
