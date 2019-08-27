@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Forcha App</div>
                <div class="card-body">
                      <h2>Welcome To Forch and Co App </h2>
                      <p class="text text-info">Please   <a class="" href="{{ route('login') }}">{{ __('Login') }}</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
