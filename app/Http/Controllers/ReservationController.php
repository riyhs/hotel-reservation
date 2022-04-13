<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Guest;
use App\Models\RoomSpec;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::orderBy('id', 'desc')->get();
        return view('admin.reservation.index', compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reservers = Guest::orderBy('id', 'desc')->get();
        $rooms = Room::orderBy('id', 'desc')->get();

        return view('admin.reservation.create', compact('reservers', 'rooms'));
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
            'name' => ['required'],
            'room' => ['required'],
        ]);

        $reservation = Reservation::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'room_amount' => $request->amount,
            'check_in' => $request->checkin,
            'check_out' => $request->checkout,
            'notes' => $request->notes,
            'room_id' => $request->room,
            'guest_id' => $request->name,
        ]);

        return redirect("reservation")->withSuccess('Reservation created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        $reservers = Guest::orderBy('id', 'desc')->get();
        $rooms = Room::orderBy('id', 'desc')->get();

        return view('admin.reservation.edit', compact('reservation', 'reservers', 'rooms'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => ['required'],
            'room' => ['required'],
        ]);

        $reservation = Reservation::find($id);

        $reservation->email = $request->email;
        $reservation->phone = $request->phone;
        $reservation->guest = $request->guest;
        $reservation->room_amount = $request->amount;
        $reservation->check_in = $request->checkin;
        $reservation->check_out = $request->checkout;
        $reservation->notes = $request->notes;
        $reservation->room_id = $request->room;
        $reservation->guest_id = $request->name;
        $reservation->update();

        return redirect("reservation")->withSuccess('Reservation updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }

    // GUEST

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestIndex()
    {
        $id = Auth::guard('guest')->id();
        $reservations = Reservation::where('guest_id', $id)->orderBy('id', 'desc')->get();

        // dd($reservations);
        // dd($id);

        return view('booking', compact('reservations'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guestCreate()
    {
        $rooms = Room::orderBy('id', 'desc')->get();
        return view('create_booking', compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guestStore(Request $request)
    {
        $request->validate([
            'room_id' => ['required'],
        ]);

        // dd($request);

        $reservation = Reservation::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'guest' => $request->guest,
            'room_amount' => $request->amount,
            'check_in' => $request->checkin . ':00',
            'check_out' => $request->checkout . ':00',
            'notes' => $request->notes,
            'room_id' => $request->room_id,
            'guest_id' => $request->guest_id,
        ]);

        // dd($reservation);

        return redirect("/booking")->withSuccess('Reservation created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = Reservation::find($id);
        $guestId = auth()->guard('guest')->id();

        if ($reservation->guest_id == $guestId) {
            return view('invoice', compact('reservation'));
        } else {
            return view('booking');
        }
    }
}
