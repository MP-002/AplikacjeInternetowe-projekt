<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (session('user') != 'admin') {
            return redirect('/'); 
        }
        $users = User::paginate(10);
        return view('fishings.admin', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = new User();
        return view('admin.create', compact('user'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string',
            'haslo' => 'required|string',
            'rola' => 'required|string'
        ]);

        $user = User::create($validated);
        return redirect()->route('admin')->with('success', 'Dodano usera');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
       
        $validated = [
        'nazwa' => $request->input('nazwa'),
        'haslo' => $request->input('haslo'),
        'rola' => $request->input('rola'),
            ];
        $user->update($validated);

        return redirect()->route('admin')->with('success','Zmieniono usera');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin')->with('success','Usunięto usera');
    }
}
