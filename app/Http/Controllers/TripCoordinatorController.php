<?php
namespace App\Http\Controllers;

use App\TripCoordinator;
use Illuminate\Http\Request;

class TripCoordinatorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:tripCoordinator');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tripCoordinators = TripCoordinator::paginate(30);
        
        // Check if there are any users created
        if (empty($tripCoordinators)){
            return view('tripCoordinators.index', ["No trip coordinators are created yet"]);     
        }if (!empty($tripCoordinators)){
            return view('tripCoordinators.index', ['tripCoordinators' => $tripCoordinators]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tripcoordinators.create');
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
            'trip_title' => 'required|max:255',
            'city' => 'required|max:255',
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

        session()->flash('message', 'A new trip has been created.');

        return redirect()->route('trips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tripcoordinator = TripCoordinator::findOrFail($id);

        return view ('tripcoordinators.show', ['tripcoordinator' =>$tripcoordinator]);
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
