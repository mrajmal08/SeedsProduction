<?php

namespace App\Http\Controllers;

use App\Models\ItemsCanMake;
use App\Models\Labour;
use App\Models\Purchase;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;

class WorkOrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sales(Request $request)
    {
        $sales = Sale::all();
        if ($request->search) {
            $due_date = Carbon::now()->subDays($request->search);
            $sales = Sale::where('created_at', '>=', $due_date)->get();
        }

        return view('sales.sales', compact('sales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save_sales(Request $request)
    {
        try{

        $request->validate([
            'item_no' => 'required',
            'item_name' => 'required|max:155',
            'customer_name' => 'required|max:155',
            'customer_contact' => 'required',
            'customer_email' => 'required',
            'quantity' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'amount' => 'required',
        ]);

        $result = Sale::create([
            'item_no' => $request->item_no,
            'item_name' => $request->item_name,
            'customer_name' => $request->customer_name,
            'customer_contact' => $request->customer_contact,
            'customer_email' => $request->customer_email,
            'quantity' => $request->quantity,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'amount' => $request->amount,
        ]);
        if ($result) {
            return redirect()->back()->with('message', 'Sales Created Successfully!');
        } else {
            return Redirect::back()->withErrors(['Sales not created, Sorry']);
        }
    } catch (\Exception $e) {
return Redirect::back()->withErrors(['Something went wrong']);
}

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function item_list(Request $request)
    {
        $items = Sale::all();

//        if ($request->search){
//            $due_date = Carbon::now()->subDays($request->search);
//            $items = Sale::where('created_at', '>=', $due_date)->get();
//        }

        return view('sales.item_list', compact('items'));
    }

    /** Purchases function */
    public function purchases(Request $request)
    {
        $purchase = Purchase::all();

        if ($request->search){
            $due_date = Carbon::now()->subDays($request->search);
            $purchase = Purchase::where('created_at', '>=', $due_date)->get();
        }


        return view('sales.purchases', compact('purchase'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save_purchase(Request $request)
    {
        try {
            $request->validate([
                'item_no' => 'required',
                'item_name' => 'required|max:155',
                'company_name' => 'required',
                'company_contact' => 'required',
                'company_email' => 'required',
                'quantity' => 'required',
                'amount' => 'required',
            ]);

            $result = Purchase::create([
                'item_no' => $request->item_no,
                'item_name' => $request->item_name,
                'company_name' => $request->company_name,
                'company_contact' => $request->company_contact,
                'company_email' => $request->company_email,
                'quantity' => $request->quantity,
                'amount' => $request->amount,
            ]);
            if ($result) {
                return redirect()->back()->with('message', 'Purchases Created Successfully!');
            } else {
                return Redirect::back()->withErrors(['Purchases not created, Sorry']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }
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
