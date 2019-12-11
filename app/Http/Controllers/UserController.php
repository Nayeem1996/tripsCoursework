<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(35);
        
        // Check if there are any users created
        if (empty($users)){
            return view('users.index', ["No users are created yet"]);     
        }if (!empty($users)){
            return view('users.index', ['users' => $users]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
        $validatedData = $request->validate([
            'trip_title' => 'required|max:800',
            'city' => 'required',
            'trip_detail' => 'required|max:5000',
            'trip_start_date' => 'required|date',
            'trip_price' => 'nullable|numeric',
            'trip_coordinator_id' => 'required|integer',
        ]);

        $u = new User;

        $u->trip_title = $validatedData['trip_title'];
        $u->city = $validatedData['city'];
        $u->trip_detail = $validatedData['trip_detail'];
        $u->trip_start_date = $validatedData['trip_start_date'];
        $u->trip_price = $validatedData['trip_price'];
        $u->trip_coordinator_id = $validatedData['trip_coordinator_id'];
        
        $u->save();

        session()->flash('message', 'New user created.');

        return redirect('trips');

        LOOK INTO THIS MAN
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view ('users.show', ['user' =>$user]);
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
