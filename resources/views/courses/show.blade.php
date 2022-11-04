@extends('layouts.plantilla')

@section('title', 'Course')

@section('content')
    <h1>Welcome to Course {{ $course->name }}</h1>
    <a href="{{ route('course.index') }}">Back to Courses</a>
    <br>
    <a href="{{ route('course.edit', $course) }}">Edit Course</a>
    <p><strong>Semester: </strong>{{ $course->semester }}</p>
    <p>{{ $course->description }}</p>

    <form action="{{ route('course.destroy', $course) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
@endsection
