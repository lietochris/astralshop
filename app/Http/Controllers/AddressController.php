<?php

namespace App\Http\Controllers;

use App\Address;
use App\Http\Requests\AddressStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddressStoreRequest $request)
    {
        $address = new Address();
        $address->user_id = Auth::id();
        $address->zipcode = $request->zipcode;
        $address->state = $request->state;
        $address->town = $request->town;
        $address->suburb = $request->suburb;
        $address->street = $request->street;
        $address->phone = $request->phone;
        $address->additional_directions = $request->additional_directions;
        $address->save();
        return redirect(route('users.show', Auth::id()));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Address $address
     * @return \Illuminate\Http\Response
     */
    public function destroy(Address $address)
    {
        //
    }
}
