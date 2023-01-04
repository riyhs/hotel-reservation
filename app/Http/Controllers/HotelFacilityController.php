<?php

namespace App\Http\Controllers;

use App\Models\HotelFacility;
use Illuminate\Http\Request;

class HotelFacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotelFacilities = HotelFacility::orderBy('id', 'desc')->get();
        return view('admin.hotel_facility.index', compact('hotelFacilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.hotel_facility.create');
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
            'description' => ['required'],
        ]);

        $imageName = '';

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/hotel_facility'), $imageName);
        }

        $room = HotelFacility::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
        ]);

        return redirect("hotel_facility")->withSuccess('Hotel Facility Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HotelFacility  $hotelFacility
     * @return \Illuminate\Http\Response
     */
    public function show(HotelFacility $hotelFacility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HotelFacility  $hotelFacility
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotelFacility = HotelFacility::find($id);
        return view('admin.hotel_facility.edit', compact('hotelFacility'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HotelFacility  $hotelFacility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        $hotelFacility = HotelFacility::find($id);

        $imageName = $hotelFacility->image;

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ]);
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images/hotel_facility'), $imageName);
        }

        $hotelFacility->name = $request->name;
        $hotelFacility->description = $request->description;
        $hotelFacility->image = $imageName;
        $hotelFacility->update();

        return redirect('hotel_facility')->withSuccess('Hotel Facility Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HotelFacility  $hotelFacility
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hotelFacility = HotelFacility::find($id);
        $hotelFacility->delete();
        return redirect('hotel_facility')->withSuccess('Hotel Facility Deleted Successfully');
    }
}
