<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Room;
use App\Models\Guest;
use App\Models\Reservation;
use Illuminate\Http\Request;
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
        if (request()->has('query')) {
            $reservations = Reservation::whereRelation('reserver', 'name', 'like', "%" . request()->query('query') . "%")->get();
        } else if (request()->has('daterange')) {
            $range = explode(" - ", request()->query('daterange'));;

            $start_date = DateTime::createFromFormat('m/d/Y', $range[0])->format('Y-m-d');
            $end_date = DateTime::createFromFormat('m/d/Y', $range[1])->format('Y-m-d');

            $reservations = Reservation::whereBetween('created_at', [$start_date, $end_date])->get();
        } else {
            $reservations = Reservation::orderBy('id', 'desc')->get();
        }

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

    public function detail($id)
    {
        $reservation = Reservation::find($id);
        $reservers = Guest::orderBy('id', 'desc')->get();
        $rooms = Room::orderBy('id', 'desc')->get();

        return view('admin.reservation.detail', compact('reservation', 'reservers', 'rooms'));
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
            'status' => ['required'],
        ]);

        $reservation = Reservation::find($id);

        $reservation->status = $request->status;
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
