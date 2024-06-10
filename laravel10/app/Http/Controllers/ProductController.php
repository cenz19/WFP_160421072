<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $raw = DB::select("SELECT * FROM products");
        // // var_dump($raw);

        // $queryBuilder = DB::table('products as p')
        // ->get();

        // return view('product.index', compact('queryBuilder'));

        $queryModel = Product::all();
        return view('product.index', compact('queryModel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //ini ngambil dari hotel untuk drop down list hotel_id nya
        $queryModel = Hotel::all();
        return view('product.create',compact('queryModel'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Product();
        $name = $request->form_name;
        $price = $request->form_price;
        $available_room = $request->form_available_room;
        $images = $request->form_images;
        $hotel_id = $request->form_hotel_id;
        $data->created_at = now();
        $data->updated_at = now();
        $data->name = $name;
        $data->price = $price;
        $data->available_room = $available_room;
        $data->images = $images;
        $data->hotel_id = $hotel_id;
        $data->save();
        return redirect()->route('product.index')->with('status','Hooray ! Your Product data is successfully recorded !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = Product::find($id);
//        dd($data);
        return view('product.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
