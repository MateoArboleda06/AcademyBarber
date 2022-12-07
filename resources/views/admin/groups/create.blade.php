@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Create Group</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.groups.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Group', 'required']) !!}
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('schedule', 'Schedule') !!}
                    {{ Form::select('schedule', ['Mañana', 'Tarde', 'Noche'], null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'schedule', 'required', 'placeholder' => 'Select.....']) }}
                </div>

                @error('schedule')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('teacher', 'Teacher') !!}
                    {{ Form::select('teacher', $usuarios, null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'teacher', 'required', 'placeholder' => 'Select.....']) }}
                </div>

                @error('teacher')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('course', 'Course') !!}
                    {{ Form::select('course', $courses, null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'course', 'required', 'placeholder' => 'Select.....']) }}
                </div>

                @error('course')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                

                {!! Form::submit('Create Group', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
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
    <script> 

        $('.select2').select2({
            'placeholder': 'Select.....'
        });

        //$('select[name="teacher"] option:selected').text()

    </script>
@stop