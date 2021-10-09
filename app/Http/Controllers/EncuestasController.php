<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Encuestas;

class EncuestasController extends Controller
{
    public function index(){

        $encuestas = Encuestas::get();



        return view('encuestas.index',[
            'encuestas' => $encuestas,
        ]);

    }

    public function create(){
        return view('encuestas.create');
    }

    public function store(Request $request){

        $request->validate(
        [
            'pregunta_1' => 'required',
            'pregunta_2' => 'required',
            'pregunta_3' => 'required',
        ],
        [
            'pregunta_1.required' => 'La pregunta es requerida',
            'pregunta_2.required' => 'La pregunta es requerida',
            'pregunta_3.required' => 'La pregunta es requerida',
        ]
        );


        $encuesta = new Encuestas;
        $encuesta->pregunta_1 = $request->pregunta_1;
        $encuesta->pregunta_2 = $request->pregunta_2;
        $encuesta->pregunta_3 = $request->pregunta_3;
        $encuesta->created_by_user_id = auth()->user()->id;
        $encuesta->save();

        return back()->with('message','La encuesta se almaceno con exito');


    }

    public function edit($id){

        $encuesta = Encuestas::where('id',$id)->first();
        $encuesta1 = Encuestas::findOrFail($id);


        return view('encuestas.edit',[
            'encuesta' => $encuesta,
        ]);
    }

    public function update(Request $request, $id){

        $request->validate(
            [
                'pregunta_1' => 'required',
                'pregunta_2' => 'required',
                'pregunta_3' => 'required',
            ],
            [
                'pregunta_1.required' => 'La pregunta es requerida',
                'pregunta_2.required' => 'La pregunta es requerida',
                'pregunta_3.required' => 'La pregunta es requerida',
            ]
            );


            $encuesta = Encuestas::where('id',$id)->first();
            $encuesta->pregunta_1 = $request->pregunta_1;
            $encuesta->pregunta_2 = $request->pregunta_2;
            $encuesta->pregunta_3 = $request->pregunta_3;
            $encuesta->updated_by_user_id = auth()->user()->id;
            $encuesta->save();

            return back()->with('message','La encuesta se actualizo con exito');


    }

    public function delete($id){

        Encuestas::where('id',$id)->delete();

        return back();

    }
}
