@extends('layout.app')

@section('content')
    <h1>Availiable Products now !!</h1>
    @if(count($Product)>1)
        @foreach($Product)
            <div class="well">
                {{$Product->name}}
            </div>
            @else
                <p>No post found</p>
@endsection