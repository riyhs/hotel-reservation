<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomSpec;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::orderBy('id', 'desc')->get();
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomSpecs = RoomSpec::orderBy('id', 'desc')->get();
        return view('admin.room.create', compact('roomSpecs'));
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

        $room = Room::create([
            'name' => $request->name,
            'price' => $request->price,
            'amount' => $request->amount,
            'used' => 0,
            'spec_id' => $request->roomSpec
        ]);

        return redirect("room")->withSuccess('Room Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $room = Room::find($id);
        $roomSpecs = RoomSpec::orderBy('id', 'desc')->get();

        return view('admin.room.edit', compact('room', 'roomSpecs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        $room = Room::find($id);
        $room->name = $request->name;
        $room->description = $request->description;
        $room->update();

        return redirect('room')->withSuccess('Room Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::find($id);
        $room->delete();
        return redirect('room')->withSuccess('Room Deleted Successfully');
    }
}
