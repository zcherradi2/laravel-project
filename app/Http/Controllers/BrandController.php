<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Store;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('brands.index',['brands'=>Brand::all()]);
    }
    public function create(){
        return view('brands.create');
    }
    public function store(){
        //\Log::info(json_encode($request->all()));
        $data = request()->validate([
            'name'=>'required',
            'website'=>'required',
            'creation_date'=>'required',
            'status'=>'required'
        ]);
        Brand::create($data);
        // $newBrand = new Brand;
        // $newBrand->fill($request->all())->save();

        return redirect("/brands"); 
    }
    public function show(Brand $brand){
        return view('brands.show',compact('brand'));
    }
    public function edit(Brand $brand){
        return view("brands.edit",compact('brand'));
    }
    public function update(Brand $brand){
        // $data = request()->validate([
        //     'name'=>'required',
        //     'website'=>'required',
        //     'creation_date'=>'required',
        //     'status'=>'required'
        // ]);
        $data = request()->validate([
            'name'=>'required',
            'website'=>'required',
            'status'=>'required'
        ]);
        $brand->update($data);
        return redirect("/brands");
    }
    public function destroy(Brand $brand){
        $brand->delete();
        return redirect("/brands");
    }
}
