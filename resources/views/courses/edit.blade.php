@extends('layouts.plantilla')

@section('title', 'Edit Course')

@section('content')
    <h1>Edit Course</h1>

    <form action="{{route('course.update', $course) }}" method="POST">

        @csrf

        @method('put')

        <label>
            Course Name:
            <br>
            <input type="text" name="name" value="{{ old('name', $course->name) }}">
        </label>

        @error('name')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Semester:
            <br>
            <input type="text" name="semester" value="{{ old('semester', $course->semester) }}">
        </label>

        @error('semester')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Teacher Name:
            <br>
            <input type="text" name="teacher" value="{{ old('teacher', $course->teacher) }}">
        </label>

        @error('teacher')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <label>
            Description:
            <br>
            <textarea name="description" rows="5">{{ old('description', $course->description) }}</textarea>
        </label>

        @error('description')
            <br>
            <small>*{{ $message }}</small>
            <br>
        @enderror

        <br>
        <button type="submit">Update Course</button>
    </form>
@endsection
