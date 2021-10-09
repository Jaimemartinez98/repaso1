@extends('layouts.app')

@section('content')


    <div class="row" style="padding: 40px !important;">

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Primera Pregunta</th>
                    <th scope="col">Segunda Pregunta</th>
                    <th scope="col">Tercera Pregunta</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($encuestas as $encuesta)
                    <tr>
                        <th scope="row">{{ $encuesta->id }}</th>
                        <td>{{ $encuesta->pregunta_1 }}</td>
                        <td>{{ $encuesta->pregunta_2 }}</td>
                        <td>{{ $encuesta->pregunta_3 }}</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">

                                <a href="{{ route('encuestas.edit', $encuesta->id) }}" class="btn btn-warning" role="button">Editar</a>

                                <form action="{{ route('encuestas.delete', $encuesta->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </div>


@endsection
