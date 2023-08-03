<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage class
use App\Models\Product; // Import the Product model class

use Illuminate\Support\Facades\Auth; // Import the Storage class

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
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
            'name'=>['required','min:3'],
            'price'=>['required'],
            'quantity'=>['required'],
       ]);

       if($request->hasFile('image')){

        $image=$request->file('image');

        $imageName=time().'.'.$image->getClientOriginalName();

        Storage::disk('public')->putFileAs('products',$image,$imageName);

            try {
                Product::create([
                   'name'=>$request->name,
                   'price'=>$request->price,
                   'quantity'=>$request->quantity,
                   'image'=>$imageName,
                   'user_id'=>Auth::id(),
                ]);
               return redirect()->route('products.index')->with('msg','product inserted successfully');

            } catch (\Throwable $th) {
//dd($th);
             return   redirect()->back()->with('msg','has problem with store product');
            }

            } else {

            return redirect()->back()->with('msg','you should select Image');

            }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
