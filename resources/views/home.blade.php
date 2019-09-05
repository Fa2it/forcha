@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
              <a href="/gametwo" class="m-1 btn btn-primary">Got to Game Two</a>
                <div class="card-header bg-secondary">Select Minimum of 1 Numbers <strong>You are at Home</strong></div>

                <div class="card-body">
                    <searchform-component></searchform-component>
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
                          @foreach ($wins as $win)
                          <tr>
                            <td>{{ $win->col_1 }}</td>
                            <td>{{ $win->col_2 }}</td>
                            <td>{{ $win->col_3 }}</td>
                            <td>{{ $win->col_4 }}</td>
                            <td>{{ $win->col_5 }}</td>
                          </tr>

                          @endforeach

                        </tbody>
                      </table>

                    </div>
                    <div class="card-footer mt-2">
                      {{ $wins->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
