@extends('adminlte::page')

@section('title', 'teste')

@section('content_header')
    <h1 class="text-black text-center"><b>teste</b></h1>
@stop
@section('content')

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <h3>Calendar</h3>

    <div id='calendar'></div>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                events : [
                        @foreach($testes as $teste)
                    {
                        title : '{{ $teste->nome }}',
                        start : '{{ $teste->data }}',
                        url : '{{ route('teste.edit', $teste->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>

    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
    <script>
        $('.date').datepicker({
            autoclose: true,
            dateFormat: "yy-mm-dd"
        });
    </script>



@stop