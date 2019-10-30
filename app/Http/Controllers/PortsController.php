<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Port;

class PortsController extends Controller
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
    public function index()
    {
        $ports = Port::all();
        $ports = Port::orderBy('name', 'asc')->paginate(5);
        $portsAmount = Port::count();
        return view('ports.index',['ports'=> $ports, 'portsAmount'=> $portsAmount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('ports.create');
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
            'city' => 'required',
            'country' => 'required',
            'contactperson' => 'required',
            'contactphone' => 'required',
            'contactemail' => 'required',
            'facilities' => 'required',
            'directions' => 'required',
            'parking' => 'required',
            'catering' => 'required',
            'skipper' => 'required',
            'flottielje' => 'required',
            'groceries' => 'required',
            'transfer' => 'required'
        ]);

        //Create Port
        $port = new Port();
        $port->name = $request->input('name');
        $port->city = $request->input('city');
        $port->country = $request->input('country');
        $port->contactperson = $request->input('contactperson');
        $port->contactphone = $request->input('contactphone');
        $port->contactemail = $request->input('contactemail');
        $port->facilities = $request->input('facilities');
        $port->directions = $request->input('directions');
        $port->parking = $request->input('parking');
        $port->catering = $request->input('catering');
        $port->skipper = $request->input('skipper');
        $port->flottielje = $request->input('flottielje');
        $port->groceries = $request->input('groceries');
        $port->transfer = $request->input('transfer');
        $port->user_id = auth()->user()->id;
        $port->save();

        return redirect('/ports')->with('success', 'Port created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $port = Port::find($id);
        return view('ports.show')->with('port', $port);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $port = Port::find($id);
        return view('ports.edit')->with('port', $port);
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
            'city' => 'required',
            'country' => 'required',
            'contactperson' => 'required',
            'contactphone' => 'required',
            'contactemail' => 'required',
            'facilities' => 'required',
            'directions' => 'required',
            'parking' => 'required',
            'catering' => 'required',
            'skipper' => 'required',
            'flottielje' => 'required',
            'groceries' => 'required',
            'transfer' => 'required'
        ]);

        //Create Port
        $port = Port::find($id);
        $port->name = $request->input('name');
        $port->city = $request->input('city');
        $port->country = $request->input('country');
        $port->contactperson = $request->input('contactperson');
        $port->contactphone = $request->input('contactphone');
        $port->contactemail = $request->input('contactemail');
        $port->facilities = $request->input('facilities');
        $port->directions = $request->input('directions');
        $port->parking = $request->input('parking');
        $port->catering = $request->input('catering');
        $port->skipper = $request->input('skipper');
        $port->flottielje = $request->input('flottielje');
        $port->groceries = $request->input('groceries');
        $port->transfer = $request->input('transfer');
        $port->save();

        return redirect('/ports')->with('success', 'Port updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $port = Port::find($id);
        $port->delete();
        return redirect('/ports')->with('success', 'Port removed!');
    }
}
