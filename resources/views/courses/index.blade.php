@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome to Courses</h1>

    <a href="{{ route('course.create') }}">Create Course</a>

    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="{{ route('course.show', $course->id) }}">{{ $course->name }}</a>
            </li>
        @endforeach
    </ul>

    {{-- {{ $courses->links() }} --}}
@endsection
