<?php

namespace App\Http\Controllers;

use App\Models\GrowLocation;
use App\Models\GrowLocationParameter;
use Illuminate\Http\Request;
use Redirect;


class GrowLocationoverViewController extends Controller
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
        $grow_location = GrowLocation::all();
        return view('growLocation.growlocationoverview', compact('grow_location'));

    }

    public function grow_location_overview(Request $request)
    {
        $id = $request->id;
        $all = GrowLocationParameter::where('grow_id', $id)->get();

        if ($request->search){
            $all = GrowLocationParameter::whereDate('created_at', $request->search)->orderBy('id', 'DESC')->get();
        }

        $seeds = $all->sum('seeds');
        $plant_urc = $all->sum('plant_urc');
        $harvest = $all->sum('harvest');
        $flowers = $all->sum('flowers');
        $cultivation = $all->sum('cultivation');
        $dry = $all->sum('dry');
        $cut = $all->sum('cut');
        $trim = $all->sum('trim');
        $label = $all->sum('label');
        $packaging = $all->sum('packaging');
        $transfer_and_transport = $all->sum('transfer_and_transport');

        return view('growLocation.growlocation', compact('seeds', 'plant_urc', 'harvest', 'flowers', 'cultivation', 'dry', 'cut', 'trim', 'label', 'packaging', 'transfer_and_transport', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function grow_location_parameter($id)
    {
        $data = GrowLocationParameter::where('grow_id', $id)->first();
        return view('growLocation.growLocationParameter', compact('data', 'id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function save_grow_parameters(Request $request)
    {
        try {

            $result = GrowLocationParameter::create([
                'seeds' => $request->seeds,
                'flowers' => $request->flowers,
                'cut' => $request->cut,
                'packaging' => $request->packaging,
                'plant_urc' => $request->plant_urc,
                'cultivation' => $request->cultivation,
                'trim' => $request->trim,
                'transfer_and_transport' => $request->transfer_and_transport,
                'harvest' => $request->harvest,
                'dry' => $request->dry,
                'label' => $request->label,
                'check' => $request->check,
                'prune' => $request->prune,
                'grow_id' => $request->grow_id,
            ]);

            if ($result) {
                return redirect()->route('growlocation')->with('message', 'The Grow Location Added Successfully!');;
            } else {
                return redirect()->route('growlocation')->withErrors(['Grow Location didn\'t created, Sorry']);
            }
        } catch (\Exception $e) {
            return redirect()->route('growlocation')->withErrors(['Something went wrong']);
        }


    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function add_grow_location(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'location' => 'required|max:155',
            ]);
            $grow = GrowLocation::where('name', $request->name)->pluck('name')->first();
            if ($grow) {
                return Redirect::back()->withErrors(['This grow location already exist, Sorry']);

            }


            $result = GrowLocation::create([
                'name' => $request->name,
                'location' => $request->location,
            ]);
            if ($result) {
                return redirect()->back()->with('message', 'Grow Location Created Successfully!');
            } else {
                return Redirect::back()->withErrors(['Grow Location didn\'t created, Sorry']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }
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
