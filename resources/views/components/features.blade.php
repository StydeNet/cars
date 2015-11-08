@extends('layout')

@section('content')
    <h1>Features</h1>
    {!! Form::model($car, ['method' => 'POST', 'class' => 'form']) !!}
        {!! Field::selectMultiple('features[]', $features, null, ['label' => 'Features']) !!}
        <button type="submit" class="btn btn-primary">Save</button>
    {!! Form::close() !!}
@endsection
