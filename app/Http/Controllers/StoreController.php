<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        return view('stores.index',['stores'=>Store::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('stores.create',["brands"=>Brand::all()]);
    }
    public function createWithBrand($brand_id){
        return view('stores.create',["brand_id"=>$brand_id]);
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'name'=>'required',
            'adress'=>'required',
            'brand_id'=>'required',
            'status'=>'required'
        ]);
        Store::create($data);
        // $newBrand = new Brand;
        // $newBrand->fill($request->all())->save();

        return redirect("/brands/".$data["brand_id"]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return view('stores.show',compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        return view("stores.edit",compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        $data = request()->validate([
            'name'=>'required',
            'adress'=>'required',
            'status'=>'required'
        ]);
        $store->update($data);
        return redirect("/stores");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        $store->delete();
        return redirect("/brands/".$store->brand->id);
    }
}
