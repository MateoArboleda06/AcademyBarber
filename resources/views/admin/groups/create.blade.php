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
                    {!! Form::label('course', 'Course') !!}
                    {{ Form::select('course', $courses, null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'course', 'required', 'placeholder' => 'Select.....']) }}
                </div>

                @error('course')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('schedule', 'Schedule') !!}
                    {{ Form::select('schedule', ['Mañana', 'Tarde', 'Noche'], null, ['class' => 'form-control input-sm p-0 select2', 'id' => 'schedule', 'required', 'placeholder' => 'Select.....']) }}
                </div>

                @error('schedule')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                {!! Form::submit('Create Group', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> 

        $('.select2').select2({
            'placeholder': 'Select.....'
        });

        //$('select[name="teacher"] option:selected').text()

    </script>
@stop