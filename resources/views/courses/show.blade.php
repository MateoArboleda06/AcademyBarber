<x-app-layout>
    <br>
    <h1 class="welcome">Welcome to Course {{ $course->name }}</h1>

    <div style="text-align: center">
        <br>
        <a href="{{ route('course.index') }}"><button class="button">Back to Courses</button></a>
        <br>
        <br>

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Information
            </div>
            <div class="descrip card-body">
                <strong class="card-title">Teacher: </strong>{{ $course->teacher }}
                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Schedule: </strong> {{ $course1[0]->schedule }}

                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Group: </strong> {{ $course->group }}
                
                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Semester: </strong> {{ $course->semester }}
                
            </div>
        </div>

        <br>

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Description
            </div>
            <div class="descrip card-body">
                <li class="card-text">{{ $course->description }}</li>
            </div>
        </div>

        <br>

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Notes
            </div>
            <div class="descrip card-body">
                @if (!is_null($ratings->tracing))

                    <h5 class="card-title" style="font-weight: bold">Tracing: <normal style="font-weight: normal">{{ $ratings->tracing }}</normal></h5>
                    <br>
                    <h5 class="card-title" style="font-weight: bold">Partial One: <normal style="font-weight: normal">{{ $ratings->partial_one }}</normal></h5>
                    <br>
                    <h5 class="card-title" style="font-weight: bold">Partial Two: <normal style="font-weight: normal">{{ $ratings->partial_two }}</normal></h5>
                @else
                
                    <h5 class="card-title" style="font-weight: bold">Tracing: <normal style="font-weight: normal">Unrated</normal></h5>
                    <br>
                    <h5 class="card-title" style="font-weight: bold">Partial One: <normal style="font-weight: normal">Unrated</normal></h5>
                    <br>
                    <h5 class="card-title" style="font-weight: bold">Partial Two: <normal style="font-weight: normal">Unrated</normal></h5>

                @endif
            </div>
        </div>

    </div>

    <x-slot:footer>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Barber Academy</b> - All rights reserved.</small>
        </div>
    </x-slot:footer>

</x-app-layout>

<style>
    .welcome {
        text-align: center;
        color: white;
        text-shadow: black 0.1em 0.1em 0.2em;
        font-size: 26px;
    }

    .showinfo {
        color: black;
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

        width: auto;
        height: auto;
    }

    .button:not([disabled]):focus {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .button:not([disabled]):hover {
        box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
    }

    .team {
        border-radius: 5px;
        box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.2);
        margin: 50px;
        background-color: rgba(84, 49, 27);
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        -ms-border-radius: 5px;
        -o-border-radius: 5px;
    }

    .info {
        background-color: rgba(84, 49, 27);
    }

    .descrip {
        background-color: rgba(164, 120, 93);
    }

    .text-2xl {
        color: white;
    }
</style>
