<?php

namespace App\Http\Controllers;

use App\Models\Forcast;
use App\Models\GrowLocation;
use App\Models\GrowLocationParameter;
use App\Models\Labour;
use App\Models\LabourWork;
use App\Models\Order;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use DateTime;
use Redirect;

class CultivationPlanningController extends Controller
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
    public function cultivation_planning()
    {
        return view('cultivation.CultivationPlanning');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cultivation_forcast(Request $request)
    {

        $plan_group = $request->plan_group;
        $supplier = $request->supplier;
        $item_no = $request->item_no;
        $customer_no = $request->customer_no;
        $date = $request->date;
        $grow_id = $request->grow_id;

        $forcast = Forcast::all();
        if ($plan_group && $grow_id) {
            $selected = Carbon::now()->subDays($plan_group);
            $forcast = Forcast::where('created_at', '>=', $selected)->where('grow_id', $grow_id)->get();
        } elseif ($plan_group && $supplier) {
            $selected_date = Carbon::now()->subDays($plan_group);
            $forcast = Forcast::where('created_at', '>=', $selected_date)->where('supplier', $supplier)->get();

        } elseif ($plan_group && $item_no) {
            $select = Carbon::now()->subDays($plan_group);
            $forcast = Forcast::where('created_at', '>=', $select)->where('item_no', $item_no)->get();

        } elseif ($plan_group && $customer_no) {
            $sel_date = Carbon::now()->subDays($plan_group);
            $forcast = Forcast::where('created_at', '>=', $sel_date)->where('customer_no', $customer_no)->get();

        } elseif ($plan_group) {
            $due_date = Carbon::now()->subDays($plan_group);
            $forcast = Forcast::where('created_at', '>=', $due_date)->get();
        }

        if ($grow_id) {
            $forcast = Forcast::where('grow_id', $grow_id)->get();
        }
        if ($customer_no) {
            $forcast = Forcast::where('customer_no', $customer_no)->get();
        }
        if ($item_no) {
            $forcast = Forcast::where('item_no', $item_no)->get();
        }
        if ($supplier) {
            $forcast = Forcast::where('supplier', $supplier)->get();
        }
        if ($date) {
            $forcast = Forcast::whereDate('created_at', $date)->get();
        }

        return view('cultivation.forcast', compact('forcast'));
    }

    public function cultivation_labor_planning(Request $request)
    {


        $datetime1 = new DateTime($request->to_date);
        $datetime2 = new DateTime($request->from_date);
        $interval = $datetime1->diff($datetime2);
        $days = $interval->format('%a');
        if ($days > 7) {
            return Redirect::back()->withErrors(['Select dates between 7 days maximum']);
        }

        $grow_location = GrowLocation::all();

        if ($request->from_date && $request->to_date && $request->grow_id) {
            $request->validate([
                'from_date' => 'required',
                'to_date' => 'required',
                'grow_id' => 'required',
            ]);
            $data = LabourWork::whereBetween('created_at', [$request->from_date, $request->to_date])->where('grow_id', $request->grow_id)->get();


        } elseif ($request->from_date && $request->to_date) {
            $request->validate([
                'from_date' => 'required',
                'to_date' => 'required',
            ]);

            $data = LabourWork::whereBetween('created_at', [$request->from_date, $request->to_date])->get();

        } else {

            $due_date = Carbon::now()->subDays(7);
            $data = LabourWork::where('created_at', '>=', $due_date)->get();
        }


            $array = [];
            foreach ($data as $value) {
                $dates = $value->created_at->format('Y-m-d');
                array_push($array, $dates);
            }
            $result = array_unique($array);


        return view('cultivation.labour_planning', compact('grow_location', 'result'));
    }

    public function cultivation_work_order()
    {
        $all = GrowLocationParameter::get();

        $utilized = Labour::where('today_work', '!=', '')->count('id');
        $not_utilized = Labour::where('today_work', null)->count('id');


        $completed = Order::where('status', 'completed')->count('id');
        $planned = Order::where('status', 'planned')->count('id');
        $posted = Order::where('status', 'posted')->count('id');
        $rejected = Order::where('status', 'rejected')->count('id');


        $seeds = $all->sum('seeds');
        $flowers = $all->sum('flowers');
        $packaging = $all->sum('packaging');
        $plant_urc = $all->sum('plant_urc');
        $label = $all->sum('label');
        $transfer_and_transport = $all->sum('transfer_and_transport');
        $trim = $all->sum('trim');
        $cut = $all->sum('cut');
        $check = $all->sum('check');
        $prune = $all->sum('prune');
        $harvest = $all->sum('harvest');


        return view('cultivation.work_order', compact('plant_urc', 'label', 'transfer_and_transport', 'trim', 'cut', 'check', 'prune', 'harvest', 'utilized', 'not_utilized', 'completed', 'posted', 'rejected', 'planned'));
    }

    public function cultivation_grow_location()
    {
        $grow_location = GrowLocation::all();
        return view('cultivation.grow_location', compact('grow_location'));
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
