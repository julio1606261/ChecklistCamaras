<?php

namespace App\Http\Controllers;

use App\Models\ChecklistModel;
use App\Models\ChecklistFotos;
use App\Models\ChecklistPreguntas;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{
    public function checklist()
    {
        return view('checklist');
    }

    public function checklist_details($id)
    {
        $checklist = ChecklistModel::find($id);
        $fotos = ChecklistFotos::where('id_checklistCamaras','=',$id)->get();
        return view('checklist_details', compact('checklist','fotos'));
    }

    public function checklist_store(Request $request)
    {
        
        $files = $request->file('foto');
        $respuesta1 = request('pregunta1');
        $respuesta2 = request('pregunta2');
        $respuesta3 = request('pregunta3');
        $respuesta4 = request('pregunta4');
        $respuesta5 = request('pregunta5');
        $respuesta6 = request('pregunta6');
        $respuesta7 = request('pregunta7');
        $id_checklist = ChecklistModel::latest()->first();
        
        if($id_checklist == null)
        {
            $id_checklistCamaras = 0;
        }
        else{
            $id_checklistCamaras = $id_checklist->id_checklist;
        }

        $id = ChecklistModel::create([
            'id_checklist' => $id_checklistCamaras+1,
            'fecha' => request('fecha'),
            'respuesta1' =>  $respuesta1,
            'respuesta2' =>  $respuesta2,
            'respuesta3' =>  $respuesta3,
            'respuesta4' =>  $respuesta4,
            'respuesta5' =>  $respuesta5,
            'respuesta6' =>  $respuesta6,
            'respuesta7' =>  $respuesta7,
            'observaciones' => request('observaciones'),
        ]);

        $i = 0;

        if($request->hasFile('foto'))
        {
            foreach($files as $foto){
                $i = $i + 1;
                $destino = 'images/';
                $nombreFoto = 'RevisionCCT'. '-' . time(). $i. '.' . $foto->getClientOriginalExtension();
                $subirFoto = $foto->move($destino, $nombreFoto);

                ChecklistFotos::create([
                    'id_checklistCamaras' => $id->id,
                    'foto' => $destino.$nombreFoto,
                ]);
            }
           
        }

        return redirect()->route('home');   
    }
}
