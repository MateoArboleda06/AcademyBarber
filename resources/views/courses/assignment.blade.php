@extends('layouts.plantilla')

@section('title', 'Assignment')

@section('content')
    <h1>Assignment Teacher</h1>
    <form action="{{route('course.assignmentUp', $course)}}" method="post">
    
        @csrf

        @method('put')

        <label>
            Teacher Name:
            <br>
            <input type="text" name="teacher" value="{{ old('teacher') }}">
        </label>

        @error('teacher')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror
    
        <br>
        <br>
        <button type="submit">Assignment Teacher</button>
    </form>
@endsection