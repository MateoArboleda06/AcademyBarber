@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Create Course</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.courses.store']) !!}

                <div class="form-group">
                    {!! Form::label('name', 'Name') !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name Course', 'required']) !!}
                    {{-- techaer --}}
                </div>

                @error('name')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                <div class="form-group">
                    {!! Form::label('semester', 'Semester') !!}
                    {!! Form::text('semester', null, ['class' => 'form-control', 'placeholder' => 'Semester Course', 'required']) !!}
                </div>

                @error('semester')
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
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description Course', 'required']) !!}
                </div>

                @error('description')
                    <span class="text-danger">{{ $message }}*</span>
                @enderror

                {!! Form::submit('Create Course', ['class' => 'btn btn-primary']) !!}

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