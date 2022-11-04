@extends('layouts.plantilla')

@section('title', 'Create Course')

@section('content')
    <h1>Create Course</h1>
    <form action="{{ route('course.store') }}" method="POST">

        @csrf

        <label>
            Course Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Semester:
            <br>
            <input type="text" name="semester" value="{{ old('semester') }}">
        </label>

        @error('semester')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        <br>
        {{-- <label>
            Teacher Name:
            <br>
            <input type="text" name="teacher" value="{{ old('teacher') }}">
        </label>

        @error('teacher')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror --}}

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ old('description') }}</textarea>
        </label>

        @error('description')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Create Course</button>
    </form>
@endsection
