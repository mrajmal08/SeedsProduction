<?php

namespace App\Http\Controllers;

use App\Models\Forcast;
use App\Models\GrowLocation;
use Illuminate\Http\Request;
use Redirect;

class ForcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $grow_locations = GrowLocation::all();

        return view('Forcastentry', compact('grow_locations'));

    }

    public function moredetail()
    {
        return view('Forcastmoredetail');
    }

    public function forcast()
    {
        return view('Forcast');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_forcast(Request $request)
    {
        try {
            $request->validate([
                'item_no' => 'required',
                'item_name' => 'required',
                'description' => 'required',
                'genus_code' => 'required',
                'supplier' => 'required',
                'customer_no' => 'required',
                'featured_value' => 'required',
                'requested_quantity' => 'required',
                'current_quantity' => 'required',
            ]);
            $result = Forcast::create([
                'item_no' => $request->item_no,
                'item_name' => $request->item_name,
                'description' => $request->description,
                'genus_code' => $request->genus_code,
                'supplier' => $request->supplier,
                'customer_no' => $request->customer_no,
                'featured_value' => $request->featured_value,
                'requested_quantity' => $request->requested_quantity,
                'current_quantity' => $request->current_quantity,
                'grow_id' => $request->grow_id,
                'attr_id' => $request->attr_id
            ]);
            if ($result) {
                return redirect()->back()->with('message', 'The Forcast Created Successfully!');
            } else {
                return Redirect::back()->withErrors(['Forcast not created Sorry']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
