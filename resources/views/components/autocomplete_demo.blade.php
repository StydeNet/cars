@extends('layout')

@section('styles')
    {!! Html::style('assets/css/jquery.easy-autocomplete.css') !!}
@endsection

@section('content')
    <h1>Autocomplete demo</h1>

    {!! Form::open(['class' => 'form']) !!}
        {!! Field::text('user', ['class' => 'easy-autocomplete']) !!}
        {!! Field::hidden('user_id', null, ['id' => 'user_id']) !!}
        {!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    {!! Html::script('assets/js/jquery.easy-autocomplete.js') !!}

    <script>
        $(document).ready(function () {

            $("#user").easyAutocomplete({
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
                    },

                    onSelectItemEvent: function() {
                        var user = $("#user").getSelectedItemData();

                        $('#user_id').val(user.id);
                    },

                    onClickEvent: function () {
                        var user = $("#user").getSelectedItemData();
                        window.location.href = '/users/' + user.id;
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
            }).change(function () {
                $('#user_id').val('');
            });
        });
    </script>

@endsection