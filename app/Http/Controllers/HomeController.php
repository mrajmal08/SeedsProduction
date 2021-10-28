<?php

namespace App\Http\Controllers;

use App\Models\GrowLocation;
use App\Models\GrowLocationParameter;
use App\Models\ItemsCanMake;
use App\Models\ItemsToMake;
use App\Models\PlanProductionOrder;
use App\Models\Production;
use App\Models\Order;
use App\Models\Sale;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }

    /** production setup function */
    public function production_setup()
    {
        $production = Production::all();
        return view('production.production_setup', compact('production'));
    }

    /** Production stages function */
    public function production_stage($id)
    {
        $pro_name = Production::where('id', $id)->pluck('item_name')->first();
        $items_can_make = ItemsCanMake::all();
        $items_to_make = ItemsToMake::all();
        $grow_locations = GrowLocation::all();
        $planned_product_orders = Order::where('status', 'planned')->get();
        $released_product_orders = Order::where('status', 'completed')->get();
        $rejected_product_orders = Order::where('status', 'rejected')->get();

        $all = GrowLocationParameter::get();
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


        switch ($pro_name) {
            case('Item Can Make'):
                return view('production.item_can_make', compact('id', 'items_can_make'));
                break;
            case('Item To Make'):
                return view('production.item_to_make', compact('id', 'items_to_make'));
                break;
            case('Processes'):
                return view('production.processes', compact('seeds', 'plant_urc', 'harvest', 'flowers', 'cultivation', 'dry', 'cut', 'trim', 'label', 'packaging', 'transfer_and_transport'));
                break;
            case('Planned Product Orders'):
                return view('production.planned_product_orders', compact('id', 'grow_locations', 'planned_product_orders'));
                break;
            case('Released Product Orders'):
                return view('production.released_product_orders', compact('id', 'grow_locations', 'released_product_orders'));
                break;
            case('Rejected Product Orders'):
                return view('production.rejected_product_orders', compact('id', 'grow_locations', 'rejected_product_orders'));
                break;
            default;
        }
    }

    /** Add 'Item Can Make' Module */
    public function save_item_can_make(Request $request)
    {
        try {
            $request->validate([
                'item_no' => 'required',
                'item_name' => 'required|max:155',
            ]);

            $result = ItemsCanMake::create([
                'item_no' => $request->item_no,
                'item_name' => $request->item_name,
                'pro_id' => $request->pro_id
            ]);
            if ($result) {
                return redirect()->back()->with('message', 'The Labour Created Successfully!');
            } else {
                return Redirect::back()->withErrors(['Labour not created Sorry']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }

    }

    /** Add 'Item To Make' Module */
    public function save_item_to_make(Request $request)
    {
        $request->validate([
            'item_no' => 'required',
            'item_name' => 'required|max:155',
        ]);

        $result = ItemsToMake::create([
            'item_no' => $request->item_no,
            'item_name' => $request->item_name,
            'pro_id' => $request->pro_id
        ]);
        if ($result) {
            return redirect()->back()->with('message', 'The Labour Created Successfully!');
        } else {
            return Redirect::back()->withErrors(['Labour not created Sorry']);
        }
    }

    /** Add 'Planned Product Orders' Module */
    public function save_planned_product_orders(Request $request)
    {
        try {
            $request->validate([
                'order_no' => 'required',
                'description' => 'required|max:155',
                'source_type' => 'required',
                'source_no' => 'required',
                'grow_id' => 'required',
                'quantity' => 'required',
                'due_date' => 'required',
                'end_date' => 'required',
                'routing_no' => 'required',
            ]);

            $order_no = Order::where('order_no', $request->order_no)->pluck('order_no')->first();

            if ($order_no){
                return Redirect::back()->withErrors(['Order No already present in the database, Sorry']);
            }

            $result = Order::create([
                'order_no' => $request->order_no,
                'description' => $request->description,
                'source_type' => $request->source_type,
                'source_no' => $request->source_no,
                'quantity' => $request->quantity,
                'due_date' => $request->due_date,
                'end_date' => $request->end_date,
                'routing_no' => $request->routing_no,
                'status' => 'planned',
                'grow_id' => $request->grow_id,
                'pro_id' => $request->pro_id,
            ]);

            if ($result) {
                return redirect()->back()->with('message', 'Planned Product Order Created Successfully!');
            } else {
                return Redirect::back()->withErrors(['Order didn\'t created, Sorry']);
            }
        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }


    }

    /** Add 'Planned Product Orders' Module */
    public function save_released_product_orders(Request $request)
    {
        if ($request->order_id) {
            $request->validate([
                'status' => 'required',
            ]);

            $result = Order::where('order_no', $request->order_id)->update([
                'status' => $request->status,
            ]);

            if ($result) {
                return redirect()->back()->with('message', 'Status change Successfully!');
            } else {
                return Redirect::back()->withErrors(['Status didn\'t updated']);
            }

        } else {
            return Redirect::back()->withErrors(['OrderId can not be null, Sorry']);

        }

    }

    /** show deliver page */
    public function delivery(Request $request)
    {
        $delivery = Order::where('status', 'posted')->get();

        if ($request->search) {
            $due_date = Carbon::now()->subDays($request->search);
            $delivery = Order::where('created_at', '>=', $due_date)->where('status', 'posted')->get();
        }

        return view('delivery', compact('delivery'));
    }

    /** add to delivered function */
    public function add_to_delivered(Request $request)
    {
        if ($request->order_id) {
            $request->validate([
                'item_no' => 'required',
                'item_name' => 'required',
                'customer_name' => 'required',
                'customer_email' => 'required',
                'customer_contact' => 'required',
                'customer_location' => 'required',
                'driver_contact' => 'required',
                'amount' => 'required',
                'status' => 'required',
            ]);

            $result = Order::where('order_no', $request->order_id)->update([
                'item_no' => $request->item_no,
                'item_name' => $request->item_name,
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_contact' => $request->customer_contact,
                'customer_location' => $request->customer_location,
                'driver_contact' => $request->driver_contact,
                'amount' => $request->amount,
                'status' => $request->status,
            ]);

            if ($result) {
                return redirect()->back()->with('message', 'Status change Successfully!');
            } else {
                return Redirect::back()->withErrors(['Status didn\'t updated']);
            }

        } else {
            return Redirect::back()->withErrors(['OrderId can not be null, Sorry']);

        }
    }

}
