<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $queryBuilder = DB::table('hotels as h')
        // ->get();

        // return view('hotel.index', compact('queryBuilder'));
        $queryModel = Hotel::all();
        return view('hotel.index', compact('queryModel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function availablehotelroom(){
        $queryModel = Hotel::join('products as p', 'hotels.id', '=', 'p.hotel_id')->select('hotels.name', 'hotels.city', DB::raw('sum(p.available_room) as kamar_tersedia'))
        ->groupBy('hotels.id','hotels.name','hotels.city')
        -> get();
//        dd($queryModel);
        return view('hotel.available_room', compact('queryModel'));
    }

    public function averagePriceByHotelType()
    {
        $hotelData = Hotel::select('t.name as type_name', 'hotels.name as hotel_name',
            DB::raw('COALESCE(AVG(p.price), 0) AS average_price'))
            ->Join('types AS t', 'hotels.type_id', '=', 't.id')
            ->Join('products AS p', 'hotels.id', '=', 'p.hotel_id')
            ->groupBy('t.name', 'hotels.name')
            ->get();
//        dd($hotelData);
        return view('hotel.avg_price_by_hotel_type', compact('hotelData'));
    }

    // public function showInfo()
    // {
    //     return response()->json(array(
    //         'status'=>'oke',
    //         'msg'=>"<div class='alert alert-info'>
    //                 Did you know? <br>This message is sent by a Controller.'</div>"
    //     ),200);
    // }
    public function showInfo()
    {
        $result=Hotel::join('products as p','hotels.id',"=",'p.hotel_id')->orderBy('p.price','DESC')
            ->select('hotels.name', 'p.price', 'p.name as productName')->first();

        return response()->json(array(
            'status'=>'oke',
            'msg'=>"<div class='alert alert-info'>
            Did you know? <br>The most expensive product is in Hotel: ".$result->name."<br>Product Name: ".$result->productName.
            "<br>Price: $".$result->price."</div>"
        ),200);
    }
    
    public function showProducts()
    {
        $hotel=Hotel::find($_POST['hotel_id']);
        $nama=$hotel->name;
        $data=$hotel->products;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('hotel.showProducts',compact('nama','data'))->render()
        ),200);
    }
}
