<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medico;
use App\Models\MedicoPets;
use App\Models\Pets;

class MedicoController extends Controller
{
    public function index()
    {
        $medicos = Medico::all();

        return view("welcome", ["medicos" => $medicos]);
    }

    public function store(Request $request) 
    {
        $medicoPets = new MedicoPets();
        $medicoPets->pet_id = $request->pet_id;
        $medicoPets->medico_id = $request->medico_id;
        $medicoPets->data_consulta = $request->data_consulta;

        $medicoPets->save();

        return redirect('/dashboard');
    }

    public function indexMedico()
    {
        $medicos = Medico::all();
        $pets = Pets::all();

        $user = auth()->User();
        
        $pets = $user->pets;

        return view('atendimento', compact('medicos', 'pets'));
    }
}
