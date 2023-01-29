<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Http\session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Faculte;
use App\Models\User;


class UserController extends Controller
{
    public function Home(){

        $facultes= Faculte::all();
        return view('index', compact('facultes'));
    }

    public function Register(){

        $facultes= Faculte::all();
        return view('register', compact('facultes'));
    }

    public function Create(Request $request){
        $data = $request->all();

        $request->password = Hash::make($request->password);
        $data['password'] = $request->password;

        $save = User::create($data);
        session()->flash('success', 'Un nouvel utilisateur ajouté');
        return back();
    }

    public function Login(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function show(User $user)
    {
        $facultes = Faculte::all();
        return view('dashboard.members.show', compact('users', 'facultes'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function UpdateProfil(Request $request, User $user)
    {
        $data = $request->validate([
        'firstname' => 'required|max:250',
        'lastname' => 'required|max:250',
        'gender' => 'required',
        'contact' => 'required|min:8|max:10',
        'email' => 'required|email',
        'id_fac' => 'required',
        'password' => 'required',
        ]);

        $user->update($request->all());
        $user->save();

        alert()->success('Infos du utilisateur mise à jour avec succès !')->persistent('Ok');


        return redirect('profil/show')->with('message', "Infos mises à jour !");
    }
    
}
