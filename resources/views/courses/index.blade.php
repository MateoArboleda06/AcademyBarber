@extends('layouts.plantilla')

@section('title', 'Courses')

@section('content')
    <h1>Welcome to Courses</h1>

    <a href="{{ route('course.create') }}">Create Course</a>

    @foreach ($courses as $course)
        <div class="card" style="width: 18rem;">
            <img src="laravel.jpg" alt="" style="width:100%" class="card-img-top">
            <div class="card-body">
                <center>
                    <a href="{{ route('course.show', $course) }}">{{ $course->name }}</a>
                    <p class="title"><strong>Semester:</strong>{{ $course->semester }}</p>
                    <p class="card-text"><strong>Teacher: </strong>{{ $course->teacher }}</p>
                    <p class="card-text">{{ $course->description }}</p>
                </center>

            </div>
        </div>
    @endforeach


    {{-- {{ $courses->links() }} --}}
@endsection

<style>
    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .card {
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 50px;
        background-color:
    }

    .container {
        padding: 20px 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }
</style>
