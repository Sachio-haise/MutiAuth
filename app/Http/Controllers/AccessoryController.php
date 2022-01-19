<?php

namespace App\Http\Controllers;

use App\Models\Accessory;
use Illuminate\Http\Request;

class AccessoryController extends Controller
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
        return view('accessory-form');
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
            'model' => 'required',
            'colour'=>'required',
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


        Accessory::create([
            'model' => $request->get('model'),
            'brand' => $request->get('brand'),
            'colour' => $request->get('colour'),
            'price' => $request->get('price'),
            'file' => $new_img,
            'modaltitle' => $request->get('modaltitle'),
            'modalbrand' => $request->get('modalbrand'),
            'modaldescription' => serialize($array),

        ]);

        return redirect('/admin/accessory-create')->with('status','Successfully Edited!');
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
        $accessory = Accessory::find($id);
        return view('accessory-update-form',['accessory'=>$accessory]);
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
            'model' => 'required',
            'colour'=>'required',
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


        Accessory::where('id',$id)->update([
            'model' => $request->get('model'),
            'brand' => $request->get('brand'),
            'colour' => $request->get('colour'),
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
        $accessory = Accessory::find($id);
        $accessory->delete();
        return redirect('/admin');
    }
}
