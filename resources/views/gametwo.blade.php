@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
              <a href="/home" class="m-1 btn btn-success">Go to Main Game</a>
                <div class="card-header bg-secondary text-center"><strong>You are at Game Two</strong></div>

                <div class="card-body">
                    <searchformgame-component></searchformgame-component>
                    <div class="result mt-3">
                      <table class="table table-sm  table-bordered  table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#1</th>
                            <th scope="col">#2</th>
                            <th scope="col">#3</th>
                            <th scope="col">#4</th>
                            <th scope="col">#5</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($wins->generator() as $win)
                          <tr>
                            <td>{{ $win[0] }}</td>
                            <td>{{ $win[1] }}</td>
                            <td>{{ $win[2] }}</td>
                            <td>{{ $win[3] }}</td>
                            <td>{{ $win[4] }}</td>
                          </tr>
                          @endforeach

                        </tbody>
                      </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
