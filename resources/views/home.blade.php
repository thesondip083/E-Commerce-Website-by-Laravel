@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Dashboard</div>

        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <img src="{{$user->avatar}}" alt="" height="200" width="200" style="border-radius: 50%;">
            <span><b><h2>Welcome {{$user->name}}</h2></b></span>
        </div>
    </div>
        
@endsection
