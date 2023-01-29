<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\{ File, Faculte, Niveau, User };


class FichierController extends Controller
{
    public function index()
    {
        $files = Files::all();
        $facultes = Faculte::all();
        $niveau = Niveau::all();
        $user = User::all();


        return view('profil.show', compact('facultes', 'niveau', 'user'));
    }
 
    public function store(Request $request)
    {
        $data = $request->validate([
        'type_fichier' => 'required|max:10',
        'matiere' => 'required|max:100',
        'description' => 'required|max:500',
        'facultes' => 'required'
        ]);


        $files = new File;
        $files->type_fichier = $request->type_fichier;
        $files->matiere = $request->matiere;
        $files->description = $request->description;
        $files->id_user = auth()->user()->id;
        $files->id_fac = $request->facultes;
        $files->id_niveau = $request->niveau;
        $files->save();


        $file = $request->file('fichiers');
        $filename = time() . '.' . $file->extension();
        $filepath = $file->move('fichiers', $filename);

        File::create([
            'name'=> $filename,
            'path'=> $filepath
        ]);

        return redirect()->back();

}
}

