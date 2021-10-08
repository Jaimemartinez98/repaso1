@extends('layouts.app')

@section('content')


    <div class="row">

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                        <button type="button" class="btn btn-danger">Left</button>
                        <button type="button" class="btn btn-warning">Middle</button>
                      </div>

                </td>
              </tr>

            </tbody>
          </table>


    </div>


@endsection
