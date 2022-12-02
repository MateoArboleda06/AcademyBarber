<x-app-layout>
    <h1 class="welcome">Schedule's Student {{ $user }}</h1>
    <br>


    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Mañana</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Course: </strong>{{ $courses1->name }} <br>
            <strong>Semester: </strong>{{ $courses1->semester }} <br>
            <strong>Teacher: </strong>{{ $course1[0]->teacher }} <br>
            <strong>Group: </strong>{{ $course1[0]->name }}
        </div>
    </div>
    <br>

    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Tarde</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Course: </strong>{{ $courses2->name }} <br>
            <strong>Semester: </strong>{{ $courses2->semester }} <br>
            <strong>Teacher: </strong>{{ $course2[0]->teacher }} <br>
            <strong>Group: </strong>{{ $course2[0]->name }}
        </div>
    </div>
    <br>

    <div class="card text-center">
        <div class="info card-header">
            <strong>
                <h2 class="text-white">Noche</h2>
            </strong>
        </div>

        <div class="descrip card-body">
            <strong>Course: </strong>{{ $courses3->name }} <br>
            <strong>Semester: </strong>{{ $courses3->semester }} <br>
            <strong>Teacher: </strong>{{ $course3[0]->teacher }} <br>
            <strong>Group: </strong>{{ $course3[0]->name }}
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
