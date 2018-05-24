@extends('layout.app')
@section('content')
    <h1>add product</h1>
    {!! Form::open(['action' => 'ProductController@store','method'=>'Post']) !!}
    <div class = "form-group">
        {{  Form::label('name','Name')}}
        {{Form::text('name', '',['class'=>'form-control'])}}
    </div>

    <div class = "form-group">
        {{Form::label('quantity','Quantity')}}
        {{Form::text('quantity', '',['class'=>'form-control'])}}
    </div>

    <div class = "form-group">
        {{  Form::label('price','Price')}}
        {{Form::text('price', '',['class'=>'form-control'])}}
    </div>

    <div class = "form-group">
        {{  Form::label('location','Location')}}
        {{Form::text('location', '',['class'=>'form-control'])}}
    </div>

    <div class="form-group">
    {{ Form::label('discription', 'Discription')}}
    {{Form::textarea('discription','',['class'=>'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::file('product_image')}}
    </div>
    {{form::submit('save',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection