<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pets;
use App\Models\User;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view('actions.create');
    }

    public function store(Request $request)
    {
        $pet = new Pets();
        $pet->nome = $request->nome;
        $pet->pet = $request->pet;

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/pets'), $imageName);

            $pet->image = $imageName;
        }
        $user = auth()->User();
        $pet->user_id = $user->id;

        $pet->save();

        return redirect('/dashboard');
        
    }

    public function show($id)
    {
        $pet = Pets::findOrFail($id);

        $petOwner = User::where('id', $pet->user_id)->first()->toArray();

        return view('dashboard', ['pets' => $pet, 'petOwner' => $petOwner]);
    }


    public function dashboard() 
    {
        $user = auth()->User();
        
        $pets = $user->pets;

        return view('dashboard', ['pets' => $pets]);
    }
}
