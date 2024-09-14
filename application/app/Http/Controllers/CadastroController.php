<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pets;
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
        $pet->save();

        return redirect('/')->with('msg', "Pet inserido com sucesso!");
    }
}
