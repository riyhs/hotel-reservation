<?php

namespace App\Http\Controllers;

use App\Models\RoomSpec;
use App\Models\RoomFacility;
use Illuminate\Http\Request;

class RoomSpecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomSpecs = RoomSpec::orderBy('id', 'desc')->get();
        return view('admin.room_spec.index', compact('roomSpecs'));
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

    public function view_create()
    {
        return view('admin.room_spec.create');
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
            'description' => ['required', 'string'],
        ]);

        $roomSpec = RoomSpec::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect("room_spec")->withSuccess('Room Spec Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RoomSpec  $roomSpec
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RoomSpec  $roomSpec
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roomSpec = RoomSpec::find($id);
        $facilities = RoomFacility::orderBy('name', 'ASC')
            ->where('spec_id', $id)
            ->get();

        return view('admin.room_spec.edit', compact('roomSpec', 'facilities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RoomSpec  $roomSpec
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        $roomSpec = RoomSpec::find($id);
        $roomSpec->name = $request->name;
        $roomSpec->description = $request->description;
        $roomSpec->update();

        return redirect('room_spec')->withSuccess('Room Spec Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RoomSpec  $roomSpec
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomSpec = RoomSpec::find($id);
        $roomSpec->delete();
        return redirect('room_spec')->withSuccess('Room Spec Deleted Successfully');
    }
}
