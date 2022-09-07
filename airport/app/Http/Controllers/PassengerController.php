<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use App\Models\Flight;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $passengers = Passenger::with('flight')->get();
        return view('passengers.index', compact('passengers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('passengers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|min: 3',
            'lastname' => 'required',
            'birthdate' => 'required',
            'flight_id' => 'nullable|numeric',
            'code' => 'nullable',
        ]);

        $passenger = new Passenger();
        $passenger->firstname = $request->firstname;
        $passenger->lastname = $request->lastname;
        $passenger->birthdate = $request->birthdate;
        $passenger->flight_id = $request->flight_id;
        $passenger->code= $request->code;

        $passenger->save();

        return redirect()->route('passengers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function show(Passenger $passenger)
    {
        return view('passengers.show', compact('passenger'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function edit(Passenger $passenger)
    {
        return view('passengers.edit', compact('passenger'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Passenger $passenger)
    {
        $passenger->fill($request->all());
        $passenger->save();
        return redirect()->route('passengers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Passenger  $passenger
     * @return \Illuminate\Http\Response
     */
    public function destroy(Passenger $passenger)
    {
        $passenger->delete();
        return redirect()->route('passengers.index');
    }
}
