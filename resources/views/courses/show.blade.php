@extends('layouts.plantilla')

@section('title', 'Course')

@section('content')
    <br>
    <h1 class="welcome">Welcome to Course {{ $course->name }}</h1>

    <div style="text-align: center">
        <br>
        <a href="{{ route('course.index') }}"><button class="button">Back to Courses</button></a>
        <br>
        <br>
        <a href="{{ route('course.edit', $course->id) }}"><button class="button">Edit Course</button></a>
        <br>
        <br>
        <a href="{{ route('course.assignment', $course->id) }}"><button class="button">Assignment</button></a>
        <br>
        <br>
        <p class="showinfo"><strong>Semester: </strong>{{ $course->semester }}</p>
        <p class="showinfo">{{ $course->description }}</p>
        <p class="showinfo"><strong>Teacher: </strong>{{ $course->teacher }}</p>

        <form action="{{ route('course.destroy', $course) }}" method="POST">
            @csrf
            @method('delete')
            <button class="button" type="submit">Delete</button>
        </form>
    </div>
@endsection

<style>
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em
    }

    .showinfo {
        color: white;
    }

    /*button*/
    .button {
        background: linear-gradient(to bottom right, rgba(164, 120, 93), rgba(28, 27, 23));
        border: 0;
        border-radius: 12px;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-block;
        font-family: -apple-system, system-ui, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 2.5;
        outline: transparent;
        padding: 0 1rem;
        text-align: center;
        text-decoration: none;
        transition: box-shadow .2s ease-in-out;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        white-space: nowrap;
    }

    .button:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }
</style>
