<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angler;
use App\Models\Fish;
use App\Models\Fishing;
use App\Models\Fishingspot;

class FishingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $fishings = Fishing::with(['angler','fish','fishingspot'])->paginate(10);
        return view('fishings.index', compact('fishings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $angler = new Angler();
        $fish = new Fish();
        $fishingspot = new Fishingspot();
        $fishing = new Fishing();
        return view('fishings.create', compact('angler','fish','fishingspot','fishing'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Walidacja danych dla Angler
    $validated1 = $request->validate([
        'imie' => 'required|string',
        'nazwisko' => 'required|string',
        'wiek' => 'required|integer'
    ]);
    $angler = Angler::create($validated1);

    // Walidacja danych dla Fishingspot
    $validated2 = $request->validate([
        'nazwa' => 'required|string',
        'typ' => 'required|string'
    ]);
    $fishingspot = Fishingspot::create($validated2);

    // Walidacja danych dla Fish
    $validated3 = $request->validate([
        'gatunek' => 'required|string',
        'dlugosc' => 'required|numeric',
        'masa' => 'required|numeric'
    ]);
    $fish = Fish::create($validated3);

    // Walidacja danych dla Fishing
    $validated = $request->validate([
        'data' => 'required|date',
        'godzina' => 'required|string',
    ]);
    $fishing = Fishing::create([
        'data' => $validated['data'],
        'godzina' => $validated['godzina'],
        'angler_id' => $angler->id,
        'fishingspot_id' => $fishingspot->id,
        'fish_id' => $fish->id,
    ]);

    return redirect()->route('fishings.index')->with('success', 'Dodano połów');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fishing = Fishing::with(['angler','fish','fishingspot'])->findOrFail($id);
        return view('fishings.show',compact('fishing'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fishing = Fishing::with(['angler','fish','fishingspot'])->findOrFail($id);
        return view('fishings.edit',compact('fishing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fishing = Fishing::with(['angler','fish','fishingspot'])->findOrFail($id);

        $validated1 = $request->validate([
            'imie' => 'required|string',
            'nazwisko' => 'required|string',
            'wiek' => 'required|integer'
        ]);
        $fishing->angler->update($validated1);

        $validated2 = $request->validate([
            'nazwa' => 'required|string',
            'typ' => 'required|string'
        ]);
        $fishing->fishingspot->update($validated2);

        $validated3 = $request->validate([
            'gatunek' => 'required|string',
            'dlugosc' => 'required|numeric',
            'masa' => 'required|numeric'
        ]);
        $fishing->fish->update($validated3);
       
        $validated = [
                'data' => $request->input('data'),
        'godzina' => $request->input('godzina'),
        'angler_id' => $fishing->angler->id,  // Poprawnie przypisane
        'fishingspot_id' => $fishing->fishingspot->id,
        'fish_id' => $fishing->fish->id,
            ];
        $fishing->update($validated);

        return redirect()->route('fishings.index')->with('success','Zmieniono połów');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fishing = Fishing::findOrFail($id);
        $fishing->delete();
        return redirect()->route('fishings.index')->with('success','Usunięto połów');
    }
}
