<?php

namespace App\Http\Controllers;
use App\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::paginate(35);
        
        // Check if there are any trips available currently
        if (empty($trips)){
            return view('trips.index', ["No trips available at this time"]);     
        }if (!empty($trips)){
            return view('trips.index', ['trips' => $trips]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'trip_title' => 'required|max:800',
            'city' => 'required',
            'trip_detail' => 'required|max:5000',
            'trip_start_date' => 'required|date',
            'trip_price' => 'nullable|numeric',
            'trip_coordinator_id' => 'required|integer',
        ]);

        $t = new Trip;

        $t->trip_title = $validatedData['trip_title'];
        $t->city = $validatedData['city'];
        $t->trip_detail = $validatedData['trip_detail'];
        $t->trip_start_date = $validatedData['trip_start_date'];
        $t->trip_price = $validatedData['trip_price'];
        $t->trip_coordinator_id = $validatedData['trip_coordinator_id'];
        
        $t->save();

        session()->flash('message', 'New trip created.');

        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::findOrFail($id);

        return view ('trips.show', ['trip' =>$trip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
