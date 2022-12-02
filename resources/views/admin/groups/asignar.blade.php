@extends('adminlte::page')

@section('title', 'Groups Asignar')

@section('content_header')
    <h1>List Groups</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="form-group">
        {!! Form::label('groups', 'Groups') !!}
        {{ Form::select('groups', $groups, null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'groups', 'placeholder' => 'Select.....']) }}
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="display compact" id="tabla_students" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Asignement</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr>
                                <td>{{ $usuario->id }}</td>
                                <td>{{ $usuario->name }}</td>
                                <td>
                                    <button class="btn btn-rounded btn-warning" id="asignar_student_{{ $usuario->id }}" onclick="asignados({{ $usuario->id }})">Asignement</button>
                                    <button class="btn btn-rounded btn-danger" id="desasignar_student_{{ $usuario->id }}" onclick="desasignados({{ $usuario->id }})">Cancel</button>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col text-center">
            <button type="submit" class="btn btn-rounded btn-primary" id="enviar_asignacion">Save</button>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <style>
        .body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .dark {
            background: #1f1f1f;
            color: #f1eded;
            transition: all 1.5s ease;
        }

        .navi {
            background-color: #272727;
        }

        .barber {
            background: rgba(84, 49, 27);
        }

        .back {
            background: linear-gradient(0deg, rgba(84, 49, 27) 0%, rgb(255, 255, 255) 150%);
        }

        .centering {
            text-align: center;
        }

        .anime {
            animation-duration: 3s;
            animation-name: slidein;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        .h1 {
            text-shadow:
                3px 3px 1px #272727,
                5px 5px 2px white,
                8px 8px 3px rgba(84, 49, 27);
            ;
        }

        .text-gradient {
            color: transparent;
            background-image: linear-gradient(to left, #272727, #3498db, rgba(84, 49, 27));
            background-clip: text;
            animation: color 5s linear infinite;
            background-size: 500%;
        }

        @keyframes color {
            from {
                background-position: 0% 50%;
            }

            to {
                background-position: 100% 50%;
            }
        }
    </style>
@stop

@section('js')

  
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    
    <script>

        /* $(document).ready(function(){

            $("tabla_students").DataTable({
                "order":[]
            });
        }) */

        var asignado = [];

        function asignados(id){
            asignado.push(id);

            $('#asignar_student_' + id).addClass('disabled');
            $('#desasignar_student_' + id).removeClass('disabled');
            

            console.log(asignado);
        }

        function desasignados(id){

            asignado = asignado.filter((item) => item !== id)

            $('#asignar_student_' + id).removeClass('disabled');
            $('#desasignar_student_' + id).addClass('disabled');

            console.log(asignado);
        }

        $('#enviar_asignacion').click(function () {

            var group = $('#groups').val();

            $.ajax({
                type: "POST",
                url: "{{ route('save_asigned') }}",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: {
                    "list_students": asignado,
                    "group": group
                },
                dataType: "json",
                success: function(response){

                }
            })
        })

        
    </script>
@stop