<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    public function index(){


        return view('encuestas.index');

    }

    public function create(){
        return view('encuestas.create');
    }

    public function store(Request $request){

    }

    public function edit($id){
        return view('encuestas.edit');
    }

    public function update(Request $request, $id){

    }

    public function delete($id){

    }
}
