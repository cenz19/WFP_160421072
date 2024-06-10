<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Type::all();
        return view('type.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = new Type();
//        cara 1
//        $nama = $request->get('type_name');
//        cara 2
        $nama = $request->type_name;
        $data->name = $nama;
        $data->created_at = now();
        $data->updated_at = now();
        $data->save();

        return redirect()->route('type.index')->with('status','Horray ! Your data is successfully recorded !');
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
    public function edit(Type $type)
    {
        //
        $data = $type;
        return view('type.formedit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {

        $updatedData = $type;
        $updatedData->name = $request->type_name;
        $updatedData->updated_at = now();
        $updatedData->update();
        return redirect()->route('type.index')->with('status','Hooray ! Your data is successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
//        $deletedData = $type;
//        dd($deletedData);

        try {
          $deletedData = $type;

          $deletedData->delete();
          return redirect()->route('type.index')->with('status','Hooray ! Your data is successfully deleted !');
        } catch (\PDOException $ex) {
                      // Failed to delete data, then show exception message
          $msg = "Failed to delete data ! Make sure there is no related data before deleting it";
          return redirect()->route('type.index')->with('status',$msg);
        }

    }
}
