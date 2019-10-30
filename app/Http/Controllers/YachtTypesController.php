<?php

namespace App\Http\Controllers;

use App\YachtType;
use Illuminate\Http\Request;

class YachtTypesController extends Controller
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
        $yachttypes = YachtType::all();
        $yachttypes = YachtType::orderBy('name', 'asc')->paginate(5);
        $yachttypesAmount = YachtType::count();
        return view('yachttypes.index',['yachttypes'=> $yachttypes, 'yachttypesAmount'=> $yachttypesAmount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('yachttypes.create');
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
            'type' => 'required',
            'length' => 'required',
            'depth' => 'required',
            'engine' => 'required',
            'sail' => 'required',
            '1pcabins' => 'required',
            '2pcabins' => 'required',
            'beds' => 'required',
            'toilets' => 'required',
            'showers' => 'required',
            'gear' => 'required',
            'text' => 'required'
        ]);

        //Create Yacht type
        $yachttype = new YachtType();
        $yachttype->name = $request->input('name');
        $yachttype->type = $request->input('type');
        $yachttype->length = $request->input('length');
        $yachttype->depth = $request->input('depth');
        $yachttype->engine = $request->input('engine');
        $yachttype->sail = $request->input('sail');
        $yachttype->cabins1p = $request->input('1pcabins');
        $yachttype->cabins2p = $request->input('2pcabins');
        $yachttype->beds = $request->input('beds');
        $yachttype->toilets = $request->input('toilets');
        $yachttype->showers = $request->input('showers');
        $yachttype->gear = $request->input('gear');
        $yachttype->text = $request->input('text');
        $yachttype->user_id = auth()->user()->id;
        $yachttype->save();

        return redirect('/yachttypes')->with('success', 'Yacht type created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $yachttype = YachtType::find($id);
        return view('yachttypes.show')->with('yachttype', $yachttype);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $yachttype = YachtType::find($id);
        return view('yachttypes.edit')->with('yachttype', $yachttype);
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
            'type' => 'required',
            'length' => 'required',
            'depth' => 'required',
            'engine' => 'required',
            'sail' => 'required',
            '1pcabins' => 'required',
            '2pcabins' => 'required',
            'beds' => 'required',
            'toilets' => 'required',
            'showers' => 'required',
            'gear' => 'required',
            'text' => 'required'
        ]);

        //Create Yacht type
        $yachttype = YachtType::find($id);
        $yachttype->name = $request->input('name');
        $yachttype->type = $request->input('type');
        $yachttype->length = $request->input('length');
        $yachttype->depth = $request->input('depth');
        $yachttype->engine = $request->input('engine');
        $yachttype->sail = $request->input('sail');
        $yachttype->cabins1p = $request->input('1pcabins');
        $yachttype->cabins2p = $request->input('2pcabins');
        $yachttype->beds = $request->input('beds');
        $yachttype->toilets = $request->input('toilets');
        $yachttype->showers = $request->input('showers');
        $yachttype->gear = $request->input('gear');
        $yachttype->text = $request->input('text');
        $yachttype->user_id = auth()->user()->id;
        $yachttype->save();

        return redirect('/yachttypes')->with('success', 'Yacht type updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $yachttype = YachtType::find($id);
        $yachttype->delete();
        return redirect('/yachttypes')->with('success', 'Yacht type removed!');
    }
}
