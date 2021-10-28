<?php

namespace App\Http\Controllers;

use App\Models\Forcast;
use App\Models\GrowLocation;
use App\Models\Labour;
use App\Models\LabourWork;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Redirect;
use DB;

class LaborplanningController extends Controller
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
    public function index(Request $request)
    {
        $grow_locations = GrowLocation::all();
        $labours = Labour::all();

        if ($request->search){
            $due_date = Carbon::now()->subDays($request->search);
            $labours = Labour::where('date', '>=', $due_date)->get();
        }

        return view('Labour', compact('labours', 'grow_locations'));

    }
    public function labour()
    {
        return view('Laborplanning');

    }

    public function LabourAdd()
    {
       $grow_locations = GrowLocation::all();
        return view('LabourAdd', compact('grow_locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save_labour(Request $request)
    {
        try {
        $request->validate([
            'name' => 'required|max:155',
        ]);

         $result = Labour::create([
            'date' => $request->date,
            'name' => $request->name,
            'email' =>$request->email,
            'contact' => $request->contact,
            'today_work' => $request->work,
        ])->id;
         if ($result){

             LabourWork::create([
                 'work' => $request->work,
                 'labour_id' => $result,
                 'grow_id' =>$request->grow_id
             ]);

             return redirect()->route('labour')->with('success','The Labour Created Successfully!');

         }else{
             return redirect()->route('labour')->with('danger','Labour not created Sorry!');

         }
        } catch (\Exception $e) {
            return redirect()->route('labour')->with('danger','Something went wrong!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete_labour($id)
    {
        if ($id) {
            Labour::where('id', $id)->delete();
            return redirect()->back()->with('message', 'Labour Deleted Successfully!');

        }else{
            return Redirect::back()->withErrors(['Labour nor created Successfully']);
        }
    }

    /** Edit labour work status */
    public function labour_edit(Request $request){
        try {

            $result = LabourWork::create([
                'work' => $request->work,
                'labour_id' => $request->labour_id,
                'grow_id' => $request->grow_id,
            ]);
            if ($result){

                Labour::where('id', $request->labour_id)->update([
                    'today_work' => $request->work,
                ]);

                return redirect()->back()->with('message', 'The Labour updated successfully!');
            }else{
                return Redirect::back()->withErrors(['Labour not updated, Sorry']);
            }

        } catch (\Exception $e) {
            return Redirect::back()->withErrors(['Something went wrong']);
        }
    }

}
