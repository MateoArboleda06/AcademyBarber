<x-app-layout>
    <br>
    <h1 class="welcome">Welcome to Course {{ $course->name }}</h1>

    <div style="text-align: center">
        <br>
        <a href="{{ route('course.index') }}"><button class="button">Back to Courses</button></a>
        <br>
        <br>
{{--         <p class="showinfo"><strong>Semester: </strong>{{ $course->semester }}</p>
        <p class="showinfo">{{ $course->description }}</p>
        <p class="showinfo"><strong>Teacher: </strong>{{ $course->teacher }}</p>
        <br> --}}

        {{--         <a href="#"><button class="button">Seguimiento</button></a>
        <br>
        <br>
        <a href="#"><button class="button">Parcial 1</button></a>
        <br>
        <br>
        <a href="#"><button class="button">Parcial 2</button></a> --}}

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Information
            </div>
            <div class="descrip card-body">
                <strong class="card-title" {{-- style="font-weight: bold" --}}>Teacher: </strong>{{ $course->teacher }}
                    {{-- <p class="card-text" style="font-weight: normal">{{ $course->teacher }}</p> --}}
                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Schedule: </strong> {{ $course1[0]->schedule }}
                    {{-- <p class="card-text" style="font-weight: normal">{{ $course1[0]->schedule }}</p> --}}
                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Group: </strong> {{ $course->group }}
                    {{-- <p class="card-text" style="font-weight: normal">{{ $course->group }}</p> --}}
                
                <br>
                <br>
                <strong class="card-title" style="font-weight: bold">Semester: </strong> {{ $course->semester }}
                    {{-- <p class="card-text" style="font-weight: normal">{{ $course->semester }}</p> --}}
                

            </div>
        </div>

        <br>

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Description
            </div>
            <div class="descrip card-body">
                <li class="card-text">{{ $course->description }}</li>
                <li class="card-text">Selection of hair and scalp treatment techniques according to established assessment and protocol.</li>
                <li class="card-text">Prepare and perform the hair procedure taking into account the technical protocol, biosecurity and safety standards.</li>
            </div>
        </div>

        <br>

        <div class="card text-center">
            <div class="info card-header text-2xl">
                Notes
            </div>
            <div class="descrip card-body">
                <h5 class="card-title" style="font-weight: bold">Partial 1: <normal style="font-weight: normal">4.0</normal></h5>
                <br>
                <h5 class="card-title" style="font-weight: bold">Follow-up: <normal style="font-weight: normal">4.5</normal></h5>
                <br>
                <h5 class="card-title" style="font-weight: bold">Partial 2: <normal style="font-weight: normal">3.5</normal></h5>
            </div>
        </div>

    </div>

    <x-slot:footer>
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
