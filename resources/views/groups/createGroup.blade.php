@extends('layouts.plantilla')

@section('title', 'Create Group')

@section('content')
    <h1>Create Group</h1>
    <form action="{{ route('group.store') }}" method="POST">

        @csrf

        <label>
            Group Name:
            <br>
            <input type="text" name="name" value="{{ old('name') }}">
        </label>

        @error('name')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        {{-- <br>
        <label>
            Teacher Name:
            <br>
            <input type="text" name="teacher" value="{{ old('teacher') }}">
        </label>

        @error('teacher')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Students:
            <br>
            <textarea name="students" rows="5">{{ old('students') }}</textarea>
        </label>

        @error('students')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Course:
            <br>
            <input type="text" name="course" value="{{ old('course') }}">
        </label>

        @error('course')
            <br>
            <small style="color red">*{{ $message }}</small>
            <br>
        @enderror --}}

        <br>
        <br>
        <button type="submit">Create Group</button>
    </form>
@endsection
