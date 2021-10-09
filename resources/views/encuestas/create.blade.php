@extends('layouts.app')

@section('content')

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <form action="{{ route('encuestas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">

            <div class="col-6">
                <label for="pregunta_1" class="form-label">Pregunta 1</label>
                <input type="text" class="form-control" id="pregunta_1" name="pregunta_1"
                    placeholder="Ingrese la pregunta numero 1">
                @if ($errors->has('pregunta_1'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('pregunta_1') }}</label>
                @endif
            </div>
            <div class="col-6">
                <label for="pregunta_2" class="form-label">Pregunta 2</label>
                <input type="text" class="form-control" id="pregunta_2" name="pregunta_2"
                    placeholder="Ingrese la pregunta numero 2">
                @if ($errors->has('pregunta_2'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('pregunta_2') }}</label>
                @endif
            </div>
            <div class="col-6">
                <label for="pregunta_3" class="form-label">Pregunta 3</label>
                <input type="text" class="form-control" id="pregunta_3" name="pregunta_3"
                    placeholder="Ingrese la pregunta numero 3">
                @if ($errors->has('pregunta_3'))
                    <label id="minmaxlength-error" class="error text-danger"
                        for="minmaxlength">{{ $errors->first('pregunta_3') }}</label>
                @endif
            </div>

            <div class="col-6">
                <label for="button_send" class="form-label">Enviar</label>
                <button type="submit" name="button_send" class="btn btn-success form-control">OK</button>
            </div>







        </div>

    </form>

@endsection
