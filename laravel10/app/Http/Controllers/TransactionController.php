<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Transaction::all();
        return view('transaction.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $customer = Customer::all();
        $user = User::all();
        $product = Product::all();
        return view('transaction.create',compact('customer', 'user', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'form_customer_id' => 'required|exists:customers,id',
            'form_user_id' => 'required|exists:users,id',
            'form_product_id' => 'required|exists:products,id',
            'form_quantity' => 'required|integer|min:1',
            'form_subtotal' => 'required|numeric|min:0.01',
        ]);

        // Create a new Transaction
        $data = new Transaction();
        $data->customer_id = $request->form_customer_id;
        $data->user_id = $request->form_user_id;
        $data->transaction_date = now();
        $data->created_at = now();
        $data->updated_at = now();
        $data->save();

        // Attach the product to the transaction with pivot data
        $data->products()->attach($request->form_product_id, [
            'quantity' => $request->form_quantity,
            'subtotal' => $request->form_subtotal,
        ]);

        // Redirect to the index route with a success message
        return redirect()->route('transaction.index')->with('status', 'Hooray! Your transaction data is successfully recorded!');
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
    public function showAjax(Request $request)
        {
                $id = ($request->get('id'));
                $data = Transaction::find($id);
                $products = $data->products;
                return response()->json(array(
                        'msg' => view('transaction.showModal', compact('data','products'))->render()
                ), 200);
        }

}
