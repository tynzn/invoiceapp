<?php

namespace App\Http\Controllers;

use App\invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $invoices = invoice::all();
        return view('invoice.index')->with('invoices', $invoices);

     // return invoice::All();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

   
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'Name' => 'required',
          
           'phoneNumber' =>'required',
           'Address' => 'required',
           'Product' => 'required',
           'Price' => 'required',
           'Quantity' => 'required',
          
    
           ]);
           $invoice= New invoice;
           $invoice->Name =$request->input('Name');
         
           $invoice->phoneNumber =$request->input('phoneNumber');
           $invoice->Address =$request->input('Address');
           $invoice->Product =$request->input('Product');
           $invoice->Price =$request->input('Price');
           $invoice->Quantity =$request->input('Quantity');
           $invoice->totalPrice = $invoice->Price * $invoice->Quantity;
           $invoice->user_id = Auth()->user()->id;
        $invoice->Save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function show(invoice $invoice)
    {
        return $invoice;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function edit(invoice $invoice)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\invoice  $invoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(invoice $invoice)
    {
        //
    }
}
