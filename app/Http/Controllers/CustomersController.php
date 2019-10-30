<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Customer;

class CustomersController extends Controller
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
        $customers = Customer::all();
        $customers = Customer::orderBy('id', 'asc')->paginate(5);
        $customersAmount = Customer::count();
        return view('customers.index',['customers'=> $customers, 'customersAmount'=> $customersAmount]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('customers.create');
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
            'firstname' => 'required',
            'lastname' => 'required',
            'adress' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'internalnotes' => 'required'
        ]);

        $customers = new Customer();
        $customers->firstname = $request->input('firstname');
        $customers->lastname = $request->input('lastname');
        $customers->adress = $request->input('adress');
        $customers->zipcode = $request->input('zipcode');
        $customers->city = $request->input('city');
        $customers->country = $request->input('country');
        $customers->phone = $request->input('phone');
        $customers->email = $request->input('email');
        $customers->internalNotes = $request->input('internalnotes');
        $customers->save();

        return redirect('/customers')->with('success', 'Customer created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show')->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit')->with('customer', $customer);
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
            'firstname' => 'required',
            'lastname' => 'required',
            'adress' => 'required',
            'zipcode' => 'required',
            'city' => 'required',
            'country' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'internalnotes' => 'required'
        ]);

        $customer = Customer::find($id);
        $customer->firstname = $request->input('firstname');
        $customer->lastname = $request->input('lastname');
        $customer->adress = $request->input('adress');
        $customer->zipcode = $request->input('zipcode');
        $customer->city = $request->input('city');
        $customer->country = $request->input('country');
        $customer->phone = $request->input('phone');
        $customer->email = $request->input('email');
        $customer->internalNotes = $request->input('internalnotes');
        $customer->save();

        return redirect('/customers')->with('success', 'Customer updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect('/customers')->with('success', 'Customer removed!');
    }
}
