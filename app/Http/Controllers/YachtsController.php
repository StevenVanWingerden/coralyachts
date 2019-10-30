<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Yacht;
use App\YachtType;
use App\Port;

class YachtsController extends Controller
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
        $yachts = Yacht::all();
        $yachts = Yacht::orderBy('name', 'asc')->paginate(5);
        $yachtsAmount = Yacht::count();
        return view('yachts.index',['yachts'=> $yachts, 'yachtsAmount'=> $yachtsAmount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $yachts = Yacht::all();
       $yachttypes = YachtType::all();
       $ports = Port::all();
        return view ('yachts.create',['yachts'=> $yachts, 'yachttypes'=>$yachttypes, 'ports'=>$ports]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $this->validate($request, [
            'name' => 'required',
            'yachttype-list' => 'required',
            'port-list' => 'required', 
            'status' => 'required',
            'code' => 'required'
        ]);

        //Create Port
        $yacht = new Yacht();
        $yacht->name = $request->input('name');
        $yacht->yacht_type_id = $request->input('yachttype-list');
        $yacht->port_id = $request->input('port-list');
        $yacht->status = $request->input('status');
        $yacht->code = $request->input('code');
        $yacht->save();

        return redirect('/yachts')->with('success', 'Yacht created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yacht = Yacht::find($id);
        return view('yachts.show')->with('yacht', $yacht);
    }

    public function update_rent(Request $request, $id)
    {
        
        $yacht = Yacht::find($id);
        if ($yacht->status == "Available") {
            $yacht->status = "Unavailable";
            $yacht->save();
            return redirect('/yachts')->with('success', 'Yacht rented!');
        } else{
            return redirect('/yachts')->with('error', 'Yacht is unavailable!');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yacht = Yacht::find($id);
        $yachts = Yacht::all();
        $yachttypes = YachtType::all();
        $ports = Port::all();
        return view ('yachts.edit',['yacht' => $yacht, 'yachts'=> $yachts, 'yachttypes'=>$yachttypes, 'ports'=>$ports]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'yachttype-list' => 'required',
            'port-list' => 'required', 
            'status' => 'required',
            'code' => 'required'
        ]);

        $yacht = Yacht::find($id);
        $yacht->name = $request->input('name');
        $yacht->yacht_type_id = $request->input('yachttype-list');
        $yacht->port_id = $request->input('port-list');
        $yacht->status = $request->input('status');
        $yacht->code = $request->input('code');
        $yacht->save();

        return redirect('/yachts')->with('success', 'Yacht updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yacht = Yacht::find($id);
        $yacht->delete();
        return redirect('/yachts')->with('success', 'Yacht removed!');
    }
}
