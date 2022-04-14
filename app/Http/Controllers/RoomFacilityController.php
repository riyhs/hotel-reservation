<?php

namespace App\Http\Controllers;

use App\Models\RoomFacility;
use Illuminate\Http\Request;

class RoomFacilityController extends Controller
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'roomSpec' => ['required'],
        ]);

        $roomFacility = RoomFacility::create([
            'name' => $request->name,
            'spec_id' => $request->roomSpec
        ]);

        return redirect()->back()->withSuccess('Room Spec Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function show(RoomFacility $roomFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomFacility = RoomFacility::find($id);
        return view('admin.room_facility.edit', compact('roomFacility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $roomFacility = RoomFacility::find($id);
        $roomFacility->name = $request->name;
        $roomFacility->update();

        return redirect('/room_spec/edit/' . $roomFacility->roomSpec->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomFacility  $roomFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomFacility = RoomFacility::find($id);
        $roomFacility->delete();
        return redirect()->back()->withSuccess('Room Facility Deleted Successfully');
    }
}
