@extends('layout')

@section('styles')
    {!! Html::style('assets/css/jquery.easy-autocomplete.css') !!}
@endsection

@section('content')
    <h1>Autocomplete demo</h1>

    {!! Form::open(['class' => 'form']) !!}
        {!! Field::text('user', ['class' => 'easy-autocomplete']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    {!! Html::script('assets/js/jquery.easy-autocomplete.js') !!}

    <script>
        $(document).ready(function () {
            var options = {
                url: "/resources/people.json",

                getValue: "name",

                template: {
                    type: "description",
                    fields: {
                        description: "email"
                    }
                },

                list: {
                    match: {
                        enabled: true
                    }
                },

                theme: "bootstrap",
            };

            var optionsAjax = {
                url: "/autocomplete/users",

                getValue: "name",

                template: {
                    type: "description",
                    fields: {
                        description: "email"
                    }
                },

                list: {
                    match: {
                        enabled: true
                    }
                },

                theme: "bootstrap",

                ajaxSettings: {
                    dataType: "json",
                    method: "GET",
                    data: {
                    }
                },

                preparePostData: function(data) {
                    data.term = $("#user").val();
                    return data;
                },

                requestDelay: 500
            };

            $("#user").easyAutocomplete(options);
        });
    </script>

@endsection