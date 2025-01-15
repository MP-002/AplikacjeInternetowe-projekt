<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Angler;
use App\Models\Fish;
use App\Models\User;
use App\Models\Fishing;
use App\Models\Fishingspot;

class LoginController extends Controller
{
    
    public function index()
    {
        if(session('user')==null)$user = 'guest';
        $fishings = Fishing::with(['angler','fish','fishingspot'])->paginate(10);
        return view('fishings.index', compact('fishings','user'));
    }

    public function login()
    {
        return view('fishings.login');
    }


    public function showregister()
    {
        return view('fishings.register');
    }

    public function register(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string',
            'haslo' => 'required|string',
        ]);
        $user = User::where('nazwa',$validated['nazwa'])
        ->where('haslo',$validated['haslo'])->first();
        if($user)return redirect()->route('showregister')->with('alert','Konto o takiej nazwie juz istnieje!');
        if(!$user){
            $user = User::create([
                'nazwa' => $validated['nazwa'],
                'haslo' => $validated['haslo'],
                'rola' => 'user',
            ]);
            session(['alert' => 'Rejestracja udana!']);
            return view('fishings.login');
        }
       
    }

    public function logout()
    {
        session(['user' => 'guest']);
        session(['username' => 'gość']);
        return redirect()->route('fishings.index');
    }
    
    public function check(Request $request)
    {
        $validated = $request->validate([
            'nazwa' => 'required|string',
            'haslo' => 'required|string',
        ]);
        $user = User::where('nazwa',$validated['nazwa'])
        ->where('haslo',$validated['haslo'])->first();
        
        $rola = $user->rola ?? 'guest';
        if(!$user)return redirect()->route('login')->with('alert','Bledne dane logowania');
    
        session(['user' => $rola]);
        session(['username' => $user->nazwa ?? ' ']);
        return redirect()->route('fishings.index');
    }
    
}
