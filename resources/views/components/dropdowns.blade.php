@extends('layout')

@section('content')
    <h1>Dynamic Dropdowns</h1>
    {!! Form::open(['class' => 'form']) !!}
        {!! Field::select('make_id', Cars\Models\Make::lists('name', 'id')->toArray()) !!}
        {!! Field::select('makeyear_id', Cars\Models\MakeYear::lists('year', 'id')->toArray()) !!}
        {!! Field::select('model_id', Cars\Models\Model::lists('name', 'id')->toArray()) !!}
    {!! Form::close() !!}
@endsection
