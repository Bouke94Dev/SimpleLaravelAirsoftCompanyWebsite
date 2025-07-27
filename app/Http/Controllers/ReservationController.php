<?php

namespace App\Http\Controllers;

use App\Dto\ReservationDTO;
use App\Models\Gear;
use App\Models\Reservation;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function create()
    {

        $sites = Site::all();
        $gears = Gear::all();

        return view('reservation.create', compact('sites', 'gears'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'site_id' => 'required|exists:sites,id',
            'gear_id' => 'required|exists:gears,id',
            'start_date' => 'required|date',
            'player_amount' => 'required|integer|min:6',
            'note' => 'nullable|string',
        ]);

        $reservationDto = new ReservationDTO(Auth::id(), $validated['site_id'], $validated['gear_id'], $validated['start_date'], $validated['player_amount'], $validated['note'], date('Y-m-d'));

        Reservation::create($reservationDto->toArray());

        return redirect()->route('reservation.create')->with('success', 'Reservation created!');
    }
}
